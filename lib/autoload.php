<?php

require_once LIB_PATH . DIRECTORY_SEPARATOR . 'Autoload' . DIRECTORY_SEPARATOR . 'UniversalClassLoader.php';
require_once LIB_PATH . DIRECTORY_SEPARATOR . 'Autoload' . DIRECTORY_SEPARATOR . 'FreshrssClassLoader.php';

$freshrssClassLoader = new FreshrssClassLoader();
$freshrssClassLoader->registerPath([
	APP_PATH,
	APP_PATH . DIRECTORY_SEPARATOR . 'Controllers',
	APP_PATH . DIRECTORY_SEPARATOR . 'Exceptions',
	APP_PATH . DIRECTORY_SEPARATOR . 'Mailers',
	APP_PATH . DIRECTORY_SEPARATOR . 'Models',
	APP_PATH . DIRECTORY_SEPARATOR . 'Services',
	APP_PATH . DIRECTORY_SEPARATOR . 'Utils',
]);
$freshrssClassLoader->register();

$universalClassLoader = new UniversalClassLoader();
$universalClassLoader->registerPath([
	LIB_PATH,
	LIB_PATH . DIRECTORY_SEPARATOR . 'SimplePie',
]);
$universalClassLoader->register();
