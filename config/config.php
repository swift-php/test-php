<?php

use Swift\Framework\Swoole\Server\ServerType;
return [
    'app' => [
        'key1' => [
            'key2' => [
                'key3' => 'value3'
            ]
        ],
        'key4' => 'value4',
        'key5' => [
            [
                'key6' => 'value6'
            ]
        ]
    ],
    'swoole' => [
        'servers' => [
            [
                'type' => ServerType::COROUTINE_HTTP_SERVER,
                'host' => '0.0.0.0',
                'port' => 3508,
                'options' => [
                    'package_max_length' => 50 * 1024 * 1024
                ]
            ]
        ],
        'worker' => [
            'num' => 1
        ]
    ],
];
