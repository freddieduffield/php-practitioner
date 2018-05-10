<?php

$task = [
  'title' => 'annotated snags',
  'due' => 'today',
  'assigned_to' => 'Fred',
  'Completed' => true
];

$task['boring'] = true;

var_dump($task);

$task['boring'] = false;

require 'index.view.php';
