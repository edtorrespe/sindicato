<?php

require_once __DIR__ . '/vendor/autoload.php';

// $dotenv = Dotenv\Dotenv::create(__DIR__);
// $dotenv->load();

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$variablexD = getenv("APP_AA");

var_dump($variablexD);
