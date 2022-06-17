<?php

require('vendor/autoload.php');

$f3 = \Base::instance();
$f3->config('configuration/config.ini');
$f3->config('configuration/routes.ini');



$f3->run();