<?php


require 'vendor/autoload.php';
Flight::set('flight.log_errors', true);


// Flight::set('config', Config::loadDir('config/', true));



Flight::start();
