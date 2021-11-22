<?php

session_start();
include_once __DIR__ . '/vendor/autoload.php';

$config = include __DIR__ . '/config.php';
echo (new Rune\Manager($config))->run();