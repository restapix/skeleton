<?php

/**
 * resta system composer vendor autoload.
 * For libraries that specify autoload information, Composer generates a vendor/autoload.php file.
 * You can simply include this file and start using the classes that those libraries provide without any extra work
 * system main skeleton
 * return autoload file
 */
require_once 'bootstrapper'.DIRECTORY_SEPARATOR.'ApplicationStart.php';

use Resta\Support\Utils;

$app=new Resta\Foundation\Application(Utils::isRequestConsole());
echo $app->handle();

