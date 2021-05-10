<?php
return [
    'logger' => [
        'log' => true,
        'priority' => \Laminas\Log\Logger::NOTICE,
    ],
    'http_client' => [
        'adapter'    => \Laminas\Http\Client\Adapter\Curl::class,
        'proxy_host' => 'squidproxy-01.lsait.lsa.umich.edu',
        'proxy_port' => 3128,
        'timeout' => 300, # sets cURL connection and execution timeouts
    ],
    'cli' => [
        'phpcli_path' => "/usr/bin/php",
    ],
    'thumbnails' => [
        'types' => [
            'large' => ['constraint' => 800],
            'medium' => ['constraint' => 200],
            'square' => ['constraint' => 200],
        ],
        'thumbnailer_options' => [
            'imagemagick_dir' => null,
        ],
    ],
    'translator' => [
        'locale' => 'en_US',
    ],
    'service_manager' => [
        'aliases' => [
            'Omeka\File\Store' => 'Omeka\File\Store\Local',
            'Omeka\File\Thumbnailer' => 'Omeka\File\Thumbnailer\Gd',
        ],
    ],
    'mail' => [
        'transport' => [
            'type' => 'smtp',
            'options' => [
                'name' => 'relay.mail.umich.edu',
                'host' => 'relay.mail.umich.edu',
                'port' => 25, 
            ],
         ],
    ]
];
