<?php $dummyInterfaceDataJson = '
{
    "devices": {
        "55": {
            "categories": [],
            "clickCount": 2,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "temperature",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "thermometer_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        },
                        "main": {
                            "color": "inactive",
                            "name": "thermometer_1"
                        }
                    },
                    "metadata": {
                        "l2_only": true
                    },
                    "role": 201000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Temp."
                        },
                        "title": {
                            "color": "title",
                            "content": "Temperatur"
                        }
                    },
                    "uniqueUiElementId": "Base.temperature",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "TEMPERATURE4",
                            "peer": 0,
                            "properties": {
                                "maximum": 100,
                                "minimum": -273.150000095,
                                "unit": "\u00b0C",
                                "visualizeInOverview": true,
                                "value": 21.3233
                            },
                            "rendering": [],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": []
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "humidity",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "waterdrops_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        },
                        "main": {
                            "color": "inactive",
                            "name": "waterdrops_1"
                        }
                    },
                    "metadata": {
                        "l2_only": true
                    },
                    "role": 201000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Feuchte"
                        },
                        "title": {
                            "color": "title",
                            "content": "Luftfeuchtigkeit"
                        }
                    },
                    "uniqueUiElementId": "Base.humidity",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "HUMIDITY4",
                            "peer": 0,
                            "properties": {
                                "maximum": 100,
                                "minimum": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 51.6233
                            },
                            "rendering": [],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": []
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "climateCity",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "house_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        },
                        "main": {
                            "color": "inactive",
                            "name": "house_1"
                        }
                    },
                    "metadata": [],
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "City"
                        },
                        "title": {
                            "color": "title",
                            "content": "City"
                        }
                    },
                    "uniqueUiElementId": "Base.climateCity",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "CITY",
                            "peer": 0,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": "Berlin"
                            },
                            "rendering": [],
                            "type": "string"
                        }
                    ],
                    "variableOutputs": []
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "climateCloudcoverage",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "weather_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        },
                        "main": {
                            "color": "inactive",
                            "name": "weather_1"
                        }
                    },
                    "metadata": [],
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Cloudcoverage"
                        },
                        "title": {
                            "color": "title",
                            "content": "Cloudcoverage"
                        }
                    },
                    "uniqueUiElementId": "Base.climateCloudcoverage",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "CLOUD_COVERAGE",
                            "peer": 0,
                            "properties": {
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 90
                            },
                            "rendering": [],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": []
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "climateDate",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "calendar-time_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        },
                        "main": {
                            "color": "inactive",
                            "name": "calendar-time_1"
                        }
                    },
                    "metadata": [],
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Date"
                        },
                        "title": {
                            "color": "title",
                            "content": "Date"
                        }
                    },
                    "uniqueUiElementId": "Base.climateDate",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "LAST_DATA",
                            "peer": 0,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": 1574254478
                            },
                            "rendering": [],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": []
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "climatePressure",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "speedometer_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        },
                        "main": {
                            "color": "inactive",
                            "name": "speedometer_1"
                        }
                    },
                    "metadata": [],
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Pressure"
                        },
                        "title": {
                            "color": "title",
                            "content": "Pressure"
                        }
                    },
                    "uniqueUiElementId": "Base.climatePressure",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "PRESSURE",
                            "peer": 0,
                            "properties": {
                                "unit": "hPa",
                                "visualizeInOverview": true,
                                "value": 1014
                            },
                            "rendering": [],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": []
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "climateRain3h",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "waterdrops_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        },
                        "main": {
                            "color": "inactive",
                            "name": "waterdrops_1"
                        }
                    },
                    "metadata": [],
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Rain3h"
                        },
                        "title": {
                            "color": "title",
                            "content": "Rain3h"
                        }
                    },
                    "uniqueUiElementId": "Base.climateRain3h",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "RAIN_3H",
                            "peer": 0,
                            "properties": {
                                "unit": "mm",
                                "visualizeInOverview": true,
                                "value": 0
                            },
                            "rendering": [],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": []
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "climateSnow3h",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "weather_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        },
                        "main": {
                            "color": "inactive",
                            "name": "weather_1"
                        }
                    },
                    "metadata": [],
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Snow3h"
                        },
                        "title": {
                            "color": "title",
                            "content": "Snow3h"
                        }
                    },
                    "uniqueUiElementId": "Base.climateSnow3h",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "SNOW_3H",
                            "peer": 0,
                            "properties": {
                                "unit": "Volume",
                                "visualizeInOverview": true,
                                "value": 0
                            },
                            "rendering": [],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": []
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 2
                    },
                    "control": "climateSunrise",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "calendar-time_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        },
                        "main": {
                            "color": "inactive",
                            "name": "calendar-time_1"
                        }
                    },
                    "metadata": [],
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Sunrise"
                        },
                        "title": {
                            "color": "title",
                            "content": "Sunrise"
                        }
                    },
                    "uniqueUiElementId": "Base.climateSunrise",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "SUNRISE",
                            "peer": 0,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": 1574232149
                            },
                            "rendering": [],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": []
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 2
                    },
                    "control": "climateSunset",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "calendar-time_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        },
                        "main": {
                            "color": "inactive",
                            "name": "calendar-time_1"
                        }
                    },
                    "metadata": [],
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Sunset"
                        },
                        "title": {
                            "color": "title",
                            "content": "Sunset"
                        }
                    },
                    "uniqueUiElementId": "Base.climateSunset",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "SUNSET",
                            "peer": 0,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": 1574264972
                            },
                            "rendering": [],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": []
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 2
                    },
                    "control": "climateWeather",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "weather_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        },
                        "main": {
                            "color": "inactive",
                            "name": "weather_1"
                        }
                    },
                    "metadata": [],
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Weather"
                        },
                        "title": {
                            "color": "title",
                            "content": "Weather"
                        }
                    },
                    "uniqueUiElementId": "Base.climateWeather",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "WEATHER",
                            "peer": 0,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": "Mist"
                            },
                            "rendering": [],
                            "type": "string"
                        }
                    ],
                    "variableOutputs": []
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 2
                    },
                    "control": "climateWinddirection",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "windhose_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        },
                        "main": {
                            "color": "inactive",
                            "name": "windhose_1"
                        }
                    },
                    "metadata": [],
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Winddirection"
                        },
                        "title": {
                            "color": "title",
                            "content": "Winddirection"
                        }
                    },
                    "uniqueUiElementId": "Base.climateWinddirection",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "WIND_DIRECTION",
                            "peer": 0,
                            "properties": {
                                "unit": "\u00b0",
                                "visualizeInOverview": true,
                                "value": 350
                            },
                            "rendering": [],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": []
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 2
                    },
                    "control": "climateWindgust",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "wind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        },
                        "main": {
                            "color": "inactive",
                            "name": "wind_1"
                        }
                    },
                    "metadata": [],
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Windgust"
                        },
                        "title": {
                            "color": "title",
                            "content": "Windgust"
                        }
                    },
                    "uniqueUiElementId": "Base.climateWindgust",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "WIND_GUST",
                            "peer": 0,
                            "properties": {
                                "unit": "count",
                                "visualizeInOverview": true,
                                "value": 0
                            },
                            "rendering": [],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": []
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 2
                    },
                    "control": "climateWindspeed",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "windhose_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        },
                        "main": {
                            "color": "inactive",
                            "name": "windhose_1"
                        }
                    },
                    "metadata": [],
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Windspeed"
                        },
                        "title": {
                            "color": "title",
                            "content": "Windspeed"
                        }
                    },
                    "uniqueUiElementId": "Base.climateWindspeed",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "WIND_SPEED",
                            "peer": 0,
                            "properties": {
                                "unit": "meter\/sec",
                                "visualizeInOverview": true,
                                "value": 2.6000000000000001
                            },
                            "rendering": [],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": []
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 2
                    },
                    "control": "refresh",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "reload_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 0,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "State"
                        },
                        "title": {
                            "color": "title",
                            "content": "Erneuern"
                        }
                    },
                    "uniqueUiElementId": "254.0x100.Refresh",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "REQUEST",
                            "peer": 0,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "reload_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "gedr\u00fcckt"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "reload_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "ungedr\u00fcckt"
                                            }
                                        }
                                    }
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "deviceTypeId": 256,
                            "family": 254,
                            "name": "REQUEST",
                            "peer": 0,
                            "properties": [],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "databaseId": 55,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "weather_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                },
                "weather": {
                    "color": "inactive",
                    "name": "weather_1"
                }
            },
            "label": "OpenWeatherMap",
            "metadata": {
                "l2_action": {
                    "control": [
                        0
                    ],
                    "input": [
                        0
                    ]
                }
            },
            "role": 201000,
            "room": 6,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "OpenWeatherMap"
                },
                "title": {
                    "color": "title",
                    "content": "OpenWeatherMap"
                }
            },
            "uniqueUiElementId": "254.0x100.OpenWeatherMap",
            "floors": [
                2
            ],
            "rooms": [
                6
            ]
        },
        "5": {
            "categories": [],
            "clickCount": 1,
            "databaseId": 5,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "light_on_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Licht Spiegel",
            "metadata": {
                "l2_only": true
            },
            "role": 100001,
            "room": 2,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Schalter"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "uniqueUiElementId": "Base.lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 4,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 4,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                2
            ]
        },
        "1": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 1,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "light_on_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Licht SystemVar",
            "metadata": {
                "l2_only": true
            },
            "role": 100001,
            "room": 3,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Schalter"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "uniqueUiElementId": "Base.lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "LIGHT",
                            "peer": 0,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "LIGHT",
                            "peer": 0,
                            "properties": [],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                3
            ],
            "rooms": [
                3
            ]
        },
        "2": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 2,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "light_on_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Licht",
            "metadata": {
                "l2_only": true
            },
            "role": 100001,
            "room": 3,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Schalter"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "uniqueUiElementId": "Base.lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 1,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 1,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                3
            ],
            "rooms": [
                3
            ]
        },
        "3": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 3,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "light_on_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Licht",
            "metadata": {
                "l2_only": true
            },
            "role": 100001,
            "room": 6,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Schalter"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "uniqueUiElementId": "Base.lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 2,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 2,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                2
            ],
            "rooms": [
                6
            ]
        },
        "4": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 4,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "light_on_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Licht Decke",
            "metadata": {
                "l2_only": true
            },
            "role": 100001,
            "room": 2,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Schalter"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "uniqueUiElementId": "Base.lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 3,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 3,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                2
            ]
        },
        "6": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 6,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "light_on_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Licht",
            "metadata": {
                "l2_only": true
            },
            "role": 100001,
            "room": 9,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Schalter"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "uniqueUiElementId": "Base.lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 5,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 5,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                9
            ]
        },
        "7": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 7,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "light_on_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Licht c",
            "metadata": {
                "l2_only": true
            },
            "role": 100001,
            "room": 12,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Schalter"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "uniqueUiElementId": "Base.lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 6,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 6,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                12
            ]
        },
        "8": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 8,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "light_on_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Licht b",
            "metadata": {
                "l2_only": true
            },
            "role": 100001,
            "room": 12,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Schalter"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "uniqueUiElementId": "Base.lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 7,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 7,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                12
            ]
        },
        "9": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 9,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "light_on_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Licht d",
            "metadata": {
                "l2_only": true
            },
            "role": 100001,
            "room": 12,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Schalter"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "uniqueUiElementId": "Base.lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 8,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 8,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                12
            ]
        },
        "10": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 10,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "socket_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Steckdose",
            "metadata": {
                "l2_only": true
            },
            "role": 400001,
            "room": 12,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Button"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "socketButton",
                    "uniqueUiElementId": "Base.socketButton",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 9,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "play_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "gedr\u00fcckt"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "play_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "losgelassen"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 400001
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 9,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 400001
                                }
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                12
            ]
        },
        "11": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 11,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "light_on_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Licht",
            "metadata": {
                "l2_only": true
            },
            "role": 100001,
            "room": 1,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Schalter"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "uniqueUiElementId": "Base.lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 10,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 10,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                1
            ]
        },
        "12": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 12,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "light_on_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Licht",
            "metadata": {
                "l2_only": true
            },
            "role": 100001,
            "room": 7,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Schalter"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "uniqueUiElementId": "Base.lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 11,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 11,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                3
            ],
            "rooms": [
                7
            ]
        },
        "13": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 13,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "socket_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Steckdose",
            "metadata": {
                "l2_only": true
            },
            "role": 400001,
            "room": 7,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Schalter"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "socketSwitch",
                    "uniqueUiElementId": "Base.socketSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 12,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "socket_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "socket_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 400001
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 12,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 400001
                                }
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                3
            ],
            "rooms": [
                7
            ]
        },
        "14": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 14,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "light_on_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Licht",
            "metadata": {
                "l2_only": true
            },
            "role": 100001,
            "room": 10,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Schalter"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "uniqueUiElementId": "Base.lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 13,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 13,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                4
            ],
            "rooms": [
                10
            ]
        },
        "15": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 15,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "light_on_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Licht Decke",
            "metadata": {
                "l2_only": true
            },
            "role": 100001,
            "room": 5,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Schalter"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "uniqueUiElementId": "Base.lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 14,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 14,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                2
            ],
            "rooms": [
                5
            ]
        },
        "16": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 16,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "light_on_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Licht Spiegel",
            "metadata": {
                "l2_only": true
            },
            "role": 100001,
            "room": 5,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Schalter"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "uniqueUiElementId": "Base.lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 15,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 15,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                2
            ],
            "rooms": [
                5
            ]
        },
        "17": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 17,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "socket_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Steckdose",
            "metadata": {
                "l2_only": true
            },
            "role": 400001,
            "room": 11,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Schalter"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "socketSwitch",
                    "uniqueUiElementId": "Base.socketSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 16,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "socket_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "socket_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 400001
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 16,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 400001
                                }
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                4
            ],
            "rooms": [
                11
            ]
        },
        "18": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 18,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "light_on_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Licht Unterschrank",
            "metadata": {
                "l2_only": true
            },
            "role": 100001,
            "room": 12,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Schalter"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "lightingSwitch",
                    "uniqueUiElementId": "Base.lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 84,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 84,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                12
            ]
        },
        "19": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 19,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "socket_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Steckdose",
            "metadata": {
                "l2_only": true
            },
            "role": 400001,
            "room": 4,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Schalter"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "socketSwitch",
                    "uniqueUiElementId": "Base.socketSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 91,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "socket_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "socket_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 400001
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 91,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 400001
                                }
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                4
            ],
            "rooms": [
                4
            ]
        },
        "20": {
            "categories": [],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "shadingButtons",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 501000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Status"
                        },
                        "title": {
                            "color": "title",
                            "content": "Schalter"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingButtons",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 18,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501001
                                }
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 18,
                            "properties": {
                                "visualizeInOverview": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "close_x_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "close_x_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ]
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 18,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_down_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "arrow_down_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501002
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 18,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501001
                                }
                            ],
                            "type": "bool",
                            "value": 1
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 18,
                            "properties": [],
                            "value": 2
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 18,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501002
                                }
                            ],
                            "type": "bool",
                            "value": 3
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "shadingButtonsSingleStep",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 501000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Status"
                        },
                        "title": {
                            "color": "title",
                            "content": "Button"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingButtonsSingleStep",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 18,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501001
                                }
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 18,
                            "properties": {
                                "visualizeInOverview": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_up_step_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "arrow_up_step_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ]
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 18,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_down_step_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "arrow_down_step_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501002
                                }
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 18,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_down_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "arrow_down_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501002
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 18,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501001
                                }
                            ],
                            "type": "bool",
                            "value": 1
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 18,
                            "properties": [],
                            "value": 2
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 18,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501002
                                }
                            ],
                            "type": "bool",
                            "value": 1
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 18,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501002
                                }
                            ],
                            "type": "bool",
                            "value": 2
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "shadingButtonsUpDown",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 501000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Status"
                        },
                        "title": {
                            "color": "title",
                            "content": "Schalter"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingButtonsUpDown",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 18,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501001
                                }
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 18,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_down_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "arrow_down_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501002
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 18,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501001
                                }
                            ],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 18,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501002
                                }
                            ],
                            "type": "bool",
                            "value": true
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "shadingPosition",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 501000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Position"
                        },
                        "title": {
                            "color": "title",
                            "content": "Position"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingPosition",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 18,
                            "properties": {
                                "maximum": 100,
                                "maximumScaled": 100,
                                "minimum": 0,
                                "minimumScaled": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 100
                            },
                            "rendering": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501004
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 18,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501004
                                }
                            ],
                            "type": "integer"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "shadingPositionSlats",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 501000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Blenden"
                        },
                        "title": {
                            "color": "title",
                            "content": "Blenden Position"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingPositionSlats",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 18,
                            "properties": {
                                "maximum": 100,
                                "maximumScaled": 100,
                                "minimum": 0,
                                "minimumScaled": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 100
                            },
                            "rendering": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501004
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 18,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501004
                                }
                            ],
                            "type": "integer"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "shadingVentilation",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "ventilator_2"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 501000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "L\u00fcftung"
                        },
                        "title": {
                            "color": "title",
                            "content": "L\u00fcftung"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingVentilation",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "VENTILATION",
                            "peer": 0,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "ventilator_2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "ventilator_2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "VENTILATION",
                            "peer": 0,
                            "properties": [],
                            "type": "bool"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "shadingWindalarm",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "windhose_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 400000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Windalarm"
                        },
                        "title": {
                            "color": "title",
                            "content": "Alarm"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingWindalarm",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "WINDALARM",
                            "peer": 0,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "windhose_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "aktiv",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "windhose_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inaktiv",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "WINDALARM",
                            "peer": 0,
                            "properties": [],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "databaseId": 20,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "blind_1": {
                    "color": "icon",
                    "name": "blind_1"
                },
                "l2": {
                    "color": "icon",
                    "name": "blind_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Rollladen Windalarm",
            "metadata": {
                "event_hooks": [
                    {
                        "condition": {
                            "operator": "e",
                            "value": true
                        },
                        "disable": [
                            true,
                            true,
                            true,
                            true,
                            true,
                            true
                        ],
                        "icon": "warning_1",
                        "trigger": [
                            "0",
                            "-1",
                            "WINDALARM"
                        ],
                        "texts": {
                            "title": "Windalarm"
                        }
                    }
                ],
                "l2_action": {
                    "control": [
                        0
                    ],
                    "input": [
                        0
                    ]
                }
            },
            "role": 501000,
            "room": 6,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Beschattung"
                },
                "title": {
                    "color": "title",
                    "content": "Beschattung"
                }
            },
            "uniqueUiElementId": "Base.shadingButtonsButtonsSingleStepButtonsUpDownPositionPositionSlatsVentilationWindalarm",
            "floors": [
                2
            ],
            "rooms": [
                6
            ]
        },
        "21": {
            "categories": [],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "shadingButtons",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 501000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Status"
                        },
                        "title": {
                            "color": "title",
                            "content": "Schalter"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingButtons",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "name": "MOVE",
                            "peer": 19,
                            "properties": {
                                "visualizeInOverview": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ]
                        },
                        {
                            "channel": 1,
                            "name": "STEP",
                            "peer": 19,
                            "properties": {
                                "visualizeInOverview": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "close_x_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "close_x_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ]
                        },
                        {
                            "channel": 1,
                            "name": "MOVE",
                            "peer": 19,
                            "properties": {
                                "visualizeInOverview": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_down_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "arrow_down_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ]
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "name": "MOVE",
                            "peer": 19,
                            "properties": [],
                            "value": false
                        },
                        {
                            "channel": 1,
                            "name": "STEP",
                            "peer": 19,
                            "properties": [],
                            "value": false
                        },
                        {
                            "channel": 1,
                            "name": "MOVE",
                            "peer": 19,
                            "properties": [],
                            "value": true
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "shadingPosition",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 501000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Position"
                        },
                        "title": {
                            "color": "title",
                            "content": "Position"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingPosition",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 19,
                            "properties": {
                                "maximum": 100,
                                "maximumScaled": 100,
                                "minimum": 0,
                                "minimumScaled": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 25
                            },
                            "rendering": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501004
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 19,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501004
                                }
                            ],
                            "type": "integer"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "shadingPositionSlats",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 501000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Blenden"
                        },
                        "title": {
                            "color": "title",
                            "content": "Blenden Position"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingPositionSlats",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 19,
                            "properties": {
                                "maximum": 100,
                                "maximumScaled": 100,
                                "minimum": 0,
                                "minimumScaled": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 25
                            },
                            "rendering": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501004
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 19,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501004
                                }
                            ],
                            "type": "integer"
                        }
                    ]
                }
            ],
            "databaseId": 21,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "blind_1": {
                    "color": "icon",
                    "name": "blind_1"
                },
                "l2": {
                    "color": "icon",
                    "name": "blind_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Rollladen KNX",
            "metadata": {
                "l2_action": {
                    "control": [
                        0
                    ],
                    "input": [
                        0
                    ]
                }
            },
            "role": 501000,
            "room": 6,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Beschattung"
                }
            },
            "uniqueUiElementId": "Base.shadingButtonsPositionPositionSlats",
            "floors": [
                2
            ],
            "rooms": [
                6
            ]
        },
        "22": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 22,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "window_2"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Dachfl\u00e4chenfenster",
            "metadata": {
                "event_hooks": [
                    {
                        "condition": {
                            "operator": "e",
                            "value": true
                        },
                        "disable": [
                            true
                        ],
                        "icon": "warning_1",
                        "trigger": [
                            "0",
                            "-1",
                            "RAINALARM"
                        ],
                        "texts": {
                            "title": "Regenalarm"
                        }
                    }
                ],
                "l3_force": true
            },
            "role": 600000,
            "room": 3,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Schalter"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "windowButtonsUpDown",
                    "uniqueUiElementId": "Base.windowButtonsUpDown",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 17,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 600001
                                }
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 17,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_down_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "arrow_down_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 600002
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 17,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 600001
                                }
                            ],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 17,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 600002
                                }
                            ],
                            "type": "bool",
                            "value": true
                        }
                    ]
                }
            ],
            "floors": [
                3
            ],
            "rooms": [
                3
            ]
        },
        "23": {
            "categories": [],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "windowButtonsUpDown",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "window_2"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": {
                        "l3_force": true
                    },
                    "role": 600000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Status"
                        },
                        "title": {
                            "color": "title",
                            "content": "Schalter"
                        }
                    },
                    "uniqueUiElementId": "Base.windowButtonsUpDown",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 17,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 600001
                                }
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 17,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_down_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "arrow_down_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 600002
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 17,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 600001
                                }
                            ],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 17,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 600002
                                }
                            ],
                            "type": "bool",
                            "value": true
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "windowRainalarm",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "weather_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 600000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Regen"
                        },
                        "title": {
                            "color": "title",
                            "content": "Alarm"
                        }
                    },
                    "uniqueUiElementId": "Base.windowRainalarm",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "RAINALARM",
                            "peer": 0,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "weather_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "aktiv"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "weather_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "inaktiv"
                                            }
                                        }
                                    }
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "RAINALARM",
                            "peer": 0,
                            "properties": [],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "databaseId": 23,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "icon",
                    "name": "window_2"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                },
                "window_2": {
                    "color": "icon",
                    "name": "window_2"
                }
            },
            "label": "Dachfl\u00e4chenfenster Rainalarm",
            "metadata": {
                "event_hooks": [
                    {
                        "condition": {
                            "operator": "e",
                            "value": true
                        },
                        "disable": [
                            true
                        ],
                        "icon": "warning_1",
                        "trigger": [
                            "0",
                            "-1",
                            "RAINALARM"
                        ],
                        "texts": {
                            "title": "Regenalarm"
                        }
                    }
                ],
                "l2_action": {
                    "control": [
                        0
                    ],
                    "input": [
                        0
                    ]
                }
            },
            "role": 600000,
            "room": 3,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Fenster"
                },
                "title": {
                    "color": "title",
                    "content": "Fenster"
                }
            },
            "uniqueUiElementId": "Base.windowButtonsUpDownRainalarm",
            "floors": [
                3
            ],
            "rooms": [
                3
            ]
        },
        "24": {
            "categories": [],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "windowButtons",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "switches_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 600000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Status"
                        },
                        "title": {
                            "color": "title",
                            "content": "Trigger"
                        }
                    },
                    "uniqueUiElementId": "Base.windowButtons",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 20,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 600001
                                }
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 20,
                            "properties": {
                                "visualizeInOverview": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "close_x_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "close_x_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ]
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 20,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_down_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "arrow_down_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 600002
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 20,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 600001
                                }
                            ],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 20,
                            "properties": [],
                            "value": true
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 20,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 600002
                                }
                            ],
                            "type": "bool",
                            "value": true
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "windowPosition",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "window_2"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 600000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Position"
                        },
                        "title": {
                            "color": "title",
                            "content": "Position"
                        }
                    },
                    "uniqueUiElementId": "Base.windowPosition",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 20,
                            "properties": {
                                "maximum": 100,
                                "maximumScaled": 100,
                                "minimum": 0,
                                "minimumScaled": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 100
                            },
                            "rendering": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 600004
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 20,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 600004
                                }
                            ],
                            "type": "integer"
                        }
                    ]
                }
            ],
            "databaseId": 24,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "icon",
                    "name": "window_2"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                },
                "window_2": {
                    "color": "icon",
                    "name": "window_2"
                }
            },
            "label": "Fenstermotor",
            "metadata": {
                "l2_action": {
                    "control": [
                        0
                    ],
                    "input": [
                        0
                    ]
                }
            },
            "role": 600000,
            "room": 2,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Fenster"
                },
                "title": {
                    "color": "title",
                    "content": "Fenster"
                }
            },
            "uniqueUiElementId": "Base.windowButtonsPosition",
            "floors": [
                1
            ],
            "rooms": [
                2
            ]
        },
        "25": {
            "categories": [],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "windowButtons",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "switches_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 600000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Status"
                        },
                        "title": {
                            "color": "title",
                            "content": "Trigger"
                        }
                    },
                    "uniqueUiElementId": "Base.windowButtons",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 20,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 600001
                                }
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 20,
                            "properties": {
                                "visualizeInOverview": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "close_x_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "close_x_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ]
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 20,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_down_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "arrow_down_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 600002
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 20,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 600001
                                }
                            ],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 20,
                            "properties": [],
                            "value": true
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 20,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 600002
                                }
                            ],
                            "type": "bool",
                            "value": true
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "windowPosition",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "window_2"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 600000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Position"
                        },
                        "title": {
                            "color": "title",
                            "content": "Position"
                        }
                    },
                    "uniqueUiElementId": "Base.windowPosition",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 20,
                            "properties": {
                                "maximum": 100,
                                "maximumScaled": 100,
                                "minimum": 0,
                                "minimumScaled": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 100
                            },
                            "rendering": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 600004
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 20,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 600004
                                }
                            ],
                            "type": "integer"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "windowRainalarm",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "weather_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 600000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Regen"
                        },
                        "title": {
                            "color": "title",
                            "content": "Alarm"
                        }
                    },
                    "uniqueUiElementId": "Base.windowRainalarm",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "RAINALARM",
                            "peer": 0,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "weather_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "aktiv"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "weather_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "inaktiv"
                                            }
                                        }
                                    }
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "RAINALARM",
                            "peer": 0,
                            "properties": [],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "databaseId": 25,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "icon",
                    "name": "window_2"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                },
                "window_2": {
                    "color": "icon",
                    "name": "window_2"
                }
            },
            "label": "Fenstermotor Rainalarm",
            "metadata": {
                "event_hooks": [
                    {
                        "condition": {
                            "operator": "e",
                            "value": true
                        },
                        "disable": [
                            true,
                            true
                        ],
                        "icon": "warning_1",
                        "trigger": [
                            "0",
                            "-1",
                            "RAINALARM"
                        ],
                        "texts": {
                            "title": "Regenalarm"
                        }
                    }
                ],
                "l2_action": {
                    "control": [
                        0
                    ],
                    "input": [
                        0
                    ]
                }
            },
            "role": 600000,
            "room": 2,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Fenster"
                },
                "title": {
                    "color": "title",
                    "content": "Fenster"
                }
            },
            "uniqueUiElementId": "Base.windowButtonsPositionRainalarm",
            "floors": [
                1
            ],
            "rooms": [
                2
            ]
        },
        "26": {
            "categories": [],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "shadingButtons",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 501000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Status"
                        },
                        "title": {
                            "color": "title",
                            "content": "Schalter"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingButtons",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 21,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501001
                                }
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 21,
                            "properties": {
                                "visualizeInOverview": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "close_x_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "close_x_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ]
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 21,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_down_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "arrow_down_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501002
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 21,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501001
                                }
                            ],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 21,
                            "properties": [],
                            "value": true
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 21,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501002
                                }
                            ],
                            "type": "bool",
                            "value": true
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "shadingPosition",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 501000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Position"
                        },
                        "title": {
                            "color": "title",
                            "content": "Position"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingPosition",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 21,
                            "properties": {
                                "maximum": 100,
                                "maximumScaled": 100,
                                "minimum": 0,
                                "minimumScaled": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 100
                            },
                            "rendering": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501004
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 21,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501004
                                }
                            ],
                            "type": "integer"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "shadingVentilation",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "ventilator_2"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 501000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "L\u00fcftung"
                        },
                        "title": {
                            "color": "title",
                            "content": "L\u00fcftung"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingVentilation",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "VENTILATION",
                            "peer": 0,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "ventilator_2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "ventilator_2"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "VENTILATION",
                            "peer": 0,
                            "properties": [],
                            "type": "bool"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "shadingWindalarm",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "windhose_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 400000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Windalarm"
                        },
                        "title": {
                            "color": "title",
                            "content": "Alarm"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingWindalarm",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "WINDALARM",
                            "peer": 0,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "windhose_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "aktiv",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "windhose_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inaktiv",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "WINDALARM",
                            "peer": 0,
                            "properties": [],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "databaseId": 26,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "blind_1": {
                    "color": "icon",
                    "name": "blind_1"
                },
                "l2": {
                    "color": "icon",
                    "name": "blind_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Rollladen links",
            "metadata": {
                "event_hooks": [
                    {
                        "condition": {
                            "operator": "e",
                            "value": true
                        },
                        "disable": [
                            true,
                            true,
                            true
                        ],
                        "icon": "warning_1",
                        "trigger": [
                            "0",
                            "-1",
                            "WINDALARM"
                        ],
                        "texts": {
                            "title": "Windalarm"
                        }
                    }
                ],
                "l2_action": {
                    "control": [
                        0
                    ],
                    "input": [
                        0
                    ]
                }
            },
            "role": 501000,
            "room": 9,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Beschattung"
                },
                "title": {
                    "color": "title",
                    "content": "Beschattung"
                }
            },
            "uniqueUiElementId": "Base.shadingButtonsPositionVentilationWindalarm",
            "floors": [
                1
            ],
            "rooms": [
                9
            ]
        },
        "27": {
            "categories": [],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "shadingButtons",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 501000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Status"
                        },
                        "title": {
                            "color": "title",
                            "content": "Schalter"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingButtons",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 22,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501001
                                }
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 22,
                            "properties": {
                                "visualizeInOverview": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "close_x_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "close_x_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ]
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 22,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_down_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "arrow_down_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501002
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 22,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501001
                                }
                            ],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 22,
                            "properties": [],
                            "value": true
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 22,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501002
                                }
                            ],
                            "type": "bool",
                            "value": true
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "shadingPosition",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 501000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Position"
                        },
                        "title": {
                            "color": "title",
                            "content": "Position"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingPosition",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 22,
                            "properties": {
                                "maximum": 100,
                                "maximumScaled": 100,
                                "minimum": 0,
                                "minimumScaled": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 100
                            },
                            "rendering": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501004
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 22,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501004
                                }
                            ],
                            "type": "integer"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "shadingWindalarm",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "windhose_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 400000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Windalarm"
                        },
                        "title": {
                            "color": "title",
                            "content": "Alarm"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingWindalarm",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "WINDALARM",
                            "peer": 0,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "windhose_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "aktiv",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "windhose_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inaktiv",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "WINDALARM",
                            "peer": 0,
                            "properties": [],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "databaseId": 27,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "blind_1": {
                    "color": "icon",
                    "name": "blind_1"
                },
                "l2": {
                    "color": "icon",
                    "name": "blind_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Rollladen rechts",
            "metadata": {
                "event_hooks": [
                    {
                        "condition": {
                            "operator": "e",
                            "value": true
                        },
                        "disable": [
                            true,
                            true
                        ],
                        "icon": "warning_1",
                        "trigger": [
                            "0",
                            "-1",
                            "WINDALARM"
                        ],
                        "texts": {
                            "title": "Windalarm"
                        }
                    }
                ],
                "l2_action": {
                    "control": [
                        0
                    ],
                    "input": [
                        0
                    ]
                }
            },
            "role": 501000,
            "room": 9,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Beschattung"
                },
                "title": {
                    "color": "title",
                    "content": "Beschattung"
                }
            },
            "uniqueUiElementId": "Base.shadingButtonsPositionWindalarm",
            "floors": [
                1
            ],
            "rooms": [
                9
            ]
        },
        "28": {
            "categories": [],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "shadingButtons",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 501000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Status"
                        },
                        "title": {
                            "color": "title",
                            "content": "Schalter"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingButtons",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 23,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501001
                                }
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 23,
                            "properties": {
                                "visualizeInOverview": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "close_x_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "close_x_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ]
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 23,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_down_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "arrow_down_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501002
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 23,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501001
                                }
                            ],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 23,
                            "properties": [],
                            "value": true
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 23,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501002
                                }
                            ],
                            "type": "bool",
                            "value": true
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "shadingPosition",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 501000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Position"
                        },
                        "title": {
                            "color": "title",
                            "content": "Position"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingPosition",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 23,
                            "properties": {
                                "maximum": 100,
                                "maximumScaled": 100,
                                "minimum": 0,
                                "minimumScaled": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 100
                            },
                            "rendering": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501004
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 23,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501004
                                }
                            ],
                            "type": "integer"
                        }
                    ]
                }
            ],
            "databaseId": 28,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "blind_1": {
                    "color": "icon",
                    "name": "blind_1"
                },
                "l2": {
                    "color": "icon",
                    "name": "blind_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Rollladen Wohnen",
            "metadata": {
                "l2_action": {
                    "control": [
                        0
                    ],
                    "input": [
                        0
                    ]
                }
            },
            "role": 501000,
            "room": 12,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Beschattung"
                },
                "title": {
                    "color": "title",
                    "content": "Beschattung"
                }
            },
            "uniqueUiElementId": "Base.shadingButtonsPosition",
            "floors": [
                1
            ],
            "rooms": [
                12
            ]
        },
        "29": {
            "categories": [],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "shadingButtons",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 501000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Status"
                        },
                        "title": {
                            "color": "title",
                            "content": "Schalter"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingButtons",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 24,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501001
                                }
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 24,
                            "properties": {
                                "visualizeInOverview": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "close_x_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "close_x_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ]
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 24,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_down_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "arrow_down_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501002
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 24,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501001
                                }
                            ],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 24,
                            "properties": [],
                            "value": true
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 24,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501002
                                }
                            ],
                            "type": "bool",
                            "value": true
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "shadingPosition",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 501000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Position"
                        },
                        "title": {
                            "color": "title",
                            "content": "Position"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingPosition",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 24,
                            "properties": {
                                "maximum": 100,
                                "maximumScaled": 100,
                                "minimum": 0,
                                "minimumScaled": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 100
                            },
                            "rendering": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501004
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 24,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 501004
                                }
                            ],
                            "type": "integer"
                        }
                    ]
                }
            ],
            "databaseId": 29,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "blind_1": {
                    "color": "icon",
                    "name": "blind_1"
                },
                "l2": {
                    "color": "icon",
                    "name": "blind_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Rollladen Essen",
            "metadata": {
                "l2_action": {
                    "control": [
                        0
                    ],
                    "input": [
                        0
                    ]
                }
            },
            "role": 501000,
            "room": 12,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Beschattung"
                },
                "title": {
                    "color": "title",
                    "content": "Beschattung"
                }
            },
            "uniqueUiElementId": "Base.shadingButtonsPosition",
            "floors": [
                1
            ],
            "rooms": [
                12
            ]
        },
        "30": {
            "categories": [],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "shadingButtons",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 501000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Status"
                        },
                        "title": {
                            "color": "title",
                            "content": "Schalter"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingButtons",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 25,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 502001
                                }
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 25,
                            "properties": {
                                "visualizeInOverview": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "close_x_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "close_x_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ]
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 25,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_down_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "arrow_down_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 502002
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 25,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 502001
                                }
                            ],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 25,
                            "properties": [],
                            "value": true
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 25,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 502002
                                }
                            ],
                            "type": "bool",
                            "value": true
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "shadingPosition",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 501000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Position"
                        },
                        "title": {
                            "color": "title",
                            "content": "Position"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingPosition",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 25,
                            "properties": {
                                "maximum": 100,
                                "maximumScaled": 100,
                                "minimum": 0,
                                "minimumScaled": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 100
                            },
                            "rendering": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 502004
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 25,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 502004
                                }
                            ],
                            "type": "integer"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "shadingWindalarm",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "windhose_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 400000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Windalarm"
                        },
                        "title": {
                            "color": "title",
                            "content": "Alarm"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingWindalarm",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "WINDALARM",
                            "peer": 0,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "windhose_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "aktiv",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "windhose_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inaktiv",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "WINDALARM",
                            "peer": 0,
                            "properties": [],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "databaseId": 30,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "awning_1": {
                    "color": "icon",
                    "name": "awning_1"
                },
                "l2": {
                    "color": "icon",
                    "name": "awning_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Markise Wohnen",
            "metadata": {
                "event_hooks": [
                    {
                        "condition": {
                            "operator": "e",
                            "value": true
                        },
                        "disable": [
                            true,
                            true
                        ],
                        "icon": "warning_1",
                        "trigger": [
                            "0",
                            "-1",
                            "WINDALARM"
                        ],
                        "texts": {
                            "title": "Windalarm"
                        }
                    },
                    {
                        "condition": {
                            "operator": "e",
                            "value": true
                        },
                        "disable": [
                            true,
                            true
                        ],
                        "icon": "warning_1",
                        "trigger": [
                            "0",
                            "-1",
                            "RAINALARM"
                        ],
                        "texts": {
                            "title": "Regenalarm"
                        }
                    }
                ],
                "l2_action": {
                    "control": [
                        0
                    ],
                    "input": [
                        0
                    ]
                }
            },
            "role": 502000,
            "room": 7,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Beschattung"
                },
                "title": {
                    "color": "title",
                    "content": "Beschattung"
                }
            },
            "uniqueUiElementId": "Base.shadingAwningButtonsPositionWindalarm",
            "floors": [
                3
            ],
            "rooms": [
                7
            ]
        },
        "31": {
            "categories": [],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "shadingButtons",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 501000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Status"
                        },
                        "title": {
                            "color": "title",
                            "content": "Schalter"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingButtons",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 26,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 502001
                                }
                            ],
                            "type": "bool"
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 26,
                            "properties": {
                                "visualizeInOverview": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "close_x_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "close_x_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ]
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 26,
                            "properties": {
                                "visualizeInOverview": false,
                                "value": true
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_down_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "arrow_down_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 502002
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "UP",
                            "peer": 26,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 502001
                                }
                            ],
                            "type": "bool",
                            "value": true
                        },
                        {
                            "channel": 1,
                            "name": "STOP",
                            "peer": 26,
                            "properties": [],
                            "value": true
                        },
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "DOWN",
                            "peer": 26,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 502002
                                }
                            ],
                            "type": "bool",
                            "value": true
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "shadingPosition",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "blind_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 501000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Position"
                        },
                        "title": {
                            "color": "title",
                            "content": "Position"
                        }
                    },
                    "uniqueUiElementId": "Base.shadingPosition",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 26,
                            "properties": {
                                "maximum": 100,
                                "maximumScaled": 100,
                                "minimum": 0,
                                "minimumScaled": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 100
                            },
                            "rendering": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 502004
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "CURRENT_POSITION",
                            "peer": 26,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 502004
                                }
                            ],
                            "type": "integer"
                        }
                    ]
                }
            ],
            "databaseId": 31,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "awning_1": {
                    "color": "icon",
                    "name": "awning_1"
                },
                "l2": {
                    "color": "icon",
                    "name": "awning_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Markise Essen",
            "metadata": {
                "event_hooks": [
                    {
                        "condition": {
                            "operator": "e",
                            "value": true
                        },
                        "disable": [
                            true,
                            true
                        ],
                        "icon": "warning_1",
                        "trigger": [
                            "0",
                            "-1",
                            "WINDALARM"
                        ],
                        "texts": {
                            "title": "Windalarm"
                        }
                    },
                    {
                        "condition": {
                            "operator": "e",
                            "value": true
                        },
                        "disable": [
                            true,
                            true
                        ],
                        "icon": "warning_1",
                        "trigger": [
                            "0",
                            "-1",
                            "RAINALARM"
                        ],
                        "texts": {
                            "title": "Regenalarm"
                        }
                    }
                ],
                "l2_action": {
                    "control": [
                        0
                    ],
                    "input": [
                        0
                    ]
                }
            },
            "role": 502000,
            "room": 7,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Beschattung"
                },
                "title": {
                    "color": "title",
                    "content": "Beschattung"
                }
            },
            "uniqueUiElementId": "Base.shadingAwningButtonsPosition",
            "floors": [
                3
            ],
            "rooms": [
                7
            ]
        },
        "32": {
            "categories": [],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "heatingIsState",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "floor_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        },
                        "temperature": {
                            "color": "inactive",
                            "name": "thermometer_1"
                        }
                    },
                    "metadata": [],
                    "role": 201000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Ist"
                        },
                        "title": {
                            "color": "title",
                            "content": "Temperatur"
                        }
                    },
                    "uniqueUiElementId": "Base.heatingIsState",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": -273.19999980900002,
                            "name": "TEMPERATURE",
                            "peer": 78,
                            "properties": {
                                "maximum": 100,
                                "minimum": -273.150000095,
                                "unit": "\u00b0C",
                                "visualizeInOverview": true,
                                "value": 21.199999999999999
                            },
                            "rendering": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201001
                                }
                            ],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": []
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "heatingSlider",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "thermometer_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 201000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Soll"
                        },
                        "title": {
                            "color": "title",
                            "content": "Soll-Temperatur"
                        }
                    },
                    "uniqueUiElementId": "Base.heatingSlider",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 25,
                            "minimumValue": 5,
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 78,
                            "properties": {
                                "maximum": 25,
                                "maximumScaled": 25,
                                "minimum": 5,
                                "minimumScaled": 5,
                                "unit": "\u00b0C",
                                "visualizeInOverview": true,
                                "value": 10
                            },
                            "rendering": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201002
                                }
                            ],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 25,
                            "minimumValue": 5,
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 78,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201002
                                }
                            ],
                            "type": "float"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "heatingMode",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "thermometer_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 201000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Modus"
                        },
                        "title": {
                            "color": "title",
                            "content": "Betriebsmodus"
                        }
                    },
                    "uniqueUiElementId": "Base.heatingMode",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "CONTROL_MODE",
                            "peer": 78,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": 1
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Frostschutz"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "1"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Komfort"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Spar"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201003
                                },
                                {
                                    "direction": 2,
                                    "id": 201000
                                }
                            ],
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "CONTROL_MODE",
                            "peer": 78,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201003
                                },
                                {
                                    "direction": 2,
                                    "id": 201000
                                }
                            ],
                            "type": "enum"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "windowHandle",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "window_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": {
                        "l2_only": true
                    },
                    "role": 301002,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Status"
                        },
                        "title": {
                            "color": "title",
                            "content": "Status"
                        }
                    },
                    "uniqueUiElementId": "Base.windowHandle",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "STATE",
                            "peer": 60,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": 0
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "geschlossen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "1"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "offen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "gekippt"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "g",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "undefined"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 301002
                                }
                            ],
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "STATE",
                            "peer": 60,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 301002
                                }
                            ],
                            "type": "enum"
                        }
                    ]
                }
            ],
            "databaseId": 32,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "heater_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                },
                "temperature": {
                    "color": "inactive",
                    "name": "heater_1"
                }
            },
            "label": "Heizung",
            "metadata": {
                "event_hooks": [
                    {
                        "condition": {
                            "operator": "g",
                            "value": 0
                        },
                        "disable": {
                            "1": true,
                            "2": true,
                            "__dummy__": false
                        },
                        "icon": "warning_1",
                        "trigger": [
                            "60",
                            "1",
                            "STATE"
                        ],
                        "texts": {
                            "title": "Fenster offen"
                        }
                    },
                    {
                        "condition": {
                            "operator": "e",
                            "value": 0
                        },
                        "disable": {
                            "1": true,
                            "__dummy__": false
                        },
                        "icon": "warning_1",
                        "trigger": [
                            "78",
                            "1",
                            "CONTROL_MODE"
                        ],
                        "texts": {
                            "title": "Frostschutz"
                        }
                    }
                ],
                "l2_action": {
                    "control": [
                        0
                    ],
                    "input": [
                        0
                    ]
                }
            },
            "role": 201000,
            "room": 3,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Heizung"
                }
            },
            "uniqueUiElementId": "Base.heatingIsStateSliderModeWindowHandle",
            "floors": [
                3
            ],
            "rooms": [
                3
            ]
        },
        "33": {
            "categories": [],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "heatingIsState",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "floor_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        },
                        "temperature": {
                            "color": "inactive",
                            "name": "thermometer_1"
                        }
                    },
                    "metadata": [],
                    "role": 201000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Ist"
                        },
                        "title": {
                            "color": "title",
                            "content": "Temperatur"
                        }
                    },
                    "uniqueUiElementId": "Base.heatingIsState",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": -273.19999980900002,
                            "name": "TEMPERATURE",
                            "peer": 79,
                            "properties": {
                                "maximum": 100,
                                "minimum": -273.150000095,
                                "unit": "\u00b0C",
                                "visualizeInOverview": true,
                                "value": 21.600000000000001
                            },
                            "rendering": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201001
                                }
                            ],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": []
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "heatingSlider",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "thermometer_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 201000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Soll"
                        },
                        "title": {
                            "color": "title",
                            "content": "Soll-Temperatur"
                        }
                    },
                    "uniqueUiElementId": "Base.heatingSlider",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 25,
                            "minimumValue": 5,
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 79,
                            "properties": {
                                "maximum": 25,
                                "maximumScaled": 25,
                                "minimum": 5,
                                "minimumScaled": 5,
                                "unit": "\u00b0C",
                                "visualizeInOverview": true,
                                "value": 10
                            },
                            "rendering": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201002
                                }
                            ],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 25,
                            "minimumValue": 5,
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 79,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201002
                                }
                            ],
                            "type": "float"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "heatingMode",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "thermometer_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 201000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Modus"
                        },
                        "title": {
                            "color": "title",
                            "content": "Betriebsmodus"
                        }
                    },
                    "uniqueUiElementId": "Base.heatingMode",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "CONTROL_MODE",
                            "peer": 79,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": 1
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Frostschutz"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "1"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Komfort"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Spar"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201003
                                },
                                {
                                    "direction": 2,
                                    "id": 201000
                                }
                            ],
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "CONTROL_MODE",
                            "peer": 79,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201003
                                },
                                {
                                    "direction": 2,
                                    "id": 201000
                                }
                            ],
                            "type": "enum"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "heatingWindow",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "warning_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 201000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Fenster"
                        },
                        "title": {
                            "color": "title",
                            "content": "Alarm"
                        }
                    },
                    "uniqueUiElementId": "Base.heatingWindow",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "WINDOWALARM",
                            "peer": 0,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "warning_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "aktiv",
                                                "content": "ge\u00f6ffnet"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "warning_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inaktiv",
                                                "content": "geschlossen"
                                            }
                                        }
                                    }
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "WINDOWALARM",
                            "peer": 0,
                            "properties": [],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "databaseId": 33,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "thermometer_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                },
                "temperature": {
                    "color": "inactive",
                    "name": "thermometer_1"
                }
            },
            "label": "Heizung",
            "metadata": {
                "event_hooks": [
                    {
                        "condition": {
                            "operator": "e",
                            "value": 0
                        },
                        "disable": {
                            "1": true,
                            "__dummy__": false
                        },
                        "icon": "warning_1",
                        "trigger": [
                            "79",
                            "1",
                            "CONTROL_MODE"
                        ],
                        "texts": {
                            "title": "Frostschutz"
                        }
                    },
                    {
                        "condition": {
                            "operator": "e",
                            "value": true
                        },
                        "disable": {
                            "1": true,
                            "2": true,
                            "__dummy__": false
                        },
                        "icon": "warning_1",
                        "trigger": [
                            "0",
                            "-1",
                            "WINDOWALARM"
                        ],
                        "texts": {
                            "title": "Fenster offen"
                        }
                    }
                ],
                "l2_action": {
                    "control": [
                        0
                    ],
                    "input": [
                        0
                    ]
                }
            },
            "role": 201000,
            "room": 6,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Heizung"
                }
            },
            "uniqueUiElementId": "Base.heatingIsStateSliderModeWindow",
            "floors": [
                2
            ],
            "rooms": [
                6
            ]
        },
        "34": {
            "categories": [],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "heatingIsState",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "floor_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        },
                        "temperature": {
                            "color": "inactive",
                            "name": "thermometer_1"
                        }
                    },
                    "metadata": [],
                    "role": 201000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Ist"
                        },
                        "title": {
                            "color": "title",
                            "content": "Temperatur"
                        }
                    },
                    "uniqueUiElementId": "Base.heatingIsState",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": -273.19999980900002,
                            "name": "TEMPERATURE",
                            "peer": 80,
                            "properties": {
                                "maximum": 100,
                                "minimum": -273.150000095,
                                "unit": "\u00b0C",
                                "visualizeInOverview": true,
                                "value": 22.899999999999999
                            },
                            "rendering": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201001
                                }
                            ],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": []
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "heatingSlider",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "thermometer_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 201000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Soll"
                        },
                        "title": {
                            "color": "title",
                            "content": "Soll-Temperatur"
                        }
                    },
                    "uniqueUiElementId": "Base.heatingSlider",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 25,
                            "minimumValue": 5,
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 80,
                            "properties": {
                                "maximum": 25,
                                "maximumScaled": 25,
                                "minimum": 5,
                                "minimumScaled": 5,
                                "unit": "\u00b0C",
                                "visualizeInOverview": true,
                                "value": 10
                            },
                            "rendering": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201002
                                }
                            ],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 25,
                            "minimumValue": 5,
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 80,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201002
                                }
                            ],
                            "type": "float"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "heatingMode",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "thermometer_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 201000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Modus"
                        },
                        "title": {
                            "color": "title",
                            "content": "Betriebsmodus"
                        }
                    },
                    "uniqueUiElementId": "Base.heatingMode",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "CONTROL_MODE",
                            "peer": 80,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": 1
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Frostschutz"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "1"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Komfort"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Spar"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201003
                                },
                                {
                                    "direction": 2,
                                    "id": 201000
                                }
                            ],
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "CONTROL_MODE",
                            "peer": 80,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201003
                                },
                                {
                                    "direction": 2,
                                    "id": 201000
                                }
                            ],
                            "type": "enum"
                        }
                    ]
                }
            ],
            "databaseId": 34,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "thermometer_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                },
                "temperature": {
                    "color": "inactive",
                    "name": "thermometer_1"
                }
            },
            "label": "Heizung",
            "metadata": {
                "event_hooks": [
                    {
                        "condition": {
                            "operator": "e",
                            "value": 0
                        },
                        "disable": {
                            "1": true,
                            "__dummy__": false
                        },
                        "icon": "warning_1",
                        "trigger": [
                            "80",
                            "1",
                            "CONTROL_MODE"
                        ],
                        "texts": {
                            "title": "Frostschutz"
                        }
                    }
                ],
                "l2_action": {
                    "control": [
                        0
                    ],
                    "input": [
                        0
                    ]
                }
            },
            "role": 201000,
            "room": 2,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Heizung"
                }
            },
            "uniqueUiElementId": "Base.heatingIsStateSliderMode",
            "floors": [
                1
            ],
            "rooms": [
                2
            ]
        },
        "35": {
            "categories": [],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "heatingIsState",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "floor_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        },
                        "temperature": {
                            "color": "inactive",
                            "name": "thermometer_1"
                        }
                    },
                    "metadata": [],
                    "role": 201000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Ist"
                        },
                        "title": {
                            "color": "title",
                            "content": "Temperatur"
                        }
                    },
                    "uniqueUiElementId": "Base.heatingIsState",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": -273.19999980900002,
                            "name": "TEMPERATURE",
                            "peer": 81,
                            "properties": {
                                "maximum": 100,
                                "minimum": -273.150000095,
                                "unit": "\u00b0C",
                                "visualizeInOverview": true,
                                "value": 20
                            },
                            "rendering": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201001
                                }
                            ],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": []
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "heatingSlider",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "thermometer_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 201000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Soll"
                        },
                        "title": {
                            "color": "title",
                            "content": "Soll-Temperatur"
                        }
                    },
                    "uniqueUiElementId": "Base.heatingSlider",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 25,
                            "minimumValue": 5,
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 81,
                            "properties": {
                                "maximum": 25,
                                "maximumScaled": 25,
                                "minimum": 5,
                                "minimumScaled": 5,
                                "unit": "\u00b0C",
                                "visualizeInOverview": true,
                                "value": 10
                            },
                            "rendering": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201002
                                }
                            ],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 25,
                            "minimumValue": 5,
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 81,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201002
                                }
                            ],
                            "type": "float"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "heatingMode",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "thermometer_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 201000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Modus"
                        },
                        "title": {
                            "color": "title",
                            "content": "Betriebsmodus"
                        }
                    },
                    "uniqueUiElementId": "Base.heatingMode",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "CONTROL_MODE",
                            "peer": 81,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": 1
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Frostschutz"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "1"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Komfort"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Spar"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201003
                                },
                                {
                                    "direction": 2,
                                    "id": 201000
                                }
                            ],
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "CONTROL_MODE",
                            "peer": 81,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201003
                                },
                                {
                                    "direction": 2,
                                    "id": 201000
                                }
                            ],
                            "type": "enum"
                        }
                    ]
                }
            ],
            "databaseId": 35,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "thermometer_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                },
                "temperature": {
                    "color": "inactive",
                    "name": "thermometer_1"
                }
            },
            "label": "Heizung",
            "metadata": {
                "event_hooks": [
                    {
                        "condition": {
                            "operator": "e",
                            "value": 0
                        },
                        "disable": {
                            "1": true,
                            "__dummy__": false
                        },
                        "icon": "warning_1",
                        "trigger": [
                            "81",
                            "1",
                            "CONTROL_MODE"
                        ],
                        "texts": {
                            "title": "Frostschutz"
                        }
                    }
                ],
                "l2_action": {
                    "control": [
                        0
                    ],
                    "input": [
                        0
                    ]
                }
            },
            "role": 201000,
            "room": 9,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Heizung"
                }
            },
            "uniqueUiElementId": "Base.heatingIsStateSliderMode",
            "floors": [
                1
            ],
            "rooms": [
                9
            ]
        },
        "36": {
            "categories": [],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "heatingIsState",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "floor_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        },
                        "temperature": {
                            "color": "inactive",
                            "name": "thermometer_1"
                        }
                    },
                    "metadata": [],
                    "role": 201000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Ist"
                        },
                        "title": {
                            "color": "title",
                            "content": "Temperatur"
                        }
                    },
                    "uniqueUiElementId": "Base.heatingIsState",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": -273.19999980900002,
                            "name": "TEMPERATURE",
                            "peer": 82,
                            "properties": {
                                "maximum": 100,
                                "minimum": -273.150000095,
                                "unit": "\u00b0C",
                                "visualizeInOverview": true,
                                "value": 21.600000000000001
                            },
                            "rendering": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201001
                                }
                            ],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": []
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "heatingSlider",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "thermometer_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 201000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Soll"
                        },
                        "title": {
                            "color": "title",
                            "content": "Soll-Temperatur"
                        }
                    },
                    "uniqueUiElementId": "Base.heatingSlider",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 25,
                            "minimumValue": 5,
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 82,
                            "properties": {
                                "maximum": 25,
                                "maximumScaled": 25,
                                "minimum": 5,
                                "minimumScaled": 5,
                                "unit": "\u00b0C",
                                "visualizeInOverview": true,
                                "value": 21.5
                            },
                            "rendering": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201002
                                }
                            ],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 25,
                            "minimumValue": 5,
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 82,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201002
                                }
                            ],
                            "type": "float"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "heatingMode",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "thermometer_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 201000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Modus"
                        },
                        "title": {
                            "color": "title",
                            "content": "Betriebsmodus"
                        }
                    },
                    "uniqueUiElementId": "Base.heatingMode",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "CONTROL_MODE",
                            "peer": 82,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": 0
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Frostschutz"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "1"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Komfort"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Spar"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201003
                                },
                                {
                                    "direction": 2,
                                    "id": 201000
                                }
                            ],
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "CONTROL_MODE",
                            "peer": 82,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201003
                                },
                                {
                                    "direction": 2,
                                    "id": 201000
                                }
                            ],
                            "type": "enum"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "windowContact",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "window_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": {
                        "l2_only": true
                    },
                    "role": 301002,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Status"
                        },
                        "title": {
                            "color": "title",
                            "content": "Status"
                        }
                    },
                    "uniqueUiElementId": "Base.windowContact",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 87,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "offen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "geschlossen"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 301002
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 87,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 301002
                                }
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "databaseId": 36,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "heater_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                },
                "temperature": {
                    "color": "inactive",
                    "name": "heater_1"
                }
            },
            "label": "Heizung",
            "metadata": {
                "event_hooks": [
                    {
                        "condition": {
                            "operator": "e",
                            "value": 0
                        },
                        "disable": {
                            "1": true,
                            "__dummy__": false
                        },
                        "icon": "warning_1",
                        "trigger": [
                            "82",
                            "1",
                            "CONTROL_MODE"
                        ],
                        "texts": {
                            "title": "Frostschutz"
                        }
                    },
                    {
                        "condition": {
                            "operator": "e",
                            "value": 0
                        },
                        "disable": {
                            "1": true,
                            "2": true,
                            "__dummy__": false
                        },
                        "icon": "warning_1",
                        "trigger": [
                            "87",
                            "1",
                            "STATE"
                        ],
                        "texts": {
                            "title": "Fenster offen"
                        }
                    }
                ],
                "l2_action": {
                    "control": [
                        0
                    ],
                    "input": [
                        0
                    ]
                }
            },
            "role": 201000,
            "room": 12,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Heizung"
                }
            },
            "uniqueUiElementId": "Base.heatingIsStateSliderModeWindowContact",
            "floors": [
                1
            ],
            "rooms": [
                12
            ]
        },
        "37": {
            "categories": [],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "heatingIsState",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "floor_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        },
                        "temperature": {
                            "color": "inactive",
                            "name": "thermometer_1"
                        }
                    },
                    "metadata": [],
                    "role": 201000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Ist"
                        },
                        "title": {
                            "color": "title",
                            "content": "Temperatur"
                        }
                    },
                    "uniqueUiElementId": "Base.heatingIsState",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": -273.19999980900002,
                            "name": "TEMPERATURE",
                            "peer": 83,
                            "properties": {
                                "maximum": 100,
                                "minimum": -273.150000095,
                                "unit": "\u00b0C",
                                "visualizeInOverview": true,
                                "value": 22
                            },
                            "rendering": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201001
                                }
                            ],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": []
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "heatingSlider",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "thermometer_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 201000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Soll"
                        },
                        "title": {
                            "color": "title",
                            "content": "Soll-Temperatur"
                        }
                    },
                    "uniqueUiElementId": "Base.heatingSlider",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 25,
                            "minimumValue": 5,
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 83,
                            "properties": {
                                "maximum": 25,
                                "maximumScaled": 25,
                                "minimum": 5,
                                "minimumScaled": 5,
                                "unit": "\u00b0C",
                                "visualizeInOverview": true,
                                "value": 10
                            },
                            "rendering": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201002
                                }
                            ],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 25,
                            "minimumValue": 5,
                            "name": "SETPOINT_TEMPERATURE",
                            "peer": 83,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201002
                                }
                            ],
                            "type": "float"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "heatingMode",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "thermometer_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 201000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Modus"
                        },
                        "title": {
                            "color": "title",
                            "content": "Betriebsmodus"
                        }
                    },
                    "uniqueUiElementId": "Base.heatingMode",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "CONTROL_MODE",
                            "peer": 83,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": 1
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Frostschutz"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "1"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Komfort"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Spar"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201003
                                },
                                {
                                    "direction": 2,
                                    "id": 201000
                                }
                            ],
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "CONTROL_MODE",
                            "peer": 83,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 201003
                                },
                                {
                                    "direction": 2,
                                    "id": 201000
                                }
                            ],
                            "type": "enum"
                        }
                    ]
                }
            ],
            "databaseId": 37,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "thermometer_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                },
                "temperature": {
                    "color": "inactive",
                    "name": "thermometer_1"
                }
            },
            "label": "Heizung",
            "metadata": {
                "event_hooks": [
                    {
                        "condition": {
                            "operator": "e",
                            "value": 0
                        },
                        "disable": {
                            "1": true,
                            "__dummy__": false
                        },
                        "icon": "warning_1",
                        "trigger": [
                            "83",
                            "1",
                            "CONTROL_MODE"
                        ],
                        "texts": {
                            "title": "Frostschutz"
                        }
                    }
                ],
                "l2_action": {
                    "control": [
                        0
                    ],
                    "input": [
                        0
                    ]
                }
            },
            "role": 201000,
            "room": 5,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Heizung"
                }
            },
            "uniqueUiElementId": "Base.heatingIsStateSliderMode",
            "floors": [
                2
            ],
            "rooms": [
                5
            ]
        },
        "38": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 38,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "window_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Fenster Essen",
            "metadata": {
                "l2_only": true
            },
            "role": 301002,
            "room": 12,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Status"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "windowContact",
                    "uniqueUiElementId": "Base.windowContact",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 87,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "offen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "geschlossen"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 301002
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 87,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 301002
                                }
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                12
            ]
        },
        "39": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 39,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "window_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Fenster Rund",
            "metadata": {
                "l2_only": true
            },
            "role": 301002,
            "room": 3,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Status"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "windowHandle",
                    "uniqueUiElementId": "Base.windowHandle",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "STATE",
                            "peer": 60,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": 0
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "geschlossen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "1"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "offen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "gekippt"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "g",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "undefined"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 301002
                                }
                            ],
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "STATE",
                            "peer": 60,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 301002
                                }
                            ],
                            "type": "enum"
                        }
                    ]
                }
            ],
            "floors": [
                3
            ],
            "rooms": [
                3
            ]
        },
        "40": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 40,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "window_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Fenster links",
            "metadata": {
                "l2_only": true
            },
            "role": 301002,
            "room": 6,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Status"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "windowHandle",
                    "uniqueUiElementId": "Base.windowHandle",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "STATE",
                            "peer": 61,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": 2
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "geschlossen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "1"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "offen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "gekippt"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "g",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "undefined"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 301002
                                }
                            ],
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "STATE",
                            "peer": 61,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 301002
                                }
                            ],
                            "type": "enum"
                        }
                    ]
                }
            ],
            "floors": [
                2
            ],
            "rooms": [
                6
            ]
        },
        "41": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 41,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "window_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Fenster rechts",
            "metadata": {
                "l2_only": true
            },
            "role": 301002,
            "room": 6,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Status"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "windowHandle",
                    "uniqueUiElementId": "Base.windowHandle",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "STATE",
                            "peer": 62,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": 1
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "geschlossen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "1"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "offen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "gekippt"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "g",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "undefined"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 301002
                                }
                            ],
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "STATE",
                            "peer": 62,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 301002
                                }
                            ],
                            "type": "enum"
                        }
                    ]
                }
            ],
            "floors": [
                2
            ],
            "rooms": [
                6
            ]
        },
        "42": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 42,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "window_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Fenster Bad",
            "metadata": {
                "l2_only": true
            },
            "role": 301002,
            "room": 2,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Status"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "windowHandle",
                    "uniqueUiElementId": "Base.windowHandle",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "STATE",
                            "peer": 63,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": 0
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "geschlossen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "1"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "offen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "gekippt"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "g",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "undefined"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 301002
                                }
                            ],
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "STATE",
                            "peer": 63,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 301002
                                }
                            ],
                            "type": "enum"
                        }
                    ]
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                2
            ]
        },
        "43": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 43,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "window_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Fenster links",
            "metadata": {
                "l2_only": true
            },
            "role": 301002,
            "room": 9,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Status"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "windowHandle",
                    "uniqueUiElementId": "Base.windowHandle",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "STATE",
                            "peer": 64,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": 0
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "geschlossen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "1"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "offen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "gekippt"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "g",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "undefined"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 301002
                                }
                            ],
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "STATE",
                            "peer": 64,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 301002
                                }
                            ],
                            "type": "enum"
                        }
                    ]
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                9
            ]
        },
        "44": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 44,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "window_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Fenster rechts",
            "metadata": {
                "l2_only": true
            },
            "role": 301002,
            "room": 9,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Status"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "windowHandle",
                    "uniqueUiElementId": "Base.windowHandle",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "STATE",
                            "peer": 65,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": 2
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "geschlossen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "1"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "offen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "gekippt"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "g",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "undefined"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 301002
                                }
                            ],
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "STATE",
                            "peer": 65,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 301002
                                }
                            ],
                            "type": "enum"
                        }
                    ]
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                9
            ]
        },
        "45": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 45,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "window_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Fenster K\u00fcche links",
            "metadata": {
                "l2_only": true
            },
            "role": 301002,
            "room": 12,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Status"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "windowHandle",
                    "uniqueUiElementId": "Base.windowHandle",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "STATE",
                            "peer": 66,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": 1
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "geschlossen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "1"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "offen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "gekippt"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "g",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "undefined"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 301002
                                }
                            ],
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "STATE",
                            "peer": 66,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 301002
                                }
                            ],
                            "type": "enum"
                        }
                    ]
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                12
            ]
        },
        "46": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 46,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "window_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Fenster K\u00fcche rechts",
            "metadata": {
                "l2_only": true
            },
            "role": 301002,
            "room": 12,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Status"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "windowHandle",
                    "uniqueUiElementId": "Base.windowHandle",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "STATE",
                            "peer": 67,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": 2
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "geschlossen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "1"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "offen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "gekippt"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "g",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "undefined"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 301002
                                }
                            ],
                            "type": "enum"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 2,
                            "minimumValue": 0,
                            "name": "STATE",
                            "peer": 67,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 301002
                                }
                            ],
                            "type": "enum"
                        }
                    ]
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                12
            ]
        },
        "47": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 47,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "window_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Fenster Wohnen",
            "metadata": {
                "l2_only": true
            },
            "role": 301002,
            "room": 12,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Status"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "windowHandle",
                    "uniqueUiElementId": "Base.windowHandle",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 70,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "geschlossen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "1"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "offen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "gekippt"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "g",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "window_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "undefined"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 301002
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 70,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 301002
                                }
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                1
            ],
            "rooms": [
                12
            ]
        },
        "48": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 48,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "door_open_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "T\u00fcr",
            "metadata": {
                "l2_only": true
            },
            "role": 301001,
            "room": 3,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Status"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "doorContact",
                    "uniqueUiElementId": "Base.doorContact",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 69,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "door_open_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "offen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "door_open_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "geschlossen"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 301001
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 69,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 301001
                                }
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                3
            ],
            "rooms": [
                3
            ]
        },
        "49": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 49,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "door_open_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "T\u00fcr",
            "metadata": {
                "l2_only": true
            },
            "role": 301001,
            "room": 3,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Status"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "doorHandle",
                    "uniqueUiElementId": "Base.doorHandle",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 69,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "door_open_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "geschlossen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "1"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "door_open_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "offen"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "g",
                                        "value": "1"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "door_open_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Unbekannt"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 301001
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 69,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 301001
                                }
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                3
            ],
            "rooms": [
                3
            ]
        },
        "50": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 50,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "door-handle_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "T\u00fcr Verriegelung",
            "metadata": {
                "l2_only": true
            },
            "role": 301003,
            "room": 3,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Status"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "doorLock",
                    "uniqueUiElementId": "Base.doorLock",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 69,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "door-handle_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "verriegelt"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "door-handle_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "unverriegelt"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 301001
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 69,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 301001
                                }
                            ],
                            "type": "bool"
                        }
                    ]
                }
            ],
            "floors": [
                3
            ],
            "rooms": [
                3
            ]
        },
        "51": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 51,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "ventilator_2"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                }
            },
            "label": "Ventilation",
            "metadata": {
                "l3_force": true
            },
            "role": 201000,
            "room": 8,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Stufe"
                },
                "title": {
                    "color": "title",
                    "content": "Bel\u00fcftung"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "ventilationMode",
                    "uniqueUiElementId": "Base.ventilationMode",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 4,
                            "minimumValue": 1,
                            "name": "LEVEL",
                            "peer": 86,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": 1
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Stufe 1"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "1"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Stufe 2"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "2"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Stufe 3"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "3"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "arrow_up_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Stufe 4"
                                            }
                                        }
                                    }
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 4,
                            "minimumValue": 1,
                            "name": "LEVEL",
                            "peer": 86,
                            "properties": [],
                            "type": "integer"
                        }
                    ]
                }
            ],
            "floors": [
                4
            ],
            "rooms": [
                8
            ]
        },
        "52": {
            "categories": [],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "lightingSwitch",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "light_on_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": {
                        "l2_only": true
                    },
                    "role": 100001,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Status"
                        },
                        "title": {
                            "color": "title",
                            "content": "Schalter"
                        }
                    },
                    "uniqueUiElementId": "Base.lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 92,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 0,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 92,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 0,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "lightingBrightness",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "light_dim_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 101000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Helligkeit"
                        },
                        "title": {
                            "color": "title",
                            "content": "Helligkeit"
                        }
                    },
                    "uniqueUiElementId": "Base.lightingBrightness",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "LEVEL_FAST",
                            "peer": 92,
                            "properties": {
                                "maximum": 100,
                                "maximumScaled": 100,
                                "minimum": 0,
                                "minimumScaled": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 0
                            },
                            "rendering": [],
                            "roles": [
                                {
                                    "direction": 0,
                                    "id": 101000
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "LEVEL_FAST",
                            "peer": 92,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 0,
                                    "id": 101000
                                }
                            ],
                            "type": "integer"
                        }
                    ]
                }
            ],
            "databaseId": 52,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "icon",
                    "name": "light_dim_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                },
                "light_dim_1": {
                    "color": "icon",
                    "name": "light_dim_1"
                }
            },
            "label": "LightComplex",
            "metadata": {
                "l2_action": {
                    "control": [
                        0
                    ],
                    "input": [
                        0
                    ]
                }
            },
            "role": 100001,
            "room": 12,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Status"
                },
                "title": {
                    "color": "title",
                    "content": "Beleuchtung"
                }
            },
            "uniqueUiElementId": "Base.lightingSwitchBrightness",
            "floors": [
                1
            ],
            "rooms": [
                12
            ]
        },
        "53": {
            "categories": [],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "lightingSwitch",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "light_on_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": {
                        "l2_only": true
                    },
                    "role": 100001,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Status"
                        },
                        "title": {
                            "color": "title",
                            "content": "Schalter"
                        }
                    },
                    "uniqueUiElementId": "Base.lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 93,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 93,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "lightingButton",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "light_on_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 100001,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Status"
                        },
                        "title": {
                            "color": "title",
                            "content": "Button"
                        }
                    },
                    "uniqueUiElementId": "Base.lightingButton",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 93,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Gedr\u00fcckt"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "Ungedr\u00fcckt"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 93,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "lightingBrightness",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "light_dim_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 101000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Helligkeit"
                        },
                        "title": {
                            "color": "title",
                            "content": "Helligkeit"
                        }
                    },
                    "uniqueUiElementId": "Base.lightingBrightness",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "LEVEL_FAST",
                            "peer": 93,
                            "properties": {
                                "maximum": 100,
                                "maximumScaled": 100,
                                "minimum": 0,
                                "minimumScaled": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 0
                            },
                            "rendering": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 101000
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "LEVEL_FAST",
                            "peer": 93,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 101000
                                }
                            ],
                            "type": "integer"
                        }
                    ]
                }
            ],
            "databaseId": 53,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "icon",
                    "name": "light_dim_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                },
                "light_dim_1": {
                    "color": "icon",
                    "name": "light_dim_1"
                }
            },
            "label": "LightComplexButton",
            "metadata": {
                "l2_action": {
                    "control": [
                        0
                    ],
                    "input": [
                        0
                    ]
                }
            },
            "role": 100001,
            "room": 9,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Beleuchtung"
                },
                "title": {
                    "color": "title",
                    "content": "Beleuchtung"
                }
            },
            "uniqueUiElementId": "Base.lightingSwitchButtonBrightness",
            "floors": [
                1
            ],
            "rooms": [
                9
            ]
        },
        "54": {
            "categories": [],
            "clickCount": 0,
            "controls": [
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "lightingSwitch",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "light_on_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": {
                        "l2_only": true
                    },
                    "role": 100001,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Status"
                        },
                        "title": {
                            "color": "title",
                            "content": "Schalter"
                        }
                    },
                    "uniqueUiElementId": "Base.lightingSwitch",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 94,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "an"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "aus"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 94,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 0
                    },
                    "control": "lightingButton",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "light_on_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 100001,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Status"
                        },
                        "title": {
                            "color": "title",
                            "content": "Button"
                        }
                    },
                    "uniqueUiElementId": "Base.lightingButton",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 94,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": false
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "Gedr\u00fcckt"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "Ungedr\u00fcckt"
                                            }
                                        }
                                    }
                                }
                            ],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": true,
                            "minimumValue": false,
                            "name": "STATE",
                            "peer": 94,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 100001
                                }
                            ],
                            "type": "bool"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "lightingBrightness",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "light_dim_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": [],
                    "role": 101000,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Helligkeit"
                        },
                        "title": {
                            "color": "title",
                            "content": "Helligkeit"
                        }
                    },
                    "uniqueUiElementId": "Base.lightingBrightness",
                    "variableInputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "LEVEL_FAST",
                            "peer": 94,
                            "properties": {
                                "maximum": 100,
                                "maximumScaled": 100,
                                "minimum": 0,
                                "minimumScaled": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 0
                            },
                            "rendering": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 101000
                                }
                            ],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": 1,
                            "maximumValue": 100,
                            "minimumValue": 0,
                            "name": "LEVEL_FAST",
                            "peer": 94,
                            "properties": [],
                            "roles": [
                                {
                                    "direction": 2,
                                    "id": 101000
                                }
                            ],
                            "type": "integer"
                        }
                    ]
                },
                {
                    "cell": {
                        "columns": 1,
                        "rows": 1,
                        "x": 0,
                        "y": 1
                    },
                    "control": "lightingColor",
                    "icons": {
                        "l2": {
                            "color": "inactive",
                            "name": "light_on_1"
                        },
                        "l3": {
                            "color": "iconArrow",
                            "name": "arrow_right_1"
                        }
                    },
                    "metadata": {
                        "l2_only": true
                    },
                    "role": 100001,
                    "texts": {
                        "l2_state_title": {
                            "color": "l2_state_title",
                            "content": "Status"
                        },
                        "title": {
                            "color": "title",
                            "content": "Farbe"
                        }
                    },
                    "uniqueUiElementId": "Base.lightingColor",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "COLOR",
                            "peer": 0,
                            "properties": {
                                "visualizeInOverview": true,
                                "value": "#ffffff"
                            },
                            "rendering": [
                                {
                                    "condition": {
                                        "operator": "not",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "active",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "active",
                                                "content": "on"
                                            }
                                        }
                                    }
                                },
                                {
                                    "condition": {
                                        "operator": "e",
                                        "value": "0"
                                    },
                                    "definitions": {
                                        "icons": {
                                            "state": {
                                                "color": "inactive",
                                                "name": "light_on_1"
                                            }
                                        },
                                        "texts": {
                                            "state": {
                                                "color": "inactive",
                                                "content": "off"
                                            }
                                        }
                                    }
                                }
                            ],
                            "type": "string"
                        }
                    ],
                    "variableOutputs": [
                        {
                            "channel": -1,
                            "name": "COLOR",
                            "peer": 0,
                            "properties": [],
                            "type": "string"
                        }
                    ]
                }
            ],
            "databaseId": 54,
            "grid": {
                "columns": 1,
                "height": 3,
                "rows": 3,
                "width": 3
            },
            "icons": {
                "l2": {
                    "color": "icon",
                    "name": "light_dim_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                },
                "light_dim_1": {
                    "color": "icon",
                    "name": "light_dim_1"
                }
            },
            "label": "LightComplexColor",
            "metadata": {
                "l2_action": {
                    "control": [
                        0
                    ],
                    "input": [
                        0
                    ]
                }
            },
            "role": 100001,
            "room": 9,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Lighting"
                },
                "title": {
                    "color": "title",
                    "content": "Lighting"
                }
            },
            "uniqueUiElementId": "Base.lightingSwitchButtonBrightnessColor",
            "floors": [
                1
            ],
            "rooms": [
                9
            ]
        },
        "56": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 56,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "thermometer_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                },
                "main": {
                    "color": "inactive",
                    "name": "thermometer_1"
                }
            },
            "label": "Temperatur",
            "metadata": {
                "l2_only": true
            },
            "role": 201000,
            "room": 3,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Temp."
                },
                "title": {
                    "color": "title",
                    "content": "Temperatur"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "temperature",
                    "uniqueUiElementId": "Base.temperature",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "TEMPERATURE",
                            "peer": 0,
                            "properties": {
                                "maximum": 100,
                                "minimum": -273.150000095,
                                "unit": "\u00b0C",
                                "visualizeInOverview": true,
                                "value": 21
                            },
                            "rendering": [],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": []
                }
            ],
            "floors": [
                3
            ],
            "rooms": [
                3
            ]
        },
        "57": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 57,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "waterdrops_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                },
                "main": {
                    "color": "inactive",
                    "name": "waterdrops_1"
                }
            },
            "label": "Feuchte",
            "metadata": {
                "l2_only": true
            },
            "role": 201000,
            "room": 3,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Feuchte"
                },
                "title": {
                    "color": "title",
                    "content": "Luftfeuchtigkeit"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "humidity",
                    "uniqueUiElementId": "Base.humidity",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "HUMIDITY",
                            "peer": 0,
                            "properties": {
                                "maximum": 100,
                                "minimum": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 51
                            },
                            "rendering": [],
                            "type": "integer"
                        }
                    ],
                    "variableOutputs": []
                }
            ],
            "floors": [
                3
            ],
            "rooms": [
                3
            ]
        },
        "58": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 58,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "thermometer_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                },
                "main": {
                    "color": "inactive",
                    "name": "thermometer_1"
                }
            },
            "label": "Temperatur1",
            "metadata": {
                "l2_only": true
            },
            "role": 201000,
            "room": 3,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Temp."
                },
                "title": {
                    "color": "title",
                    "content": "Temperatur"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "temperature",
                    "uniqueUiElementId": "Base.temperature",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "TEMPERATURE1",
                            "peer": 0,
                            "properties": {
                                "maximum": 100,
                                "minimum": -273.150000095,
                                "unit": "\u00b0C",
                                "visualizeInOverview": true,
                                "value": 21.300000000000001
                            },
                            "rendering": [],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": []
                }
            ],
            "floors": [
                3
            ],
            "rooms": [
                3
            ]
        },
        "59": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 59,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "waterdrops_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                },
                "main": {
                    "color": "inactive",
                    "name": "waterdrops_1"
                }
            },
            "label": "Feuchte1",
            "metadata": {
                "l2_only": true
            },
            "role": 201000,
            "room": 3,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Feuchte"
                },
                "title": {
                    "color": "title",
                    "content": "Luftfeuchtigkeit"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "humidity",
                    "uniqueUiElementId": "Base.humidity",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "HUMIDITY1",
                            "peer": 0,
                            "properties": {
                                "maximum": 100,
                                "minimum": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 51.600000000000001
                            },
                            "rendering": [],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": []
                }
            ],
            "floors": [
                3
            ],
            "rooms": [
                3
            ]
        },
        "60": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 60,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "thermometer_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                },
                "main": {
                    "color": "inactive",
                    "name": "thermometer_1"
                }
            },
            "label": "Temperatur2",
            "metadata": {
                "l2_only": true
            },
            "role": 201000,
            "room": 3,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Temp."
                },
                "title": {
                    "color": "title",
                    "content": "Temperatur"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "temperature",
                    "uniqueUiElementId": "Base.temperature",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "TEMPERATURE2",
                            "peer": 0,
                            "properties": {
                                "maximum": 100,
                                "minimum": -273.150000095,
                                "unit": "\u00b0C",
                                "visualizeInOverview": true,
                                "value": 21.3233
                            },
                            "rendering": [],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": []
                }
            ],
            "floors": [
                3
            ],
            "rooms": [
                3
            ]
        },
        "61": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 61,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "waterdrops_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                },
                "main": {
                    "color": "inactive",
                    "name": "waterdrops_1"
                }
            },
            "label": "Feuchte2",
            "metadata": {
                "l2_only": true
            },
            "role": 201000,
            "room": 3,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Feuchte"
                },
                "title": {
                    "color": "title",
                    "content": "Luftfeuchtigkeit"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "humidity",
                    "uniqueUiElementId": "Base.humidity",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "HUMIDITY2",
                            "peer": 0,
                            "properties": {
                                "maximum": 100,
                                "minimum": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 51.6233
                            },
                            "rendering": [],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": []
                }
            ],
            "floors": [
                3
            ],
            "rooms": [
                3
            ]
        },
        "62": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 62,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "thermometer_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                },
                "main": {
                    "color": "inactive",
                    "name": "thermometer_1"
                }
            },
            "label": "Temperatur3",
            "metadata": {
                "l2_only": true
            },
            "role": 201000,
            "room": 3,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Temp."
                },
                "title": {
                    "color": "title",
                    "content": "Temperatur"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "temperature",
                    "uniqueUiElementId": "Base.temperature",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "TEMPERATURE3",
                            "peer": 0,
                            "properties": {
                                "maximum": 100,
                                "minimum": -273.150000095,
                                "unit": "\u00b0C",
                                "visualizeInOverview": true,
                                "value": 21.323
                            },
                            "rendering": [],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": []
                }
            ],
            "floors": [
                3
            ],
            "rooms": [
                3
            ]
        },
        "63": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 63,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "waterdrops_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                },
                "main": {
                    "color": "inactive",
                    "name": "waterdrops_1"
                }
            },
            "label": "Feuchte3",
            "metadata": {
                "l2_only": true
            },
            "role": 201000,
            "room": 3,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Feuchte"
                },
                "title": {
                    "color": "title",
                    "content": "Luftfeuchtigkeit"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "humidity",
                    "uniqueUiElementId": "Base.humidity",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "HUMIDITY3",
                            "peer": 0,
                            "properties": {
                                "maximum": 100,
                                "minimum": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 51.622999999999998
                            },
                            "rendering": [],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": []
                }
            ],
            "floors": [
                3
            ],
            "rooms": [
                3
            ]
        },
        "64": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 64,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "thermometer_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                },
                "main": {
                    "color": "inactive",
                    "name": "thermometer_1"
                }
            },
            "label": "Temperatur4",
            "metadata": {
                "l2_only": true
            },
            "role": 201000,
            "room": 3,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Temp."
                },
                "title": {
                    "color": "title",
                    "content": "Temperatur"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "temperature",
                    "uniqueUiElementId": "Base.temperature",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "TEMPERATURE4",
                            "peer": 0,
                            "properties": {
                                "maximum": 100,
                                "minimum": -273.150000095,
                                "unit": "\u00b0C",
                                "visualizeInOverview": true,
                                "value": 21.3233
                            },
                            "rendering": [],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": []
                }
            ],
            "floors": [
                3
            ],
            "rooms": [
                3
            ]
        },
        "65": {
            "categories": [],
            "clickCount": 0,
            "databaseId": 65,
            "icons": {
                "l2": {
                    "color": "inactive",
                    "name": "waterdrops_1"
                },
                "l3": {
                    "color": "iconArrow",
                    "name": "arrow_right_1"
                },
                "main": {
                    "color": "inactive",
                    "name": "waterdrops_1"
                }
            },
            "label": "Feuchte4",
            "metadata": {
                "l2_only": true
            },
            "role": 201000,
            "room": 3,
            "texts": {
                "l2_state_title": {
                    "color": "l2_state_title",
                    "content": "Feuchte"
                },
                "title": {
                    "color": "title",
                    "content": "Luftfeuchtigkeit"
                }
            },
            "grid": null,
            "controls": [
                {
                    "cell": null,
                    "control": "humidity",
                    "uniqueUiElementId": "Base.humidity",
                    "variableInputs": [
                        {
                            "channel": -1,
                            "name": "HUMIDITY4",
                            "peer": 0,
                            "properties": {
                                "maximum": 100,
                                "minimum": 0,
                                "unit": "%",
                                "visualizeInOverview": true,
                                "value": 51.6233
                            },
                            "rendering": [],
                            "type": "float"
                        }
                    ],
                    "variableOutputs": []
                }
            ],
            "floors": [
                3
            ],
            "rooms": [
                3
            ]
        }
    },
    "floors": {
        "1": {
            "name": "Erdgeschoss",
            "rooms": [
                1,
                2,
                9,
                12
            ]
        },
        "2": {
            "name": "Obergeschoss",
            "rooms": [
                5,
                6
            ]
        },
        "3": {
            "name": "Dachgeschoss",
            "rooms": [
                3,
                7
            ]
        },
        "4": {
            "name": "Untergeschoss",
            "rooms": [
                4,
                8,
                10,
                11
            ]
        }
    },
    "rooms": {
        "1": {
            "devices": [
                11
            ],
            "floors": [
                1
            ],
            "name": "Abstellraum",
            "icon": "broom_1"
        },
        "2": {
            "devices": [
                5,
                4,
                24,
                25,
                34,
                42
            ],
            "floors": [
                1
            ],
            "name": "Bad",
            "icon": "bathtube_1"
        },
        "3": {
            "devices": [
                1,
                2,
                22,
                23,
                32,
                39,
                48,
                49,
                50,
                56,
                57,
                58,
                59,
                60,
                61,
                62,
                63,
                64,
                65
            ],
            "floors": [
                3
            ],
            "name": "Diele",
            "icon": "floor_1"
        },
        "4": {
            "devices": [
                19
            ],
            "floors": [
                4
            ],
            "name": "Garage",
            "icon": "garage_1"
        },
        "5": {
            "devices": [
                15,
                16,
                37
            ],
            "floors": [
                2
            ],
            "name": "G\u00e4ste WC",
            "icon": "wc_1"
        },
        "6": {
            "devices": [
                55,
                3,
                20,
                21,
                33,
                40,
                41
            ],
            "floors": [
                2
            ],
            "name": "Kind",
            "icon": "hokeyplayer_1"
        },
        "7": {
            "devices": [
                12,
                13,
                30,
                31
            ],
            "floors": [
                3
            ],
            "name": "Loggia",
            "icon": "balcony_1"
        },
        "8": {
            "devices": [
                51
            ],
            "floors": [
                4
            ],
            "name": "L\u00fcftung",
            "icon": "ventilator_2"
        },
        "9": {
            "devices": [
                6,
                26,
                27,
                35,
                43,
                44,
                53,
                54
            ],
            "floors": [
                1
            ],
            "name": "Schlafen",
            "icon": "bed_1"
        },
        "10": {
            "devices": [
                14
            ],
            "floors": [
                4
            ],
            "name": "Technikraum",
            "icon": "tools_1"
        },
        "11": {
            "devices": [
                17
            ],
            "floors": [
                4
            ],
            "name": "Waschraum",
            "icon": "washer_1"
        },
        "12": {
            "devices": [
                7,
                8,
                9,
                10,
                18,
                28,
                29,
                36,
                38,
                45,
                46,
                47,
                52
            ],
            "floors": [
                1
            ],
            "name": "Wohnbereich",
            "icon": "sofa_1"
        }
    },
    "roles": {
        "100001": {
            "name": "Beleuchtung",
            "texts": [
                "aus",
                "an"
            ],
            "icon": "light_on_1",
            "invokeOutputs": [
                {
                    "buttonText": "Zentral aus",
                    "value": 0
                }
            ],
            "simpleCreationInfo": {
                "element": "Base.lightingSwitch",
                "roleIdsIn": [
                    [
                        100001
                    ]
                ],
                "roleIdsOut": [
                    [
                        100001
                    ]
                ]
            },
            "aggregated": {
                "0": 12,
                "1": 5,
                "variableCount": 17
            },
            "varInRole": {
                "1": {
                    "1": {
                        "STATE": {
                            "direction": 2
                        }
                    }
                },
                "10": {
                    "1": {
                        "STATE": {
                            "direction": 2
                        }
                    }
                },
                "11": {
                    "1": {
                        "STATE": {
                            "direction": 2
                        }
                    }
                },
                "13": {
                    "1": {
                        "STATE": {
                            "direction": 2
                        }
                    }
                },
                "14": {
                    "1": {
                        "STATE": {
                            "direction": 2
                        }
                    }
                },
                "15": {
                    "1": {
                        "STATE": {
                            "direction": 2
                        }
                    }
                },
                "2": {
                    "1": {
                        "STATE": {
                            "direction": 2
                        }
                    }
                },
                "3": {
                    "1": {
                        "STATE": {
                            "direction": 2
                        }
                    }
                },
                "4": {
                    "1": {
                        "STATE": {
                            "direction": 2
                        }
                    }
                },
                "5": {
                    "1": {
                        "STATE": {
                            "direction": 2
                        }
                    }
                },
                "6": {
                    "1": {
                        "STATE": {
                            "direction": 2
                        }
                    }
                },
                "7": {
                    "1": {
                        "STATE": {
                            "direction": 2
                        }
                    }
                },
                "8": {
                    "1": {
                        "STATE": {
                            "direction": 2
                        }
                    }
                },
                "84": {
                    "1": {
                        "STATE": {
                            "direction": 2
                        }
                    }
                },
                "92": {
                    "1": {
                        "STATE": {
                            "direction": 0
                        }
                    }
                },
                "93": {
                    "1": {
                        "STATE": {
                            "direction": 2
                        }
                    }
                },
                "94": {
                    "1": {
                        "STATE": {
                            "direction": 2
                        }
                    }
                }
            }
        },
        "101000": {
            "name": "Licht - Helligkeit",
            "texts": {
                "0": "aus",
                "100": "an"
            },
            "icon": "light_dim_1",
            "invokeOutputs": [
                {
                    "buttonText": "Zentral aus",
                    "value": 0
                }
            ],
            "simpleCreationInfo": {
                "element": "Base.lightingBrightness",
                "roleIdsIn": [
                    [
                        101000
                    ]
                ],
                "roleIdsOut": [
                    [
                        101000
                    ]
                ]
            },
            "aggregated": {
                "0": 3,
                "variableCount": 3
            },
            "varInRole": {
                "92": {
                    "1": {
                        "LEVEL_FAST": {
                            "direction": 0
                        }
                    }
                },
                "93": {
                    "1": {
                        "LEVEL_FAST": {
                            "direction": 2
                        }
                    }
                },
                "94": {
                    "1": {
                        "LEVEL_FAST": {
                            "direction": 2
                        }
                    }
                }
            }
        },
        "201000": {
            "name": "Heizung",
            "texts": [
                "Frostschutz",
                "Komfort",
                "Spar"
            ],
            "icon": "heater_1",
            "invokeOutputs": [
                {
                    "buttonText": "Zentral Frostschutz",
                    "roleId": 201003,
                    "value": 0
                },
                {
                    "buttonText": "Zentral Komfort",
                    "roleId": 201003,
                    "value": 1
                },
                {
                    "buttonText": "Zentral Spar",
                    "roleId": 201003,
                    "value": 2
                }
            ],
            "rolesInclude": [
                {
                    "aggregationType": 2,
                    "roles": [
                        201003
                    ]
                }
            ],
            "aggregated": {
                "0": 7,
                "1": 5,
                "18": 6,
                "21": 6,
                "5": 6,
                "variableCount": 30
            },
            "varInRole": {
                "78": {
                    "1": {
                        "CONTROL_MODE": {
                            "direction": 2
                        },
                        "SETPOINT_TEMPERATURE.RV.COMFORT_TEMPERATURE": {
                            "direction": 2
                        },
                        "SETPOINT_TEMPERATURE.RV.ECO_TEMPERATURE": {
                            "direction": 2
                        },
                        "SETPOINT_TEMPERATURE.RV.FROST_PROTECTION_TEMPERATURE": {
                            "direction": 2
                        },
                        "SETPOINT_TEMPERATURE.RV.TEMPERATURE_MODE": {
                            "direction": 2
                        }
                    }
                },
                "79": {
                    "1": {
                        "CONTROL_MODE": {
                            "direction": 2
                        },
                        "SETPOINT_TEMPERATURE.RV.COMFORT_TEMPERATURE": {
                            "direction": 2
                        },
                        "SETPOINT_TEMPERATURE.RV.ECO_TEMPERATURE": {
                            "direction": 2
                        },
                        "SETPOINT_TEMPERATURE.RV.FROST_PROTECTION_TEMPERATURE": {
                            "direction": 2
                        },
                        "SETPOINT_TEMPERATURE.RV.TEMPERATURE_MODE": {
                            "direction": 2
                        }
                    }
                },
                "80": {
                    "1": {
                        "CONTROL_MODE": {
                            "direction": 2
                        },
                        "SETPOINT_TEMPERATURE.RV.COMFORT_TEMPERATURE": {
                            "direction": 2
                        },
                        "SETPOINT_TEMPERATURE.RV.ECO_TEMPERATURE": {
                            "direction": 2
                        },
                        "SETPOINT_TEMPERATURE.RV.FROST_PROTECTION_TEMPERATURE": {
                            "direction": 2
                        },
                        "SETPOINT_TEMPERATURE.RV.TEMPERATURE_MODE": {
                            "direction": 2
                        }
                    }
                },
                "81": {
                    "1": {
                        "CONTROL_MODE": {
                            "direction": 2
                        },
                        "SETPOINT_TEMPERATURE.RV.COMFORT_TEMPERATURE": {
                            "direction": 2
                        },
                        "SETPOINT_TEMPERATURE.RV.ECO_TEMPERATURE": {
                            "direction": 2
                        },
                        "SETPOINT_TEMPERATURE.RV.FROST_PROTECTION_TEMPERATURE": {
                            "direction": 2
                        },
                        "SETPOINT_TEMPERATURE.RV.TEMPERATURE_MODE": {
                            "direction": 2
                        }
                    }
                },
                "82": {
                    "1": {
                        "CONTROL_MODE": {
                            "direction": 2
                        },
                        "SETPOINT_TEMPERATURE.RV.COMFORT_TEMPERATURE": {
                            "direction": 2
                        },
                        "SETPOINT_TEMPERATURE.RV.ECO_TEMPERATURE": {
                            "direction": 2
                        },
                        "SETPOINT_TEMPERATURE.RV.FROST_PROTECTION_TEMPERATURE": {
                            "direction": 2
                        },
                        "SETPOINT_TEMPERATURE.RV.TEMPERATURE_MODE": {
                            "direction": 2
                        }
                    }
                },
                "83": {
                    "1": {
                        "CONTROL_MODE": {
                            "direction": 2
                        },
                        "SETPOINT_TEMPERATURE.RV.COMFORT_TEMPERATURE": {
                            "direction": 2
                        },
                        "SETPOINT_TEMPERATURE.RV.ECO_TEMPERATURE": {
                            "direction": 2
                        },
                        "SETPOINT_TEMPERATURE.RV.FROST_PROTECTION_TEMPERATURE": {
                            "direction": 2
                        },
                        "SETPOINT_TEMPERATURE.RV.TEMPERATURE_MODE": {
                            "direction": 2
                        }
                    }
                }
            }
        },
        "201001": {
            "name": "Heizung - Ist-Temperatur",
            "texts": [
                "Ist"
            ],
            "aggregated": {
                "20": 1,
                "21": 1,
                "22": 3,
                "23": 1,
                "variableCount": 6
            },
            "varInRole": {
                "78": {
                    "1": {
                        "TEMPERATURE": {
                            "direction": 2
                        }
                    }
                },
                "79": {
                    "1": {
                        "TEMPERATURE": {
                            "direction": 2
                        }
                    }
                },
                "80": {
                    "1": {
                        "TEMPERATURE": {
                            "direction": 2
                        }
                    }
                },
                "81": {
                    "1": {
                        "TEMPERATURE": {
                            "direction": 2
                        }
                    }
                },
                "82": {
                    "1": {
                        "TEMPERATURE": {
                            "direction": 2
                        }
                    }
                },
                "83": {
                    "1": {
                        "TEMPERATURE": {
                            "direction": 2
                        }
                    }
                }
            }
        },
        "201002": {
            "name": "Heizung - Soll-Temperatur",
            "texts": [
                "Soll"
            ],
            "simpleCreationInfo": [
                {
                    "element": "Base.heatingIsStateSliderMode",
                    "roleIdsIn": [
                        [
                            201001
                        ],
                        [
                            201002
                        ],
                        [
                            201003
                        ]
                    ],
                    "roleIdsOut": [
                        [
                            201001
                        ],
                        [
                            201002
                        ],
                        [
                            201003
                        ]
                    ]
                },
                {
                    "element": "Base.heatingIsStateSliderModeWindow",
                    "roleIdsIn": [
                        [
                            201001
                        ],
                        [
                            201002
                        ],
                        [
                            201003
                        ],
                        [
                            301002
                        ]
                    ],
                    "roleIdsOut": [
                        [
                            201001
                        ],
                        [
                            201002
                        ],
                        [
                            201003
                        ],
                        [
                            301002
                        ]
                    ]
                }
            ],
            "aggregated": {
                "10": 5,
                "22": 1,
                "variableCount": 6
            },
            "varInRole": {
                "78": {
                    "1": {
                        "SETPOINT_TEMPERATURE": {
                            "direction": 2
                        }
                    }
                },
                "79": {
                    "1": {
                        "SETPOINT_TEMPERATURE": {
                            "direction": 2
                        }
                    }
                },
                "80": {
                    "1": {
                        "SETPOINT_TEMPERATURE": {
                            "direction": 2
                        }
                    }
                },
                "81": {
                    "1": {
                        "SETPOINT_TEMPERATURE": {
                            "direction": 2
                        }
                    }
                },
                "82": {
                    "1": {
                        "SETPOINT_TEMPERATURE": {
                            "direction": 2
                        }
                    }
                },
                "83": {
                    "1": {
                        "SETPOINT_TEMPERATURE": {
                            "direction": 2
                        }
                    }
                }
            }
        },
        "201003": {
            "name": "Heizung - Temperaturmodus",
            "texts": [
                "Frostschutz",
                "Komfort",
                "Spar"
            ],
            "aggregated": {
                "0": 7,
                "1": 5,
                "variableCount": 12
            },
            "varInRole": {
                "78": {
                    "1": {
                        "CONTROL_MODE": {
                            "direction": 2
                        },
                        "SETPOINT_TEMPERATURE.RV.TEMPERATURE_MODE": {
                            "direction": 2
                        }
                    }
                },
                "79": {
                    "1": {
                        "CONTROL_MODE": {
                            "direction": 2
                        },
                        "SETPOINT_TEMPERATURE.RV.TEMPERATURE_MODE": {
                            "direction": 2
                        }
                    }
                },
                "80": {
                    "1": {
                        "CONTROL_MODE": {
                            "direction": 2
                        },
                        "SETPOINT_TEMPERATURE.RV.TEMPERATURE_MODE": {
                            "direction": 2
                        }
                    }
                },
                "81": {
                    "1": {
                        "CONTROL_MODE": {
                            "direction": 2
                        },
                        "SETPOINT_TEMPERATURE.RV.TEMPERATURE_MODE": {
                            "direction": 2
                        }
                    }
                },
                "82": {
                    "1": {
                        "CONTROL_MODE": {
                            "direction": 2
                        },
                        "SETPOINT_TEMPERATURE.RV.TEMPERATURE_MODE": {
                            "direction": 2
                        }
                    }
                },
                "83": {
                    "1": {
                        "CONTROL_MODE": {
                            "direction": 2
                        },
                        "SETPOINT_TEMPERATURE.RV.TEMPERATURE_MODE": {
                            "direction": 2
                        }
                    }
                }
            }
        },
        "201004": {
            "name": "Heizung - Komforttemperatur",
            "texts": [
                "Komfort"
            ],
            "aggregated": {
                "21": 6,
                "variableCount": 6
            },
            "varInRole": {
                "78": {
                    "1": {
                        "SETPOINT_TEMPERATURE.RV.COMFORT_TEMPERATURE": {
                            "direction": 2
                        }
                    }
                },
                "79": {
                    "1": {
                        "SETPOINT_TEMPERATURE.RV.COMFORT_TEMPERATURE": {
                            "direction": 2
                        }
                    }
                },
                "80": {
                    "1": {
                        "SETPOINT_TEMPERATURE.RV.COMFORT_TEMPERATURE": {
                            "direction": 2
                        }
                    }
                },
                "81": {
                    "1": {
                        "SETPOINT_TEMPERATURE.RV.COMFORT_TEMPERATURE": {
                            "direction": 2
                        }
                    }
                },
                "82": {
                    "1": {
                        "SETPOINT_TEMPERATURE.RV.COMFORT_TEMPERATURE": {
                            "direction": 2
                        }
                    }
                },
                "83": {
                    "1": {
                        "SETPOINT_TEMPERATURE.RV.COMFORT_TEMPERATURE": {
                            "direction": 2
                        }
                    }
                }
            }
        },
        "201005": {
            "name": "Heizung - Absenktemperatur",
            "texts": [
                "Spar"
            ],
            "aggregated": {
                "18": 6,
                "variableCount": 6
            },
            "varInRole": {
                "78": {
                    "1": {
                        "SETPOINT_TEMPERATURE.RV.ECO_TEMPERATURE": {
                            "direction": 2
                        }
                    }
                },
                "79": {
                    "1": {
                        "SETPOINT_TEMPERATURE.RV.ECO_TEMPERATURE": {
                            "direction": 2
                        }
                    }
                },
                "80": {
                    "1": {
                        "SETPOINT_TEMPERATURE.RV.ECO_TEMPERATURE": {
                            "direction": 2
                        }
                    }
                },
                "81": {
                    "1": {
                        "SETPOINT_TEMPERATURE.RV.ECO_TEMPERATURE": {
                            "direction": 2
                        }
                    }
                },
                "82": {
                    "1": {
                        "SETPOINT_TEMPERATURE.RV.ECO_TEMPERATURE": {
                            "direction": 2
                        }
                    }
                },
                "83": {
                    "1": {
                        "SETPOINT_TEMPERATURE.RV.ECO_TEMPERATURE": {
                            "direction": 2
                        }
                    }
                }
            }
        },
        "201006": {
            "name": "Heizung - Frostschutztemperatur",
            "texts": [
                "Frostschutz"
            ],
            "aggregated": {
                "5": 6,
                "variableCount": 6
            },
            "varInRole": {
                "78": {
                    "1": {
                        "SETPOINT_TEMPERATURE.RV.FROST_PROTECTION_TEMPERATURE": {
                            "direction": 2
                        }
                    }
                },
                "79": {
                    "1": {
                        "SETPOINT_TEMPERATURE.RV.FROST_PROTECTION_TEMPERATURE": {
                            "direction": 2
                        }
                    }
                },
                "80": {
                    "1": {
                        "SETPOINT_TEMPERATURE.RV.FROST_PROTECTION_TEMPERATURE": {
                            "direction": 2
                        }
                    }
                },
                "81": {
                    "1": {
                        "SETPOINT_TEMPERATURE.RV.FROST_PROTECTION_TEMPERATURE": {
                            "direction": 2
                        }
                    }
                },
                "82": {
                    "1": {
                        "SETPOINT_TEMPERATURE.RV.FROST_PROTECTION_TEMPERATURE": {
                            "direction": 2
                        }
                    }
                },
                "83": {
                    "1": {
                        "SETPOINT_TEMPERATURE.RV.FROST_PROTECTION_TEMPERATURE": {
                            "direction": 2
                        }
                    }
                }
            }
        },
        "301001": {
            "name": "Sicherheit - T\u00fcrzustand",
            "texts": [
                "ge\u00f6ffnet",
                "geschlossen"
            ],
            "icon": "door_open_2",
            "aggregated": {
                "0": 1,
                "variableCount": 1
            },
            "varInRole": {
                "69": {
                    "1": {
                        "STATE": {
                            "direction": 2
                        }
                    }
                }
            }
        },
        "301002": {
            "name": "Fenster",
            "texts": [
                "ge\u00f6ffnet",
                "geschlossen"
            ],
            "icon": "window_1",
            "simpleCreationInfo": {
                "element": "Base.windowContact",
                "roleIdsIn": [
                    [
                        301002
                    ]
                ],
                "roleIdsOut": [
                    [
                        301002
                    ]
                ]
            },
            "aggregated": {
                "0": 5,
                "1": 2,
                "2": 3,
                "variableCount": 10
            },
            "varInRole": {
                "60": {
                    "1": {
                        "STATE": {
                            "direction": 2
                        }
                    }
                },
                "61": {
                    "1": {
                        "STATE": {
                            "direction": 2
                        }
                    }
                },
                "62": {
                    "1": {
                        "STATE": {
                            "direction": 2
                        }
                    }
                },
                "63": {
                    "1": {
                        "STATE": {
                            "direction": 2
                        }
                    }
                },
                "64": {
                    "1": {
                        "STATE": {
                            "direction": 2
                        }
                    }
                },
                "65": {
                    "1": {
                        "STATE": {
                            "direction": 2
                        }
                    }
                },
                "66": {
                    "1": {
                        "STATE": {
                            "direction": 2
                        }
                    }
                },
                "67": {
                    "1": {
                        "STATE": {
                            "direction": 2
                        }
                    }
                },
                "70": {
                    "1": {
                        "STATE": {
                            "direction": 2
                        }
                    }
                },
                "87": {
                    "1": {
                        "STATE": {
                            "direction": 2
                        }
                    }
                }
            }
        },
        "301003": {
            "name": "T\u00fcren",
            "texts": [
                "unverriegelt",
                "verriegelt"
            ],
            "icon": "door-handle_1",
            "simpleCreationInfo": {
                "element": "Base.doorLock",
                "roleIdsIn": [
                    [
                        301003
                    ]
                ],
                "roleIdsOut": [
                    [
                        301003
                    ]
                ]
            },
            "aggregated": {
                "variableCount": 0
            },
            "varInRole": []
        },
        "400001": {
            "name": "Steckdosen",
            "texts": [
                "aus",
                "an"
            ],
            "icon": "socket_1",
            "invokeOutputs": [
                {
                    "buttonText": "Zentral aus",
                    "value": 0
                }
            ],
            "simpleCreationInfo": {
                "element": "Base.socketSwitch",
                "roleIdsIn": [
                    [
                        400001
                    ]
                ],
                "roleIdsOut": [
                    [
                        400001
                    ]
                ]
            },
            "aggregated": {
                "0": 1,
                "1": 3,
                "variableCount": 4
            },
            "varInRole": {
                "12": {
                    "1": {
                        "STATE": {
                            "direction": 2
                        }
                    }
                },
                "16": {
                    "1": {
                        "STATE": {
                            "direction": 2
                        }
                    }
                },
                "9": {
                    "1": {
                        "STATE": {
                            "direction": 2
                        }
                    }
                },
                "91": {
                    "1": {
                        "STATE": {
                            "direction": 2
                        }
                    }
                }
            }
        },
        "501000": {
            "name": "Beschattung",
            "texts": {
                "falseCount": "eingefahren",
                "trueCount": "ausgefahren"
            },
            "icon": "blind_1",
            "invokeOutputs": [
                {
                    "buttonText": "Zentral auf",
                    "roleId": 501001,
                    "value": false
                },
                {
                    "buttonText": "Zentral ab",
                    "roleId": 501002,
                    "value": true
                }
            ],
            "rolesInclude": [
                {
                    "aggregationType": 1,
                    "roles": [
                        501004
                    ]
                }
            ],
            "simpleCreationInfo": [
                {
                    "element": "Base.shadingButtonsPositionSlats",
                    "roleIdsIn": [
                        [
                            501001,
                            501003,
                            501002
                        ],
                        [
                            501004
                        ]
                    ],
                    "roleIdsOut": [
                        [
                            501001,
                            501003,
                            501002
                        ],
                        [
                            501004
                        ]
                    ]
                },
                {
                    "element": "Base.shadingButtonsUpDown",
                    "roleIdsIn": [
                        [
                            501001,
                            501002
                        ]
                    ],
                    "roleIdsOut": [
                        [
                            501001,
                            501002
                        ]
                    ]
                }
            ],
            "aggregated": {
                "variableCount": 0
            },
            "varInRole": []
        },
        "501001": {
            "name": "Beschattung - hoch",
            "texts": [
                "Hoch"
            ],
            "aggregated": {
                "0": 5,
                "variableCount": 5
            },
            "varInRole": {
                "18": {
                    "1": {
                        "UP": {
                            "direction": 2
                        }
                    }
                },
                "21": {
                    "1": {
                        "UP": {
                            "direction": 2
                        }
                    }
                },
                "22": {
                    "1": {
                        "UP": {
                            "direction": 2
                        }
                    }
                },
                "23": {
                    "1": {
                        "UP": {
                            "direction": 2
                        }
                    }
                },
                "24": {
                    "1": {
                        "UP": {
                            "direction": 2
                        }
                    }
                }
            }
        },
        "501002": {
            "name": "Beschattung - runter",
            "texts": [
                "Runter"
            ],
            "aggregated": {
                "1": 5,
                "variableCount": 5
            },
            "varInRole": {
                "18": {
                    "1": {
                        "DOWN": {
                            "direction": 2
                        }
                    }
                },
                "21": {
                    "1": {
                        "DOWN": {
                            "direction": 2
                        }
                    }
                },
                "22": {
                    "1": {
                        "DOWN": {
                            "direction": 2
                        }
                    }
                },
                "23": {
                    "1": {
                        "DOWN": {
                            "direction": 2
                        }
                    }
                },
                "24": {
                    "1": {
                        "DOWN": {
                            "direction": 2
                        }
                    }
                }
            }
        },
        "501003": {
            "name": "Beschattung - Stopp",
            "texts": [
                "Stopp"
            ],
            "aggregated": {
                "variableCount": 0
            },
            "varInRole": []
        },
        "501004": {
            "name": "Beschattung - Position",
            "aggregated": {
                "100": 5,
                "25": 1,
                "variableCount": 6
            },
            "varInRole": {
                "18": {
                    "1": {
                        "CURRENT_POSITION": {
                            "direction": 2
                        }
                    }
                },
                "19": {
                    "1": {
                        "CURRENT_POSITION": {
                            "direction": 2
                        }
                    }
                },
                "21": {
                    "1": {
                        "CURRENT_POSITION": {
                            "direction": 2
                        }
                    }
                },
                "22": {
                    "1": {
                        "CURRENT_POSITION": {
                            "direction": 2
                        }
                    }
                },
                "23": {
                    "1": {
                        "CURRENT_POSITION": {
                            "direction": 2
                        }
                    }
                },
                "24": {
                    "1": {
                        "CURRENT_POSITION": {
                            "direction": 2
                        }
                    }
                }
            }
        },
        "502000": {
            "name": "Beschattung - Markise",
            "texts": {
                "falseCount": "eingefahren",
                "trueCount": "ausgefahren"
            },
            "icon": "awning_1",
            "invokeOutputs": [
                {
                    "buttonText": "Zentral auf",
                    "roleId": 502001,
                    "value": false
                },
                {
                    "buttonText": "Zentral ab",
                    "roleId": 502002,
                    "value": true
                }
            ],
            "rolesInclude": [
                {
                    "aggregationType": 1,
                    "roles": [
                        502004
                    ]
                }
            ],
            "simpleCreationInfo": [
                {
                    "element": "Base.shadingButtonsPositionSlats",
                    "roleIdsIn": [
                        [
                            502001,
                            502003,
                            502002
                        ],
                        [
                            502004
                        ]
                    ],
                    "roleIdsOut": [
                        [
                            502001,
                            502003,
                            502002
                        ],
                        [
                            502004
                        ]
                    ]
                },
                {
                    "element": "Base.shadingButtonsUpDown",
                    "roleIdsIn": [
                        [
                            502001
                        ]
                    ],
                    "roleIdsOut": [
                        [
                            502001
                        ]
                    ]
                }
            ],
            "aggregated": {
                "variableCount": 0
            },
            "varInRole": []
        },
        "502001": {
            "name": "Beschattung - Markise - einfahren",
            "texts": [
                "einfahren"
            ],
            "aggregated": {
                "0": 2,
                "variableCount": 2
            },
            "varInRole": {
                "25": {
                    "1": {
                        "UP": {
                            "direction": 2
                        }
                    }
                },
                "26": {
                    "1": {
                        "UP": {
                            "direction": 2
                        }
                    }
                }
            }
        },
        "502002": {
            "name": "Beschattung - Markise - ausfahren",
            "texts": [
                "ausfahren"
            ],
            "aggregated": {
                "1": 2,
                "variableCount": 2
            },
            "varInRole": {
                "25": {
                    "1": {
                        "DOWN": {
                            "direction": 2
                        }
                    }
                },
                "26": {
                    "1": {
                        "DOWN": {
                            "direction": 2
                        }
                    }
                }
            }
        },
        "502003": {
            "name": "Beschattung - Markise - Stopp",
            "texts": [
                "Stopp"
            ],
            "aggregated": {
                "variableCount": 0
            },
            "varInRole": []
        },
        "502004": {
            "name": "Beschattung - Markise - Position",
            "aggregated": {
                "100": 2,
                "variableCount": 2
            },
            "varInRole": {
                "25": {
                    "1": {
                        "CURRENT_POSITION": {
                            "direction": 2
                        }
                    }
                },
                "26": {
                    "1": {
                        "CURRENT_POSITION": {
                            "direction": 2
                        }
                    }
                }
            }
        },
        "600000": {
            "name": "Fenster",
            "texts": {
                "falseCount": "ge\u00f6ffnet",
                "trueCount": "geschlossen"
            },
            "icon": "window_2",
            "invokeOutputs": [
                {
                    "buttonText": "Zentral auf",
                    "roleId": 600001,
                    "value": false
                },
                {
                    "buttonText": "Zentral ab",
                    "roleId": 600002,
                    "value": true
                }
            ],
            "rolesInclude": [
                {
                    "aggregationType": 1,
                    "roles": [
                        600001
                    ]
                }
            ],
            "simpleCreationInfo": [
                {
                    "element": "Base.windowButtonsUpDown",
                    "roleIdsIn": [
                        [
                            600001,
                            600002
                        ]
                    ],
                    "roleIdsOut": [
                        [
                            600001,
                            600002
                        ]
                    ]
                }
            ],
            "aggregated": {
                "variableCount": 0
            },
            "varInRole": []
        },
        "600001": {
            "name": "Fenster - hoch",
            "texts": [
                "Hoch"
            ],
            "aggregated": {
                "0": 2,
                "variableCount": 2
            },
            "varInRole": {
                "17": {
                    "1": {
                        "UP": {
                            "direction": 2
                        }
                    }
                },
                "20": {
                    "1": {
                        "UP": {
                            "direction": 2
                        }
                    }
                }
            }
        },
        "600002": {
            "name": "Fenster - runter",
            "texts": [
                "Runter"
            ],
            "aggregated": {
                "1": 2,
                "variableCount": 2
            },
            "varInRole": {
                "17": {
                    "1": {
                        "DOWN": {
                            "direction": 2
                        }
                    }
                },
                "20": {
                    "1": {
                        "DOWN": {
                            "direction": 2
                        }
                    }
                }
            }
        },
        "600003": {
            "name": "Fenster - Stopp",
            "texts": [
                "Stopp"
            ],
            "aggregated": {
                "variableCount": 0
            },
            "varInRole": []
        },
        "600004": {
            "name": "Fenster - Position",
            "aggregated": {
                "100": 2,
                "variableCount": 2
            },
            "varInRole": {
                "17": {
                    "1": {
                        "CURRENT_POSITION": {
                            "direction": 2
                        }
                    }
                },
                "20": {
                    "1": {
                        "CURRENT_POSITION": {
                            "direction": 2
                        }
                    }
                }
            }
        }
    },
    "mainmenu": [
        {
            "id": "house",
            "name": "house",
            "icon": "house_1",
            "onclick": "main",
            "onclickOptions": {
                "name": "house",
                "content": "house"
            },
            "tabs": [
                {
                    "id": "rooms",
                    "name": "house.tab.rooms",
                    "active": true
                },
                {
                    "id": "devices",
                    "name": "house.tab.devices",
                    "content": "<shif-all-devices><\/shif-all-devices>"
                }
            ]
        },
        {
            "id": "settings",
            "name": "settings",
            "icon": "settings_1",
            "onclick": "main",
            "onclickOptions": {
                "name": "settings",
                "content": "settings",
                "menu": "settings"
            }
        }
    ],
    "menu": [
        {
            "id": "1",
            "name": "settings.user",
            "mainmenu": "settings",
            "category": "user",
            "level": "1",
            "icon": "profile_1",
            "onclick": "menu",
            "onclickOptions": {
                "mainmenu": "settings",
                "level": "2",
                "category": "user",
                "name": "settings.user",
                "content": "true"
            },
            "description": "settings.user.description"
        },
        {
            "id": "2",
            "name": "settings.user.manage",
            "mainmenu": "settings",
            "category": "user",
            "level": "2",
            "icon": "profile_1",
            "onclick": "user",
            "onclickOptions": {
                "name": "settings.user.manage",
                "content": "edit"
            },
            "description": "settings.user.manage.description"
        },
        {
            "id": "3",
            "name": "settings.about",
            "mainmenu": "settings",
            "category": "license",
            "level": "1",
            "icon": "information_1",
            "onclick": "license",
            "onclickOptions": {
                "name": "settings.about",
                "content": "license"
            },
            "description": "settings.about.description"
        }
    ],
    "themes": [
        {
            "id": "0",
            "name": "highlight",
            "colors": {
                "Orange": "#e3a104",
                "Pink": "#c72c8b",
                "Blau": "#1798db",
                "Gr\u00fcn": "#4da829",
                "Rot": "#b82c25",
                "T\u00fcrkis": "#29ab9a",
                "Violette": "#8e44ad",
                "Gelb": "#e2e437"
            }
        },
        {
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
        {
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
        {
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
        {
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
        {
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
    ],
    "options": {
        "twofaEnabled": true,
        "userHasTwofaRegistrations": false,
        "firstBreadcrumb": "Haus",
        "firstBreadcrumbId": "house",
        "breadcrumbs_array": [
            "<div class=\"breadcrumbsJump\" onclick=\"main({name:interfaceData.options.firstBreadcrumb,content:interfaceData.options.firstBreadcrumbId});\">Haus<\/div>"
        ],
        "breadcrumbs_id_array": [
            "house"
        ],
        "theme": "dark",
        "highlight": "#00e313",
        "language": "de-DE",
        "viewportScale": 0.65000000000000002,
        "languageChangeable": true,
        "twofaChangeable": true,
        "showFloor": true,
        "consoleLog": true,
        "interfacePath": "\/",
        "websocket_url": "location.hostname",
        "websocket_port": "location.port",
        "websocket_security_ssl": null
    },
    "iconFallback": {
        "Pfeil_unten1": "arrow_down_filled_1",
        "abriegeln1": "close_house_1",
        "ankleide": "commode_1",
        "arbeitszimmer1": "desk_1",
        "back": "arrow_left_filled_1",
        "balcony1": "balcony_1",
        "bett1": "bed_1",
        "bicycle1": "fitnessbike_1",
        "candy1": "candy_1",
        "car1": "car_1",
        "checkbox": "checkbox_1",
        "clean1": "broom_1",
        "computer1": "computer_1",
        "controller1": "controller_1",
        "door1": "door_open_1",
        "door2": "door_open_2",
        "einstellungen1": "settings_1",
        "fenster1": "window_1",
        "feuerwehr1": "fire_1",
        "fitnessraum1": "biceps_1",
        "floor1": "floor_1",
        "forward": "arrow_right_filled_1",
        "garage1": "garage_1",
        "garten1": "plant_1",
        "gauge1": "speedometer_1",
        "guest": "traveler_1",
        "gym1": "weights_1",
        "haus1": "house_1",
        "heater": "heater_1",
        "hood": "hood_1",
        "humidity1": "waterdrops_1",
        "information1": "information_1",
        "kind1": "rockinghorse_1",
        "kind2": "child_1",
        "kueche1": "fork_knife_1",
        "kuehlschrank1": "fridge_1",
        "lautsprecher1": "speaker_1",
        "lautsprecher2": "speaker_2",
        "library1": "library_1",
        "licht1": "light_on_1",
        "licht2": "light_off_1",
        "licht3": "light_dim_1",
        "load1": "reload_1",
        "loudspeaker-active": "speaker_3",
        "loudspeaker-inactive": "speaker_4",
        "lunchbox1": "lunchbox_1",
        "markiese1": "awning_1",
        "mikrowelle1": "microwave_1",
        "mitteilung1": "bell_1",
        "mitteilungen1": "bell_2",
        "mower": "mower_1",
        "on-off": "on_off_1",
        "oven1": "oven_1",
        "pfeil-stepp2": "arrow_up_step_1",
        "pfeil-stepp4": "arrow_down_step_1",
        "pfeil1": "arrow_left_1",
        "pfeil2": "arrow_up_1",
        "pfeil3": "arrow_right_1",
        "pfeil4": "arrow_down_1",
        "pfeil5": "arrow_fast_right_1",
        "pfeil6": "arrow_fast_down_2",
        "pfeil7": "arrow_fast_left_3",
        "pfeil8": "arrow_fast_up_4",
        "play": "play_1",
        "plus1": "plus_1",
        "polizei1": "police_1",
        "pool1": "waves_1",
        "power1": "power_1",
        "profil1": "profile_1",
        "question1": "question_1",
        "rasenmaeher1": "mower_2",
        "rasensprenger1": "shower_1",
        "rolladen1": "blind_1",
        "room1": "groundplan_1",
        "schliesen1": "close_x_1",
        "schuppen": "shelter_1",
        "sicherheit1": "lock_1",
        "socket1": "socket_1",
        "sofa1": "sofa_1",
        "sport1": "sport_1",
        "sprechblase1": "speech_bubble_1",
        "stairs1": "stairs_1",
        "stairs2": "stairs_2",
        "stairs8": "stairs_3",
        "statistiken1": "statistic_1",
        "staubsauger1": "vacuum_1",
        "step-backward": "arrow_left_step_2",
        "step-downward": "arrow_down_step_2",
        "step-forward": "arrow_right_step_1",
        "step-upward": "arrow_up_step_2",
        "stop": "stop_1",
        "table1": "table_1",
        "table2": "table_2",
        "telephone1": "telephone_1",
        "terrace1": "table_outside_1",
        "thermometer1": "thermometer_1",
        "tools": "tools_1",
        "tv1": "tv_1",
        "ventilator": "ventilator_2",
        "ventilator1": "ventilator_1",
        "wardrobe": "hanger_1",
        "warnung1": "warning_1",
        "waschmaschiene1": "washer_1",
        "wc1": "wc_1",
        "wc2": "bathtube_1",
        "weather1": "weather_1",
        "wheelbarrow1": "wheelbarrow_1",
        "widgets1": "widgets_1",
        "windalarm1": "windhose_1",
        "wine1": "wine_1",
        "air-quality": "air-quality_1",
        "aircondition": "aircondition_1",
        "blocks": "blocks_1",
        "calendar-time": "calendar-time_1",
        "door-handle": "door-handle_1",
        "history": "history_1",
        "player": "hokeyplayer_1",
        "plus-minus": "plus-minus_1",
        "powerplug": "powerplug_1",
        "rocking-horse": "rockinghorse_2",
        "slider": "slider_1",
        "soccer-ball": "soccer-ball_1",
        "switches": "switches_1",
        "wind": "wind_1",
        "blinds_1": "blind_2",
        "blinds_2": "blind_3"
    },
    "i18n": {
        "login": {
            "username": "Benutzername",
            "password": "Kennwort",
            "signin": "Anmelden",
            "waitingFor2ndFactor": "Warte auf zweiten Faktor...",
            "error": {
                "wrongpassword": "Unbekannter Benutzer oder falsches Kennwort.",
                "noaccess": "Keine Zugriffsberechtigung.",
                "twofaError": "Fehler beim zweiten Faktor",
                "browserNotSupported": "Browser wird nicht unterst\u00fctzt."
            }
        },
        "house": "Haus",
        "house.tab.rooms": "R\u00e4ume",
        "house.tab.devices": "Ger\u00e4te",
        "widgets": "Widgets",
        "settings": "Einstellungen",
        "settings.user": "Benutzer",
        "settings.user.description": "Verwalten",
        "settings.user.manage": "Benutzereinstellungen",
        "settings.user.manage.description": "Theme, Farben und andere Einstellungen",
        "settings.user.manage.twofa": "Zweifaktorauthentifizierung",
        "settings.user.manage.registerTwofa": "WebAuthn-Ger\u00e4t registrieren",
        "settings.user.manage.unregisterTwofa": "WebAuthn-Ger\u00e4t entfernen",
        "settings.user.manage.twofaRegistered": "WebAuthn ist aktiviert",
        "settings.user.manage.browserNotSupported": "Browser wird nicht unterst\u00fctzt.",
        "settings.user.manage.language": "Sprache",
        "settings.user.manage.language.name": "Deutsch",
        "settings.user.manage.theme": "Theme",
        "settings.user.manage.theme.dark": "Dunkel",
        "settings.user.manage.theme.light": "Hell",
        "settings.user.manage.theme.blue": "Blau",
        "settings.user.manage.theme.purple": "Lila",
        "settings.user.manage.highlight": "Vordergrundfarbe",
        "settings.user.manage.save": "Speichern",
        "settings.about": "Lizenz",
        "settings.about.description": "Credits",
        "settings.about.table.name": "Name",
        "settings.about.table.version": "Version",
        "settings.about.table.rights": "Rechte",
        "settings.about.table.license": "Lizenz",
        "settings.about.table.license.url": "Lizenz URL",
        "logoff": "Abmelden",
        "disabled_text": "gesperrt",
        "default": {
            "login": {
                "username": "Username",
                "password": "Password",
                "signin": "Login",
                "waitingFor2ndFactor": "Waiting for second factor...",
                "error": {
                    "wrongpassword": "Wrong username or password",
                    "noaccess": "No access permission",
                    "twofaError": "2nd factor error",
                    "browserNotSupported": "Browser not supported."
                }
            },
            "house": "House",
            "house.tab.rooms": "Rooms",
            "house.tab.devices": "Devices",
            "widgets": "Widgets",
            "settings": "Settings",
            "settings.user": "User",
            "settings.user.description": "Manage",
            "settings.user.manage": "User Settings",
            "settings.user.manage.description": "Theme, colors and other settings",
            "settings.user.manage.twofa": "Two-factor authentication",
            "settings.user.manage.registerTwofa": "Register WebAuthn device",
            "settings.user.manage.unregisterTwofa": "Unregister WebAuthn device",
            "settings.user.manage.twofaRegistered": "WebAuthn activated",
            "settings.user.manage.browserNotSupported": "Browser not supported.",
            "settings.user.manage.theme": "Theme",
            "settings.user.manage.theme.dark": "Dark",
            "settings.user.manage.theme.light": "Light",
            "settings.user.manage.theme.blue": "Blue",
            "settings.user.manage.theme.purple": "Purple",
            "settings.user.manage.language": "Language",
            "settings.user.manage.language.name": "English",
            "settings.user.manage.highlight": "Highlighting",
            "settings.user.manage.save": "Save",
            "settings.about": "License",
            "settings.about.description": "Credits",
            "settings.about.table.name": "Name",
            "settings.about.table.version": "Version",
            "settings.about.table.rights": "Rights",
            "settings.about.table.license": "License",
            "settings.about.table.license.url": "License URL",
            "logoff": "Logoff",
            "disabled_text": "disabled"
        },
        "languages": {
            "en-US": {
                "name": "English"
            },
            "de-DE": {
                "name": "Deutsch"
            }
        }
    },
    "map_invoke": {
        "0": {
            "-1": {
                "TEMPERATURE4": [
                    {
                        "databaseId": 55,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 64,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    }
                ],
                "HUMIDITY4": [
                    {
                        "databaseId": 55,
                        "control": 1,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 65,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    }
                ],
                "CITY": [
                    {
                        "databaseId": 55,
                        "control": 2,
                        "input": 0,
                        "roles": []
                    }
                ],
                "CLOUD_COVERAGE": [
                    {
                        "databaseId": 55,
                        "control": 3,
                        "input": 0,
                        "roles": []
                    }
                ],
                "LAST_DATA": [
                    {
                        "databaseId": 55,
                        "control": 4,
                        "input": 0,
                        "roles": []
                    }
                ],
                "PRESSURE": [
                    {
                        "databaseId": 55,
                        "control": 5,
                        "input": 0,
                        "roles": []
                    }
                ],
                "RAIN_3H": [
                    {
                        "databaseId": 55,
                        "control": 6,
                        "input": 0,
                        "roles": []
                    }
                ],
                "SNOW_3H": [
                    {
                        "databaseId": 55,
                        "control": 7,
                        "input": 0,
                        "roles": []
                    }
                ],
                "SUNRISE": [
                    {
                        "databaseId": 55,
                        "control": 8,
                        "input": 0,
                        "roles": []
                    }
                ],
                "SUNSET": [
                    {
                        "databaseId": 55,
                        "control": 9,
                        "input": 0,
                        "roles": []
                    }
                ],
                "WEATHER": [
                    {
                        "databaseId": 55,
                        "control": 10,
                        "input": 0,
                        "roles": []
                    }
                ],
                "WIND_DIRECTION": [
                    {
                        "databaseId": 55,
                        "control": 11,
                        "input": 0,
                        "roles": []
                    }
                ],
                "WIND_GUST": [
                    {
                        "databaseId": 55,
                        "control": 12,
                        "input": 0,
                        "roles": []
                    }
                ],
                "WIND_SPEED": [
                    {
                        "databaseId": 55,
                        "control": 13,
                        "input": 0,
                        "roles": []
                    }
                ],
                "REQUEST": [
                    {
                        "databaseId": 55,
                        "control": 14,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 55,
                        "control": 14,
                        "input": 0,
                        "roles": []
                    }
                ],
                "LIGHT": [
                    {
                        "databaseId": 1,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 1,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    }
                ],
                "VENTILATION": [
                    {
                        "databaseId": 20,
                        "control": 5,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 20,
                        "control": 5,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 26,
                        "control": 2,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 26,
                        "control": 2,
                        "input": 0,
                        "roles": []
                    }
                ],
                "WINDALARM": [
                    {
                        "databaseId": 20,
                        "control": 6,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 20,
                        "control": 6,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 26,
                        "control": 3,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 26,
                        "control": 3,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 27,
                        "control": 2,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 27,
                        "control": 2,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 30,
                        "control": 2,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 30,
                        "control": 2,
                        "input": 0,
                        "roles": []
                    }
                ],
                "RAINALARM": [
                    {
                        "databaseId": 23,
                        "control": 1,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 23,
                        "control": 1,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 25,
                        "control": 2,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 25,
                        "control": 2,
                        "input": 0,
                        "roles": []
                    }
                ],
                "WINDOWALARM": [
                    {
                        "databaseId": 33,
                        "control": 3,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 33,
                        "control": 3,
                        "input": 0,
                        "roles": []
                    }
                ],
                "COLOR": [
                    {
                        "databaseId": 54,
                        "control": 3,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 54,
                        "control": 3,
                        "input": 0,
                        "roles": []
                    }
                ],
                "TEMPERATURE": [
                    {
                        "databaseId": 56,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    }
                ],
                "HUMIDITY": [
                    {
                        "databaseId": 57,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    }
                ],
                "TEMPERATURE1": [
                    {
                        "databaseId": 58,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    }
                ],
                "HUMIDITY1": [
                    {
                        "databaseId": 59,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    }
                ],
                "TEMPERATURE2": [
                    {
                        "databaseId": 60,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    }
                ],
                "HUMIDITY2": [
                    {
                        "databaseId": 61,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    }
                ],
                "TEMPERATURE3": [
                    {
                        "databaseId": 62,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    }
                ],
                "HUMIDITY3": [
                    {
                        "databaseId": 63,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    }
                ]
            }
        },
        "4": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 5,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    },
                    {
                        "databaseId": 5,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    }
                ]
            }
        },
        "1": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 2,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    },
                    {
                        "databaseId": 2,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    }
                ]
            }
        },
        "2": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 3,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    },
                    {
                        "databaseId": 3,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    }
                ]
            }
        },
        "3": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 4,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    },
                    {
                        "databaseId": 4,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    }
                ]
            }
        },
        "5": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 6,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    },
                    {
                        "databaseId": 6,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    }
                ]
            }
        },
        "6": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 7,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    },
                    {
                        "databaseId": 7,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    }
                ]
            }
        },
        "7": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 8,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    },
                    {
                        "databaseId": 8,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    }
                ]
            }
        },
        "8": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 9,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    },
                    {
                        "databaseId": 9,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    }
                ]
            }
        },
        "9": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 10,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 400001
                            }
                        ]
                    },
                    {
                        "databaseId": 10,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 400001
                            }
                        ]
                    }
                ]
            }
        },
        "10": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 11,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    },
                    {
                        "databaseId": 11,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    }
                ]
            }
        },
        "11": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 12,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    },
                    {
                        "databaseId": 12,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    }
                ]
            }
        },
        "12": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 13,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 400001
                            }
                        ]
                    },
                    {
                        "databaseId": 13,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 400001
                            }
                        ]
                    }
                ]
            }
        },
        "13": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 14,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    },
                    {
                        "databaseId": 14,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    }
                ]
            }
        },
        "14": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 15,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    },
                    {
                        "databaseId": 15,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    }
                ]
            }
        },
        "15": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 16,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    },
                    {
                        "databaseId": 16,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    }
                ]
            }
        },
        "16": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 17,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 400001
                            }
                        ]
                    },
                    {
                        "databaseId": 17,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 400001
                            }
                        ]
                    }
                ]
            }
        },
        "84": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 18,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    },
                    {
                        "databaseId": 18,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    }
                ]
            }
        },
        "91": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 19,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 400001
                            }
                        ]
                    },
                    {
                        "databaseId": 19,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 400001
                            }
                        ]
                    }
                ]
            }
        },
        "18": {
            "1": {
                "UP": [
                    {
                        "databaseId": 20,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501001
                            }
                        ]
                    },
                    {
                        "databaseId": 20,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501001
                            }
                        ]
                    },
                    {
                        "databaseId": 20,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501001
                            }
                        ]
                    },
                    {
                        "databaseId": 20,
                        "control": 1,
                        "input": 3,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501001
                            }
                        ]
                    },
                    {
                        "databaseId": 20,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501001
                            }
                        ]
                    },
                    {
                        "databaseId": 20,
                        "control": 2,
                        "input": 1,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501001
                            }
                        ]
                    }
                ],
                "STOP": [
                    {
                        "databaseId": 20,
                        "control": 0,
                        "input": 1,
                        "roles": []
                    },
                    {
                        "databaseId": 20,
                        "control": 0,
                        "input": 2,
                        "roles": []
                    },
                    {
                        "databaseId": 20,
                        "control": 1,
                        "input": 1,
                        "roles": []
                    },
                    {
                        "databaseId": 20,
                        "control": 1,
                        "input": 3,
                        "roles": []
                    }
                ],
                "DOWN": [
                    {
                        "databaseId": 20,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501002
                            }
                        ]
                    },
                    {
                        "databaseId": 20,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501002
                            }
                        ]
                    },
                    {
                        "databaseId": 20,
                        "control": 1,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501002
                            }
                        ]
                    },
                    {
                        "databaseId": 20,
                        "control": 1,
                        "input": 3,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501002
                            }
                        ]
                    },
                    {
                        "databaseId": 20,
                        "control": 1,
                        "input": 3,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501002
                            }
                        ]
                    },
                    {
                        "databaseId": 20,
                        "control": 1,
                        "input": 3,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501002
                            }
                        ]
                    },
                    {
                        "databaseId": 20,
                        "control": 2,
                        "input": 1,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501002
                            }
                        ]
                    },
                    {
                        "databaseId": 20,
                        "control": 2,
                        "input": 1,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501002
                            }
                        ]
                    }
                ],
                "CURRENT_POSITION": [
                    {
                        "databaseId": 20,
                        "control": 3,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501004
                            }
                        ]
                    },
                    {
                        "databaseId": 20,
                        "control": 3,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501004
                            }
                        ]
                    },
                    {
                        "databaseId": 20,
                        "control": 4,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501004
                            }
                        ]
                    },
                    {
                        "databaseId": 20,
                        "control": 4,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501004
                            }
                        ]
                    }
                ]
            }
        },
        "19": {
            "1": {
                "MOVE": [
                    {
                        "databaseId": 21,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 21,
                        "control": 0,
                        "input": 2,
                        "roles": []
                    },
                    {
                        "databaseId": 21,
                        "control": 0,
                        "input": 2,
                        "roles": []
                    },
                    {
                        "databaseId": 21,
                        "control": 0,
                        "input": 2,
                        "roles": []
                    }
                ],
                "STEP": [
                    {
                        "databaseId": 21,
                        "control": 0,
                        "input": 1,
                        "roles": []
                    },
                    {
                        "databaseId": 21,
                        "control": 0,
                        "input": 2,
                        "roles": []
                    }
                ],
                "CURRENT_POSITION": [
                    {
                        "databaseId": 21,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501004
                            }
                        ]
                    },
                    {
                        "databaseId": 21,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501004
                            }
                        ]
                    },
                    {
                        "databaseId": 21,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501004
                            }
                        ]
                    },
                    {
                        "databaseId": 21,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501004
                            }
                        ]
                    }
                ]
            }
        },
        "17": {
            "1": {
                "UP": [
                    {
                        "databaseId": 22,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600001
                            }
                        ]
                    },
                    {
                        "databaseId": 22,
                        "control": 0,
                        "input": 1,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600001
                            }
                        ]
                    },
                    {
                        "databaseId": 23,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600001
                            }
                        ]
                    },
                    {
                        "databaseId": 23,
                        "control": 0,
                        "input": 1,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600001
                            }
                        ]
                    }
                ],
                "DOWN": [
                    {
                        "databaseId": 22,
                        "control": 0,
                        "input": 1,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600002
                            }
                        ]
                    },
                    {
                        "databaseId": 22,
                        "control": 0,
                        "input": 1,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600002
                            }
                        ]
                    },
                    {
                        "databaseId": 23,
                        "control": 0,
                        "input": 1,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600002
                            }
                        ]
                    },
                    {
                        "databaseId": 23,
                        "control": 0,
                        "input": 1,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600002
                            }
                        ]
                    }
                ]
            }
        },
        "20": {
            "1": {
                "UP": [
                    {
                        "databaseId": 24,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600001
                            }
                        ]
                    },
                    {
                        "databaseId": 24,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600001
                            }
                        ]
                    },
                    {
                        "databaseId": 25,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600001
                            }
                        ]
                    },
                    {
                        "databaseId": 25,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600001
                            }
                        ]
                    }
                ],
                "STOP": [
                    {
                        "databaseId": 24,
                        "control": 0,
                        "input": 1,
                        "roles": []
                    },
                    {
                        "databaseId": 24,
                        "control": 0,
                        "input": 2,
                        "roles": []
                    },
                    {
                        "databaseId": 25,
                        "control": 0,
                        "input": 1,
                        "roles": []
                    },
                    {
                        "databaseId": 25,
                        "control": 0,
                        "input": 2,
                        "roles": []
                    }
                ],
                "DOWN": [
                    {
                        "databaseId": 24,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600002
                            }
                        ]
                    },
                    {
                        "databaseId": 24,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600002
                            }
                        ]
                    },
                    {
                        "databaseId": 25,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600002
                            }
                        ]
                    },
                    {
                        "databaseId": 25,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600002
                            }
                        ]
                    }
                ],
                "CURRENT_POSITION": [
                    {
                        "databaseId": 24,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600004
                            }
                        ]
                    },
                    {
                        "databaseId": 24,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600004
                            }
                        ]
                    },
                    {
                        "databaseId": 25,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600004
                            }
                        ]
                    },
                    {
                        "databaseId": 25,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 600004
                            }
                        ]
                    }
                ]
            }
        },
        "21": {
            "1": {
                "UP": [
                    {
                        "databaseId": 26,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501001
                            }
                        ]
                    },
                    {
                        "databaseId": 26,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501001
                            }
                        ]
                    }
                ],
                "STOP": [
                    {
                        "databaseId": 26,
                        "control": 0,
                        "input": 1,
                        "roles": []
                    },
                    {
                        "databaseId": 26,
                        "control": 0,
                        "input": 2,
                        "roles": []
                    }
                ],
                "DOWN": [
                    {
                        "databaseId": 26,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501002
                            }
                        ]
                    },
                    {
                        "databaseId": 26,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501002
                            }
                        ]
                    }
                ],
                "CURRENT_POSITION": [
                    {
                        "databaseId": 26,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501004
                            }
                        ]
                    },
                    {
                        "databaseId": 26,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501004
                            }
                        ]
                    }
                ]
            }
        },
        "22": {
            "1": {
                "UP": [
                    {
                        "databaseId": 27,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501001
                            }
                        ]
                    },
                    {
                        "databaseId": 27,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501001
                            }
                        ]
                    }
                ],
                "STOP": [
                    {
                        "databaseId": 27,
                        "control": 0,
                        "input": 1,
                        "roles": []
                    },
                    {
                        "databaseId": 27,
                        "control": 0,
                        "input": 2,
                        "roles": []
                    }
                ],
                "DOWN": [
                    {
                        "databaseId": 27,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501002
                            }
                        ]
                    },
                    {
                        "databaseId": 27,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501002
                            }
                        ]
                    }
                ],
                "CURRENT_POSITION": [
                    {
                        "databaseId": 27,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501004
                            }
                        ]
                    },
                    {
                        "databaseId": 27,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501004
                            }
                        ]
                    }
                ]
            }
        },
        "23": {
            "1": {
                "UP": [
                    {
                        "databaseId": 28,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501001
                            }
                        ]
                    },
                    {
                        "databaseId": 28,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501001
                            }
                        ]
                    }
                ],
                "STOP": [
                    {
                        "databaseId": 28,
                        "control": 0,
                        "input": 1,
                        "roles": []
                    },
                    {
                        "databaseId": 28,
                        "control": 0,
                        "input": 2,
                        "roles": []
                    }
                ],
                "DOWN": [
                    {
                        "databaseId": 28,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501002
                            }
                        ]
                    },
                    {
                        "databaseId": 28,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501002
                            }
                        ]
                    }
                ],
                "CURRENT_POSITION": [
                    {
                        "databaseId": 28,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501004
                            }
                        ]
                    },
                    {
                        "databaseId": 28,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501004
                            }
                        ]
                    }
                ]
            }
        },
        "24": {
            "1": {
                "UP": [
                    {
                        "databaseId": 29,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501001
                            }
                        ]
                    },
                    {
                        "databaseId": 29,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501001
                            }
                        ]
                    }
                ],
                "STOP": [
                    {
                        "databaseId": 29,
                        "control": 0,
                        "input": 1,
                        "roles": []
                    },
                    {
                        "databaseId": 29,
                        "control": 0,
                        "input": 2,
                        "roles": []
                    }
                ],
                "DOWN": [
                    {
                        "databaseId": 29,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501002
                            }
                        ]
                    },
                    {
                        "databaseId": 29,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501002
                            }
                        ]
                    }
                ],
                "CURRENT_POSITION": [
                    {
                        "databaseId": 29,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501004
                            }
                        ]
                    },
                    {
                        "databaseId": 29,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 501004
                            }
                        ]
                    }
                ]
            }
        },
        "25": {
            "1": {
                "UP": [
                    {
                        "databaseId": 30,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502001
                            }
                        ]
                    },
                    {
                        "databaseId": 30,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502001
                            }
                        ]
                    }
                ],
                "STOP": [
                    {
                        "databaseId": 30,
                        "control": 0,
                        "input": 1,
                        "roles": []
                    },
                    {
                        "databaseId": 30,
                        "control": 0,
                        "input": 2,
                        "roles": []
                    }
                ],
                "DOWN": [
                    {
                        "databaseId": 30,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502002
                            }
                        ]
                    },
                    {
                        "databaseId": 30,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502002
                            }
                        ]
                    }
                ],
                "CURRENT_POSITION": [
                    {
                        "databaseId": 30,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502004
                            }
                        ]
                    },
                    {
                        "databaseId": 30,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502004
                            }
                        ]
                    }
                ]
            }
        },
        "26": {
            "1": {
                "UP": [
                    {
                        "databaseId": 31,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502001
                            }
                        ]
                    },
                    {
                        "databaseId": 31,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502001
                            }
                        ]
                    }
                ],
                "STOP": [
                    {
                        "databaseId": 31,
                        "control": 0,
                        "input": 1,
                        "roles": []
                    },
                    {
                        "databaseId": 31,
                        "control": 0,
                        "input": 2,
                        "roles": []
                    }
                ],
                "DOWN": [
                    {
                        "databaseId": 31,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502002
                            }
                        ]
                    },
                    {
                        "databaseId": 31,
                        "control": 0,
                        "input": 2,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502002
                            }
                        ]
                    }
                ],
                "CURRENT_POSITION": [
                    {
                        "databaseId": 31,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502004
                            }
                        ]
                    },
                    {
                        "databaseId": 31,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 502004
                            }
                        ]
                    }
                ]
            }
        },
        "78": {
            "1": {
                "TEMPERATURE": [
                    {
                        "databaseId": 32,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201001
                            }
                        ]
                    }
                ],
                "SETPOINT_TEMPERATURE": [
                    {
                        "databaseId": 32,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201002
                            }
                        ]
                    },
                    {
                        "databaseId": 32,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201002
                            }
                        ]
                    }
                ],
                "CONTROL_MODE": [
                    {
                        "databaseId": 32,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201003
                            },
                            {
                                "direction": 2,
                                "id": 201000
                            }
                        ]
                    },
                    {
                        "databaseId": 32,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201003
                            },
                            {
                                "direction": 2,
                                "id": 201000
                            }
                        ]
                    }
                ]
            }
        },
        "60": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 32,
                        "control": 3,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 301002
                            }
                        ]
                    },
                    {
                        "databaseId": 32,
                        "control": 3,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 301002
                            }
                        ]
                    },
                    {
                        "databaseId": 39,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 301002
                            }
                        ]
                    },
                    {
                        "databaseId": 39,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 301002
                            }
                        ]
                    }
                ]
            }
        },
        "79": {
            "1": {
                "TEMPERATURE": [
                    {
                        "databaseId": 33,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201001
                            }
                        ]
                    }
                ],
                "SETPOINT_TEMPERATURE": [
                    {
                        "databaseId": 33,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201002
                            }
                        ]
                    },
                    {
                        "databaseId": 33,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201002
                            }
                        ]
                    }
                ],
                "CONTROL_MODE": [
                    {
                        "databaseId": 33,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201003
                            },
                            {
                                "direction": 2,
                                "id": 201000
                            }
                        ]
                    },
                    {
                        "databaseId": 33,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201003
                            },
                            {
                                "direction": 2,
                                "id": 201000
                            }
                        ]
                    }
                ]
            }
        },
        "80": {
            "1": {
                "TEMPERATURE": [
                    {
                        "databaseId": 34,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201001
                            }
                        ]
                    }
                ],
                "SETPOINT_TEMPERATURE": [
                    {
                        "databaseId": 34,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201002
                            }
                        ]
                    },
                    {
                        "databaseId": 34,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201002
                            }
                        ]
                    }
                ],
                "CONTROL_MODE": [
                    {
                        "databaseId": 34,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201003
                            },
                            {
                                "direction": 2,
                                "id": 201000
                            }
                        ]
                    },
                    {
                        "databaseId": 34,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201003
                            },
                            {
                                "direction": 2,
                                "id": 201000
                            }
                        ]
                    }
                ]
            }
        },
        "81": {
            "1": {
                "TEMPERATURE": [
                    {
                        "databaseId": 35,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201001
                            }
                        ]
                    }
                ],
                "SETPOINT_TEMPERATURE": [
                    {
                        "databaseId": 35,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201002
                            }
                        ]
                    },
                    {
                        "databaseId": 35,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201002
                            }
                        ]
                    }
                ],
                "CONTROL_MODE": [
                    {
                        "databaseId": 35,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201003
                            },
                            {
                                "direction": 2,
                                "id": 201000
                            }
                        ]
                    },
                    {
                        "databaseId": 35,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201003
                            },
                            {
                                "direction": 2,
                                "id": 201000
                            }
                        ]
                    }
                ]
            }
        },
        "82": {
            "1": {
                "TEMPERATURE": [
                    {
                        "databaseId": 36,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201001
                            }
                        ]
                    }
                ],
                "SETPOINT_TEMPERATURE": [
                    {
                        "databaseId": 36,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201002
                            }
                        ]
                    },
                    {
                        "databaseId": 36,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201002
                            }
                        ]
                    }
                ],
                "CONTROL_MODE": [
                    {
                        "databaseId": 36,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201003
                            },
                            {
                                "direction": 2,
                                "id": 201000
                            }
                        ]
                    },
                    {
                        "databaseId": 36,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201003
                            },
                            {
                                "direction": 2,
                                "id": 201000
                            }
                        ]
                    }
                ]
            }
        },
        "87": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 36,
                        "control": 3,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 301002
                            }
                        ]
                    },
                    {
                        "databaseId": 36,
                        "control": 3,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 301002
                            }
                        ]
                    },
                    {
                        "databaseId": 38,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 301002
                            }
                        ]
                    },
                    {
                        "databaseId": 38,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 301002
                            }
                        ]
                    }
                ]
            }
        },
        "83": {
            "1": {
                "TEMPERATURE": [
                    {
                        "databaseId": 37,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201001
                            }
                        ]
                    }
                ],
                "SETPOINT_TEMPERATURE": [
                    {
                        "databaseId": 37,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201002
                            }
                        ]
                    },
                    {
                        "databaseId": 37,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201002
                            }
                        ]
                    }
                ],
                "CONTROL_MODE": [
                    {
                        "databaseId": 37,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201003
                            },
                            {
                                "direction": 2,
                                "id": 201000
                            }
                        ]
                    },
                    {
                        "databaseId": 37,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 201003
                            },
                            {
                                "direction": 2,
                                "id": 201000
                            }
                        ]
                    }
                ]
            }
        },
        "61": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 40,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 301002
                            }
                        ]
                    },
                    {
                        "databaseId": 40,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 301002
                            }
                        ]
                    }
                ]
            }
        },
        "62": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 41,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 301002
                            }
                        ]
                    },
                    {
                        "databaseId": 41,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 301002
                            }
                        ]
                    }
                ]
            }
        },
        "63": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 42,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 301002
                            }
                        ]
                    },
                    {
                        "databaseId": 42,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 301002
                            }
                        ]
                    }
                ]
            }
        },
        "64": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 43,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 301002
                            }
                        ]
                    },
                    {
                        "databaseId": 43,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 301002
                            }
                        ]
                    }
                ]
            }
        },
        "65": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 44,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 301002
                            }
                        ]
                    },
                    {
                        "databaseId": 44,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 301002
                            }
                        ]
                    }
                ]
            }
        },
        "66": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 45,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 301002
                            }
                        ]
                    },
                    {
                        "databaseId": 45,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 301002
                            }
                        ]
                    }
                ]
            }
        },
        "67": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 46,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 301002
                            }
                        ]
                    },
                    {
                        "databaseId": 46,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 301002
                            }
                        ]
                    }
                ]
            }
        },
        "70": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 47,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 301002
                            }
                        ]
                    },
                    {
                        "databaseId": 47,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 301002
                            }
                        ]
                    }
                ]
            }
        },
        "69": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 48,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 301001
                            }
                        ]
                    },
                    {
                        "databaseId": 48,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 301001
                            }
                        ]
                    },
                    {
                        "databaseId": 49,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 301001
                            }
                        ]
                    },
                    {
                        "databaseId": 49,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 301001
                            }
                        ]
                    },
                    {
                        "databaseId": 50,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 301001
                            }
                        ]
                    },
                    {
                        "databaseId": 50,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 301001
                            }
                        ]
                    }
                ]
            }
        },
        "86": {
            "1": {
                "LEVEL": [
                    {
                        "databaseId": 51,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    },
                    {
                        "databaseId": 51,
                        "control": 0,
                        "input": 0,
                        "roles": []
                    }
                ]
            }
        },
        "92": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 52,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 0,
                                "id": 100001
                            }
                        ]
                    },
                    {
                        "databaseId": 52,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 0,
                                "id": 100001
                            }
                        ]
                    }
                ],
                "LEVEL_FAST": [
                    {
                        "databaseId": 52,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 0,
                                "id": 101000
                            }
                        ]
                    },
                    {
                        "databaseId": 52,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 0,
                                "id": 101000
                            }
                        ]
                    }
                ]
            }
        },
        "93": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 53,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    },
                    {
                        "databaseId": 53,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    },
                    {
                        "databaseId": 53,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    },
                    {
                        "databaseId": 53,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    }
                ],
                "LEVEL_FAST": [
                    {
                        "databaseId": 53,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 101000
                            }
                        ]
                    },
                    {
                        "databaseId": 53,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 101000
                            }
                        ]
                    }
                ]
            }
        },
        "94": {
            "1": {
                "STATE": [
                    {
                        "databaseId": 54,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    },
                    {
                        "databaseId": 54,
                        "control": 0,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    },
                    {
                        "databaseId": 54,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    },
                    {
                        "databaseId": 54,
                        "control": 1,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 100001
                            }
                        ]
                    }
                ],
                "LEVEL_FAST": [
                    {
                        "databaseId": 54,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 101000
                            }
                        ]
                    },
                    {
                        "databaseId": 54,
                        "control": 2,
                        "input": 0,
                        "roles": [
                            {
                                "direction": 2,
                                "id": 101000
                            }
                        ]
                    }
                ]
            }
        }
    }
}
';
