<?php

class Task
{

  public $title;
  public $description;
  public $assigned;
  public $completed;

  function __construct($title, $description, $assigned, $completed)
  {
    $this->title = $title;
    $this->description = $description;
    $this->assigned = $assigned;
    $this->completed = $completed;
  }
}


$tasks = [
  new Task('work', 'do some', 'FD', true ),
  new Task('work', 'do some', 'FD', true ),
  new Task('work', 'do some', 'RM', true ),
  new Task('work', 'do some', 'RF', false )
];



// $completedTasks = array_filter($tasks, function($task){
//     return ! $task->completed;
// });
//
// var_dump($completedTasks);


// $arrayOfPeopleWithTasks = array_map(function($task){
//     return ['assigned' => $task->assigned];
// }, $tasks);
//
// var_dump($arrayOfPeopleWithTasks);

// $desc = array_column($tasks, 'description');
//
// var_dump($desc);
