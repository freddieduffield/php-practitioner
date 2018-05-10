<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Conditionals</title>
  </head>
  <body>
    <ul>
         <li>
          <strong>Name: </strong> <?= $task['title']; ?>
        </li>

        <li>
          <strong>Due Date: </strong> <?= $task['due']; ?>
        </li>

        <li>
          <strong>Person Responsible: </strong> <?= $task['assigned_to']; ?>
        </li>

        <!-- <li>
          <strong>Status: </strong> <?= $task['completed'] ? 'complete' : 'Incomplete' ?>
        </li> -->

        <li>
          <strong>Status: </strong> <?= $task['completed'] ? 'complete' : 'Incomplete' ?>
        </li>

    </ul>
  </body>
</html>
