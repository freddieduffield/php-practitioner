<?php

require 'vendor/autoload.php';
$query = require 'core/bootstrap.php';

require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());
