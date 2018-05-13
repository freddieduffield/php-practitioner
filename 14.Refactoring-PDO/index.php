<?php

// Require the bootstrap file that holds our db query
$query = require 'bootstrap.php';

// selects all from the todos tables
$tasks = $query->selectAll('todos');

require 'index.view.php';
