<?php 
    $defaultInterfaceDataJson = '
{
    "users": {
        "1": {
            "id": "1",
            "username": "ui",
            "settings": {
                "theme": "dark",
                "highlight": "#0056b7",
                "firstBreadcrumb": "Haus",
                "firstBreadcrumbId": "house",
                "showFloor": "true",
                "language": "de-DE",
                "consoleLog": "true"
            }
        }
    },
    "settings": {
        "timezone": "Europe/Berlin",
        "errorReporting": "-1",
        "salt": "",
        "interfacePath": "/",
        "loginMethod": "input",
        "controllerUrl": "index.php",
        "cookieName": "smarthome",
        "directLoginUserKey": "",
        "directLoginUrlKey": "",
        "homegear": {
            "url": "location.hostname",
            "port": "location.port",
            "security": "session",
            "ssl": "false",
            "user": "ui",
            "password": ""
        }
    },
    "mainmenu": [
        {
            "id": "1",
            "name": "house",
            "icon": "haus1",
            "access": "-1",
            "onclick": "main(this, {name:firstBreadcrumb,content:\'house\'})"
        },
        {
            "id": "2",
            "name": "settings",
            "icon": "einstellungen1",
            "access": "-1",
            "onclick": "main(this, {name:\'Einstellungen\',content:\'settings\',menu:\'settings\'})"
        },
        {
            "id": "3",
            "name": "logoff",
            "icon": "power1",
            "access": "-1",
            "onclick": "user_logoff()"
        }
    ],
    "menu": [
        {
            "id": "1",
            "name": "Benutzer",
            "mainmenu": "settings",
            "category": "user",
            "level": "1",
            "icon": "profil1",
            "access": "-1",
            "onclick": "menu({mainmenu:\'settings\',level:\'2\',category:\'user\',name:\'Benutzer\',content:\'true\'})",
            "description": "Verwalten"
        },
        {
            "id": "2",
            "name": "Benutzereinstellungen",
            "mainmenu": "settings",
            "category": "user",
            "level": "2",
            "icon": "profil1",
            "access": "-1",
            "onclick": "user(this, {name:\'Benutzereinstellungen\',content:\'edit\'})",
            "description": "Theme, ..."
        },
        {
            "id": "3",
            "name": "Lizenz",
            "mainmenu": "settings",
            "category": "license",
            "level": "1",
            "icon": "information1",
            "access": "-1",
            "onclick": "license(this, {name:\'Lizenz\',content:\'license\'})",
            "description": "Credits"
        }
    ],
    "themes": {
        "0": {
            "id": "0",
            "name": "highlight",
            "colors": {
                "Orange": "#e3a104",
                "Pink": "#c72c8b",
                "Blau": "#1798db",
                "Grün": "#4da829",
                "Rot": "#b82c25",
                "Türkis": "#29ab9a",
                "Violette": "#8e44ad",
                "Gelb": "#e2e437"
            }
        },
        "1": {
            "id": "1",
            "name": "standard",
            "colors": {
                "background": "#25282e",
                "foreground": "#191b1f",
                "text": "#fff",
                "highlight_active": "#e3a104",
                "highlight_inactive": "#898989"
            }
        },
        "2": {
            "id": "2",
            "name": "dark",
            "colors": {
                "background": "#25282e",
                "foreground": "#191b1f",
                "text": "#ffffff",
                "highlight_active": "",
                "highlight_inactive": "#898989"
            }
        },
        "3": {
            "id": "3",
            "name": "light",
            "colors": {
                "background": "#eeeeee",
                "foreground": "#d9d9d9",
                "text": "#343434",
                "highlight_active": "",
                "highlight_inactive": "#595959"
            }
        },
        "4": {
            "id": "4",
            "name": "blue",
            "colors": {
                "background": "#367cc1",
                "foreground": "#205388",
                "text": "#ffffff",
                "highlight_active": "#c0cb03",
                "highlight_inactive": "#cccccc"
            }
        },
        "5": {
            "id": "5",
            "name": "purple",
            "colors": {
                "background": "#9644fa",
                "foreground": "#6735a4",
                "text": "#ffffff",
                "highlight_active": "#e2d000",
                "highlight_inactive": "#cccccc"
            }
        }
    },
    "l18n": {
        "en-US": {
            "login.username": "Username",
            "login.password": "Password",
            "login.loginbutton": "Login",
            "login.dataerror": "Incorrect login data!",
            "house": "House",
            "house.tab.rooms": "Rooms",
            "house.tab.devices": "Devices",
            "widgets": "Widgets",
            "settings": "Settings",
            "settings.user.manage.theme": "Theme",
            "settings.user.manage.theme.dark": "Dark",
            "settings.user.manage.theme.light": "Light",
            "settings.user.manage.theme.blue": "Blue",
            "settings.user.manage.theme.purple": "Purple",
            "settings.user.manage.language": "Language",
            "settings.user.manage.language.name": "English",
            "settings.user.manage.highlight": "Highlighting",
            "settings.user.manage.save": "Save",
            "settings.about.table.name": "Name",
            "settings.about.table.version": "Version",
            "settings.about.table.rights": "Rights",
            "settings.about.table.license": "License",
            "settings.about.table.license.url": "License URL",
            "logoff": "Logoff"
        },
        "de-DE": {
            "login.username": "Benutzername",
            "login.password": "Passwort",
            "login.loginbutton": "Anmelden",
            "login.dataerror": "Falsche Logindaten!",
            "house": "Haus",
            "house.tab.rooms": "Räume",
            "house.tab.devices": "Geräte",
            "widgets": "Widgets",
            "settings": "Einstellungen",
            "settings.user.manage.language": "Sprache",
            "settings.user.manage.language.name": "Deutsch",
            "settings.user.manage.theme": "Theme",
            "settings.user.manage.theme.dark": "Dunkel",
            "settings.user.manage.theme.light": "Hell",
            "settings.user.manage.theme.blue": "Blau",
            "settings.user.manage.theme.purple": "Lila",
            "settings.user.manage.highlight": "Highlight Farbe",
            "settings.user.manage.save": "Speichern",
            "settings.about.table.name": "Name",
            "settings.about.table.version": "Version",
            "settings.about.table.rights": "Rechte",
            "settings.about.table.license": "Lizenz",
            "settings.about.table.license.url": "Lizenz URL",
            "logoff": "Abmelden"
        }
    },
    "admin": {
        "settings": {
            "extensions": {
                "homegear": {
                    "activated": true,
                    "requiredAssets": [
                        "homegearws",
                        "jquery"
                    ]
                },
                "default": {
                    "activated": true,
                    "requiredAssets": [
                        "jquery",
                        "patternlock",
                        "vue",
                        "iro",
                        "flaticons"
                    ]
                },
                "benutzer": {
                    "activated": true,
                    "requiredAssets": [
                        ""
                    ]
                },
                "beschattung": {
                    "activated": true,
                    "requiredAssets": [
                        ""
                    ]
                },
                "fenster": {
                    "activated": true,
                    "requiredAssets": [
                        ""
                    ]
                },
                "tueren": {
                    "activated": true,
                    "requiredAssets": [
                        ""
                    ]
                },
                "house": {
                    "activated": true,
                    "requiredAssets": [
                        ""
                    ]
                },
                "icons": {
                    "activated": true,
                    "requiredAssets": [
                        ""
                    ]
                },
                "info": {
                    "activated": true,
                    "requiredAssets": [
                        ""
                    ]
                },
                "beleuchtung": {
                    "activated": true,
                    "requiredAssets": [
                        ""
                    ]
                },
                "menu": {
                    "activated": true,
                    "requiredAssets": [
                        ""
                    ]
                },
                "schalten": {
                    "activated": true,
                    "requiredAssets": [
                        ""
                    ]
                },
                "status": {
                    "activated": true,
                    "requiredAssets": [
                        ""
                    ]
                },
                "klima": {
                    "activated": true,
                    "requiredAssets": [
                        ""
                    ]
                }
            },
            "assets": {
                "plotly": {
                    "user": "plotly",
                    "repository": "/node_modules/plotly.js",
                    "files": [
                        {
                            "rawMinUrl": "/dist/",
                            "rawMinUrlFile": "plotly-basic.min.js",
                            "outputName": "plotly.min.js"
                        }
                    ],
                    "license": {
                        "name": "plotly",
                        "version": "",
                        "rights": "",
                        "licenseurl": "https://opensource.org/licenses/alphabetical",
                        "licensename": "MIT"
                    }
                },
                "jquery": {
                    "user": "jquery",
                    "repository": "/node_modules/jquery",
                    "files": [
                        {
                            "rawMinUrl": "/dist/",
                            "rawMinUrlFile": "jquery.min.js",
                            "outputName": "jquery.min.js"
                        }
                    ],
                    "license": {
                        "name": "jQuery",
                        "version": "",
                        "rights": "JS Foundation",
                        "licenseurl": "https://opensource.org/licenses/alphabetical",
                        "licensename": "MIT"
                    }
                },
                "bootstrap": {
                    "user": "twbs",
                    "repository": "/node_modules/bootstrap",
                    "files": [
                        {
                            "rawMinUrl": "/dist/js/",
                            "rawMinUrlFile": "bootstrap.min.js",
                            "outputName": "bootstrap.min.js"
                        },
                        {
                            "rawMinUrl": "/dist/css/",
                            "rawMinUrlFile": "bootstrap.min.css",
                            "outputName": "bootstrap.min.css"
                        }
                    ],
                    "license": {
                        "name": "Bootstrap",
                        "version": "",
                        "rights": "Bootstrap Foundation",
                        "licenseurl": "https://opensource.org/licenses/alphabetical",
                        "licensename": "MIT"
                    }
                },
                "c3": {
                    "user": "c3js",
                    "repository": "/node_modules/c3",
                    "files": [
                        {
                            "rawMinUrl": "/",
                            "rawMinUrlFile": "c3.min.js",
                            "outputName": "c3.min.js"
                        },
                        {
                            "rawMinUrl": "/",
                            "rawMinUrlFile": "c3.min.css",
                            "outputName": "c3.min.css"
                        }
                    ],
                    "license": {
                        "name": "c3",
                        "version": "",
                        "rights": "Masayuki Tanaka",
                        "licenseurl": "https://opensource.org/licenses/alphabetical",
                        "licensename": "MIT"
                    }
                },
                "d3": {
                    "user": "d3",
                    "repository": "/node_modules/d3",
                    "files": [
                        {
                            "rawMinUrl": "/dist/",
                            "rawMinUrlFile": "d3.min.js",
                            "outputName": "d3.min.js"
                        }
                    ],
                    "license": {
                        "name": "d3",
                        "version": "",
                        "rights": "Michael Bostock",
                        "licenseurl": "https://opensource.org/licenses/alphabetical",
                        "licensename": "BSD-like license"
                    }
                },
                "homegearws": {
                    "user": "Homegear",
                    "repository": "/node_modules/@homegear/homegearws",
                    "files": [
                        {
                            "rawMinUrl": "/",
                            "rawMinUrlFile": "homegear-ws-1.0.9.min.js",
                            "outputName": "homegearws.min.js"
                        }
                    ],
                    "license": {
                        "name": "HomegearWS",
                        "version": "",
                        "rights": "Sathya Laufer",
                        "licenseurl": "https://opensource.org/licenses/alphabetical",
                        "licensename": "GNU LGPL"
                    }
                },
                "patternlock": {
                    "user": "s-yadav",
                    "repository": "/node_modules/patternlock",
                    "files": [
                        {
                            "rawMinUrl": "/dist/",
                            "rawMinUrlFile": "patternlock.min.js",
                            "outputName": "patternlock.min.js"
                        },
                        {
                            "rawMinUrl": "/dist/",
                            "rawMinUrlFile": "patternlock.css",
                            "outputName": "patternlock.css"
                        },
                        {
                            "rawMinUrl": "/",
                            "rawMinUrlFile": "patternLock.min.js",
                            "outputName": "patternlock.min.js"
                        },
                        {
                            "rawMinUrl": "/",
                            "rawMinUrlFile": "patternLock.css",
                            "outputName": "patternlock.css"
                        }
                    ],
                    "license": {
                        "name": "PatternLock",
                        "version": "",
                        "rights": "Sudhanshu Yadav",
                        "licenseurl": "https://opensource.org/licenses/alphabetical",
                        "licensename": "MIT"
                    }
                },
                "push": {
                    "user": "Nickersoft",
                    "repository": "/node_modules/push.js",
                    "files": [
                        {
                            "rawMinUrl": "/bin/",
                            "rawMinUrlFile": "push.min.js",
                            "outputName": "push.min.js"
                        },
                        {
                            "rawMinUrl": "/bin/",
                            "rawMinUrlFile": "serviceWorker.min.js",
                            "outputName": "serviceWorker.min.js"
                        }
                    ],
                    "license": {
                        "name": "push",
                        "version": "",
                        "rights": "Tyler Nickerson",
                        "licenseurl": "https://opensource.org/licenses/alphabetical",
                        "licensename": "MIT"
                    }
                },
                "notie": {
                    "user": "jaredreich",
                    "repository": "/node_modules/notie",
                    "files": [
                        {
                            "rawMinUrl": "/dist/",
                            "rawMinUrlFile": "notie.min.js",
                            "outputName": "notie.min.js"
                        },
                        {
                            "rawMinUrl": "/dist/",
                            "rawMinUrlFile": "notie.min.css",
                            "outputName": "notie.min.css"
                        }
                    ],
                    "license": {
                        "name": "notie",
                        "version": "",
                        "rights": "Jared Reich",
                        "licenseurl": "https://opensource.org/licenses/alphabetical",
                        "licensename": "MIT"
                    }
                },
                "jsoneditor": {
                    "user": "josdejong",
                    "repository": "/node_modules/jsoneditor",
                    "files": [
                        {
                            "rawMinUrl": "/dist/",
                            "rawMinUrlFile": "jsoneditor.min.js",
                            "outputName": "jsoneditor.min.js"
                        },
                        {
                            "rawMinUrl": "/dist/",
                            "rawMinUrlFile": "jsoneditor.min.css",
                            "outputName": "jsoneditor.min.css"
                        }
                    ],
                    "license": {
                        "name": "jsoneditor",
                        "version": "",
                        "rights": "Jos de Jong",
                        "licenseurl": "https://opensource.org/licenses/alphabetical",
                        "licensename": "Apache2"
                    }
                },
                "slick": {
                    "user": "kenwheeler",
                    "repository": "/node_modules/slick-carousel",
                    "files": [
                        {
                            "rawMinUrl": "/slick/",
                            "rawMinUrlFile": "slick.min.js",
                            "outputName": "slick.min.js"
                        },
                        {
                            "rawMinUrl": "/slick/",
                            "rawMinUrlFile": "slick-theme.css",
                            "outputName": "slick-theme.css"
                        },
                        {
                            "rawMinUrl": "/slick/",
                            "rawMinUrlFile": "slick.css",
                            "outputName": "slick.css"
                        }
                    ],
                    "license": {
                        "name": "Slick",
                        "version": "",
                        "rights": "Ken Wheeler",
                        "licenseurl": "https://opensource.org/licenses/alphabetical",
                        "licensename": "MIT"
                    }
                },
                "vue": {
                    "user": "vuejs",
                    "repository": "/node_modules/vue",
                    "files": [
                        {
                            "rawMinUrl": "/dist/",
                            "rawMinUrlFile": "vue.js",
                            "outputName": "vue.js"
                        }
                    ],
                    "license": {
                        "name": "Vuejs",
                        "version": "",
                        "rights": "Evan You",
                        "licenseurl": "https://opensource.org/licenses/alphabetical",
                        "licensename": "MIT"
                    }
                },
                "iro": {
                    "user": "jaames",
                    "repository": "/node_modules/@jaames/iro",
                    "files": [
                        {
                            "rawMinUrl": "/dist/",
                            "rawMinUrlFile": "iro.min.js",
                            "outputName": "iro.min.js"
                        }
                    ],
                    "license": {
                        "name": "iro.js",
                        "version": "",
                        "rights": "James Daniel",
                        "licenseurl": "https://opensource.org/licenses/alphabetical",
                        "licensename": "MIT"
                    }
                },
                "touchswipe": {
                    "user": "jaames",
                    "repository": "/node_modules/jquery-touchswipe",
                    "files": [
                        {
                            "rawMinUrl": "/",
                            "rawMinUrlFile": "jquery.touchSwipe.min.js",
                            "outputName": "touchSwipe.min.js"
                        }
                    ],
                    "license": {
                        "name": "Touchswipe",
                        "version": "",
                        "rights": "Matt Bryson",
                        "licenseurl": "https://opensource.org/licenses/alphabetical",
                        "licensename": "MIT"
                    }
                },
                "flaticons": {
                    "license": {
                        "name": "FlatIcons",
                        "version": "",
                        "rights": "Various Autors",
                        "licenseurl": "https://profile.flaticon.com/license/free",
                        "licensename": ""
                    }
                }
            }
        }
    }
}
';

$interfaceData = array();
$defaultInterfaceData = json_decode($defaultInterfaceDataJson, true);

if(file_exists("interfacedata.dummy.php")){
    include_once("interfacedata.dummy.php");
    $dummyInterfaceData = json_decode($dummyInterfaceDataJson, true);
    $interfaceData = array_merge($interfaceData, $dummyInterfaceData);
}

$interfaceData = array_merge($interfaceData, $defaultInterfaceData);

if(file_exists("interfacedata.custom.php")){
    include_once("interfacedata.custom.php");
    $customInterfaceData = json_decode($customInterfaceDataJson, true);
    $interfaceData = array_merge($interfaceData, $customInterfaceData);
}

if(strpos($_SERVER['REQUEST_URI'], 'setup') !== false && isset($customImportInterfaceDataJson)){
    $oldInterfaceData = json_decode($customImportInterfaceDataJson, true);
}
else if(strpos($_SERVER['REQUEST_URI'], 'setup') !== false && file_exists("interfacedata.import.php")){
    include_once("interfacedata.import.php");
    $oldInterfaceData = json_decode($importInterfaceDataJson, true);
}
