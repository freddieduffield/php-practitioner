<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP document</title>
    <style>
      header {
        background: skyblue;
        padding: 2em;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <header>
    <!-- <h1><?php

    $name = $_GET['name'];
    $greeting = 'Hello';

    echo "{$greeting} {$name}";

     ?></h1> -->

    <h1>
      <!-- <?php echo "What the  " . $_GET['name']; ?> -->
      <?= "Ma kore " . htmlspecialchars($_GET['name']); ?>
    </h1>

    </header>

  </body>
</html>
