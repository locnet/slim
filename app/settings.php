<?php

return [
    'settings' => [
        // environment
        'environment' => 'development',

        // Slim Settings
        'determineRouteBeforeAppMiddleware' => false,
        'displayErrorDetails' => true,

        
        // monolog settings
        'logger' => [
            'name' => 'Blueair',
            'path' => __DIR__ . '/../log/app.log',
        ],

        // blueair api access
        'navitaire' => [
            'DomainCode'  => 'EXT',
			'AgentName'   => 'locnetapi',
			'Password'    => 'locnetapi-01'
		],
    ],
];