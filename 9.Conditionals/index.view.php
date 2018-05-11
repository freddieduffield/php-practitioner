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


<!-- Ternary  -->
        <li>
          <strong>Status: </strong> <?= $task['completed'] ? 'complete' : 'Incomplete' ?>
        </li>

<!-- if statement -->
        <li>
          <strong>Status: </strong>
            <?php
              if ($task['Completed']) {
                echo '&#9989';
              } else {
                echo "Finished";
              }
             ?>
        </li>

<!-- Short hand  -->
         <li>
          <strong>Status: </strong>
            <?php if ($task['completed']) : ?>

              <span class="icon">&#9989;</span>

            <?php else : ?>

              <span class="icon">Incomplete</span>

            <?php endif; ?>
        </li>


<!-- not true  -->
        <li>
          <strong>Status: </strong>
            <?php
                if(! true) {
                    echo 'Incomplete';
                }

             ?>
        </li>
<!-- Homework -->
        <?php if ($task['boring']) : ?>
          <img src="http://fillmurray.com/500/500" alt="">
        <?php else : ?>
          <span class="icon">&#10071;</span>
        <?php endif;  ?>
    </ul>
  </body>
</html>
