<?php

require __DIR__ . '/../vendor/autoload.php';

Tester\Environment::setup();

date_default_timezone_set('Europe/Prague');
define('TmpDir', '/temp/app-tests');