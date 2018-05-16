<?php

App::bind('config', require 'Config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));
