<?php
require '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'../../');
$dotenv->load();

define('APP_NAME', $_ENV['APP_NAME']);


// // database 
define('MYSQL_HOST',        $_ENV['MYSQL_HOST']);
define('MYSQL_DATABASE',    $_ENV['MYSQL_DATABASE']);
define('MYSQL_USERNAME',    $_ENV['MYSQL_USERNAME']);
define('MYSQL_PASSWORD',   $_ENV['MYSQL_PASSWORD']);

define('MYSQL_AES_KEY',     $_ENV['MYSQL_AES_KEY']);

define('LOG_PATH', __DIR__.'/../logs/app.log');