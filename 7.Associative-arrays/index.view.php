<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Associative Arrays</title>
  </head>
  <body>
    <ul>
      <?php foreach ($person as $feature => $value) : ?>
       <li><strong><?= $value ?>:</strong> <?= $feature ?></li>
     <?php endforeach; ?>
    </ul>

    <ul>
      <?php foreach ($task as $info => $details) : ?>
          <li>
            <strong><?= $info; ?></strong>
            <h3><?= $details; ?></h3>
          </li>
      <?php endforeach ?>
    </ul>

  </body>
</html>
