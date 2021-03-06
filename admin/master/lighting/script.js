////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
let lighting_switch_l2 = clone(shif_device);
lighting_switch_l2.methods.change = function(event) {
    homegear.value_set_clickcounter(this, this.output, !this.props.value);
}
lighting_switch_l2.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status"
                     v-bind:place="place"
                     v-bind:actions="true"
                     v-on:click_icon="change($event, true)"
                     v-on:click="level3(device, breadcrumb)">
    </shif-generic-l2>
`;

let lighting_switch_l3 = clone(shif_device);
lighting_switch_l3.methods.change = function(event) {
    homegear.value_set_clickcounter(this, this.output, !this.props.value);
}
lighting_switch_l3.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="title"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:place="place"
                     v-bind:status="status_minimal()"
                     v-on:click="change">
    </shif-generic-l2>
`;

shif_comps_create('lightingSwitch', lighting_switch_l2, lighting_switch_l3);



let lighting_brightness = clone(shif_device);
lighting_brightness.methods.change = function(event) {
    homegear.value_set_clickcounter(this, this.output, this.props.value);
}
lighting_brightness.template = `
    <shif-slider v-bind:min="props.minimumScaled"
                 v-bind:max="props.maximumScaled"
                 v-bind:unit="props.unit"
                 v-bind:value="props.value"
                 v-bind:title="title"
                 v-bind:step=5
                 v-on:change="change"
                 v-model:value="props.value">
    </shif-slider>
`;

shif_comps_create('lightingBrightness', lighting_switch_l2, lighting_brightness);



let lighting_button_l2 = clone(shif_device);
lighting_button_l2.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status"
                     v-bind:place="place"
                     v-on:click="level3(device, breadcrumb)">
    </shif-generic-l2>
`;

let lighting_button_l3 = clone(shif_device);
lighting_button_l3.methods.change = function(event, down) {
    homegear.value_set_clickcounter(this, this.output, down);
}
lighting_button_l3.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="title"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status_minimal()"
                     v-bind:place="place"
                     v-on:mousedown="change($event, true)"
                     v-on:mouseup="change($event, false)">
    </shif-generic-l2>
`;

shif_comps_create('lightingButton', lighting_button_l2, lighting_button_l3);
shif_comps_create('refresh', lighting_button_l2, lighting_button_l3);



let lighting_color_l2 = clone(shif_device);
lighting_color_l2.template = `
    <shif-generic-l2 v-bind:icon="cond.icon.name"
                     v-bind:title="dev.label"
                     v-bind:active="{icon: cond.icon.color, text: cond.text.color}"
                     v-bind:status="status"
                     v-bind:place="place"
                     v-on:click="level3(device, breadcrumb)">
    </shif-generic-l2>
`;

let lighting_color_l3 = clone(shif_device);
lighting_color_l3.methods.change = function(event) {
    this.props.value = event.color.hexString;
    homegear.value_set_clickcounter(this, this.output, this.props.value);
};
lighting_color_l3.template = `
    <shif-colorpicker v-bind:width="500"
                      v-bind:height="520"
                      v-bind:color="props.value"
                      v-on:input:end="change" />
`;

shif_comps_create('lightingColor', lighting_color_l2, lighting_color_l3);
