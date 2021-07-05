<?php

return [

    /*
     * The config_key for voyager-dashboard package.
     */
    'config_key' => env('VOYAGER_DASHBOARD_CONFIG_KEY', 'joy-voyager-dashboard'),

    /*
     * The route_prefix for voyager-dashboard package.
     */
    'route_prefix' => env('VOYAGER_DASHBOARD_ROUTE_PREFIX', 'joy-voyager-dashboard'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerDashboard\\Http\\Controllers',
    ],
];
