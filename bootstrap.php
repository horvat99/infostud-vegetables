<?php

require __DIR__.'/vendor/autoload.php';

define('VIEW', __DIR__ .DIRECTORY_SEPARATOR. 'lib' . DIRECTORY_SEPARATOR . 'View' . DIRECTORY_SEPARATOR);
define('CONTROLLER', __DIR__ .DIRECTORY_SEPARATOR. 'lib' . DIRECTORY_SEPARATOR . 'Controller' . DIRECTORY_SEPARATOR);
define('PICTURES', __DIR__ . DIRECTORY_SEPARATOR. 'pictures' . DIRECTORY_SEPARATOR);

$configurationForDb = array(
    'db_dsn' => 'mysql:host=localhost;dbname=Vegetables',
    'db_user' => 'root',
    'db_pass' => '6060',
);