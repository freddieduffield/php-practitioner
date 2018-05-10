<?php


$person = [
  'age' => 31,
  'hair' => 'brown',
  'career' => 'Web Developer'
];

$person['name'] = 'fred';


// unset($person['age']);
// echo '<pre>';
 // var_dump($person);
// echo '</prev>';


// die();
// die(var_dump($person));

$task = [
  'title' => 'annotated snags',
  'due' => 'today',
  'assigned to' => 'Fred',
  'Completed' => false
];

require 'index.view.php';
