<?php

use ApplicationTest\Util\ServiceManagerFactory;

ini_set('error_reporting', E_ALL);

$files = [getcwd() . '/../../vendor/autoload.php', getcwd() . '/../../autoload.php'];

foreach ($files as $file) {
    if (file_exists($file)) {
        $loader = require $file;
        break;
    }
}

if (!isset($loader)) {
    throw new RuntimeException('vendor/autoload.php could not be found. Did you run `php composer.phar install`?');
}

/* @var $loader \Composer\Autoload\ClassLoader */
$loader->add('Application\\', __DIR__ . '/../src');
$loader->add('ApplicationTest\\', __DIR__);

if (file_exists(__DIR__ . '/TestConfiguration.php')) {
    $config = require __DIR__ . '/TestConfiguration.php';
} else {
    $config = require __DIR__ . '/TestConfiguration.php.dist';
}

ServiceManagerFactory::setConfig($config);
unset($files, $file, $loader, $config);
