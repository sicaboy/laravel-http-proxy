<?php
return [
    'protocol' => env('HTTP_PROXY_PROTOCOL', 'http'),
    'host' => env('HTTP_PROXY_HOST', '127.0.0.1'),
    'port' => env('HTTP_PROXY_PORT', '5010'),
    'options' => [
        'cache' => [
            'enabled' => env('HTTP_PROXY_CACHE_ENABLED', false),
            'key' => env('HTTP_PROXY_CACHE_KEY', 'laravel-http-proxy'),
            'ttl' => env('HTTP_PROXY_CACHE_TTL', 300),
        ]
    ]
];