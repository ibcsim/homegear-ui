
////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
function readCookie(key) {
    const regex = new RegExp('(?:^|; )' + encodeURIComponent(key) + '=([^;]*)');
    const result = regex.exec(document.cookie);

    return result ? result[1] : null;
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
function homegearRandomUserName() {
    const possible = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    let id = 'ui';

    for (let i = 0; i < 8; i++)
        id += possible.charAt(Math.floor(Math.random() * possible.length));

    return id;
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
function homegear_new() {
    return new HomegearWS(
        websocket_url,
        websocket_port,
        homegearRandomUserName(),
        websocket_security_ssl,
        ...arguments
    );
}

if (location.protocol == 'https:')
    websocket_security_ssl = true;

if (websocket_url == '' || !websocket_url)
    console.log('Homegear settings error!');
else if (websocket_security == 'session')
    var homegear = homegear_new(readCookie('PHPSESSIDUI'));
else if (websocket_security == 'basic')
    var homegear = homegear_new(websocket_user, websocket_password);
else if (websocket_security == 'none')
    var homegear = homegear_new();

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
homegear.ready(function() {
    var addDevicesAsHomegearPears = Object.keys(interfaceData.map_invoke).map(Number);

    console.log('HomegearPears: ');
    console.log(addDevicesAsHomegearPears);

    homegear.addPeers( addDevicesAsHomegearPears );
});

////////////////////////////////////////////////////////////////////////////////////////////////////////
//get new sessionid when websocket reconnects
////////////////////////////////////////////////////////////////////////////////////////////////////////
homegear.error(function () {
    if (parseInt(new Date()) - 6000 > parseInt(startDate))
        window.location.reload(true);
});

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
homegear.event(x => console.log(JSON.stringify(x, null, 4)));

homegear.event(handle_homegear_update);

if(location.protocol == 'https:' && websocket_security_ssl !== true)
    console.log('Homegear security issue!');
else
    homegear.connect();

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
function handle_homegear_update(resp) {
    // DEBUG: works as expected
    const peer    = resp.params[1],
          channel = resp.params[2],
          name    = resp.params[3],
          value   = resp.params[4];

    if (!(peer    in interfaceData.map_invoke &&
          channel in interfaceData.map_invoke[peer] &&
          name    in interfaceData.map_invoke[peer][channel]))
        return;

    const inputs = interfaceData.map_invoke[peer][channel][name];
    for (const input of inputs) {
        if (!(input.databaseId in interfaceData.devices &&
              input.control    in interfaceData.devices[input.databaseId]
                                               .controls &&
              input.input      in interfaceData.devices[input.databaseId]
                                               .controls[input.control]
                                               .variableInputs))
            continue;

        interfaceData.devices[input.databaseId]
            .controls[input.control]
            .variableInputs[input.input].properties.value = value;

        const role = interfaceData.devices[input.databaseId].metadata.role;
        app.$root.$emit('role-update', role);
    }

}

////////////////////////////////////////////////////////////////////////////////////////////////////////
// Extensions to the homegear object
////////////////////////////////////////////////////////////////////////////////////////////////////////
function params_create(input, value) {
    if ('value' in input) {
        value = input.value;
    }
    return [
        Number(input.peer),
        Number(input.channel),
        input.name,
        value,
        false,
    ];
}



homegear.invoke_multi = function (ops) {
    const object = {
        jsonrpc: '2.0',
        method: 'system.multicall',
        params: ops,
    };

    console.log(JSON.stringify(object, null, 4));

    return this.invoke(object);
}



homegear.value_set = function (input, value) {
    const object = {
        jsonrpc: '2.0',
        method: 'setValue',
        params: params_create(input, value),
    };

    console.log(JSON.stringify(object, null, 4));

    return this.invoke(object);
}



homegear.value_set_multi = function (ops) {
    return this.invoke_multi([
        ops.map(op => ({
            methodName: 'setValue',
            params: params_create(op.input, op.value),
        }))
    ]);
}
