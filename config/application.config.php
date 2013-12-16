<?php
return [
    'modules' => [
        'Application',
    ],

    'module_listener_options' => [
        'module_paths' => [
            './module',
            './vendor',
        ],

        'config_glob_paths' => [
            'config/autoload/{,*.}{global,local}.php',
        ],

        /**
         * Can be disabled in production
         */
        'check_dependencies' => true,

        /**
         * Configure cache
         */
        //'config_cache_enabled' => true,
        //'config_cache_key' => 'config_cache',
        //'module_map_cache_enabled' => true,
        //'module_map_cache_key' => 'module_map_cache',
        //'cache_dir' => __DIR__ . '/../data/cache',
    ],
];
