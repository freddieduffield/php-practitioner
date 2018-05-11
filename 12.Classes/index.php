<?php
require 'functions.php';

class Task {

  public $description;

  protected $completed = false;

   public function __construct($description)
   {

      $this->description = $description;

   }

   public function complete()
   {
      $this->completed = true;
   }

   public function isComplete()
   {
       return $this->completed;
   }
}

// $task = new task ('Go to the store'); //new task object
//
// $task->complete(); // complete the task
//var_dump($task->isComplete());

$tasks = [
    new Task('Go to Store'),
    new Task('Finish lesson'),
    new Task('Do some work')
  ];

// dd($tasks);
$tasks[0]->complete();
require 'index.view.php';
