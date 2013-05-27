<?php

// This makes our life easier when dealing with paths. Everything is relative to the application root now
chdir(dirname(__DIR__));

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_RECOVERABLE_ERROR);

// Composer autoloading
if (file_exists('vendor/autoload.php')) {
    $loader = include 'vendor/autoload.php';
}

// Run the application
Zend\Mvc\Application::init(include 'config/application.config.php')->run();
