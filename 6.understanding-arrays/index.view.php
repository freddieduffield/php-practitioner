<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP document</title>

  </head>
  <body>
    <ul>
      <!-- <?php
         foreach ($names as $name ) {
            echo "<li>$name</li>";
         }
       ?> -->

       <?php foreach ($names as $name) : ?>
         <li><?= $name; ?></li>

      <?php endforeach ?>
    </ul>


    <ul>
      <?php foreach ($animals as $animal) : ?>
          <li><?= $animal; ?></li>
      <?php endforeach ?>
    </ul>

    <ul>
      <?php
          foreach ($animals as $animal) {
            echo "<li>$animal</li>";
          }
       ?>
    </ul>

  </body>
</html>
