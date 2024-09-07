<?php

return [
    /*
    |------------------------------------------------------------------------
    | Default Browser
    |------------------------------------------------------------------------
    | This option will be used as the browser to be used when the Engine processing page.
    | When task that are not configured to use which browser will use this option.
     */
    'default'  => '',
    
    /*
    |--------------------------------------------------------------------------
    | Selenium
    |--------------------------------------------------------------------------
    |
    | Supported Drivers: "webdriver", "remote-webdriver"
    */
    'selenium' => [
        'chrome' => [
            'local'  => [
                'driver' => 'webdriver',
            ],
            'remote' => [
            
            ],
        ],
    ],
];