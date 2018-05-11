<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Booleans</title>
  </head>
  <body>
    <ul>
        <li>
          <strong>Name: </strong><?= $task['title'];  ?>
        </li>

        <li>
          <strong>Due Date: </strong><?= $task['due'];  ?>
        </li>

        <li>
          <strong>person responsible</strong><?= $task['assigned_to'];  ?>
        </li>

        <li>
          <strong>Status: </strong><?= $task['completed'] ? 'Complete' : 'Incomplete';  ?>
        </li>
    </ul>
  </body>
</html>
