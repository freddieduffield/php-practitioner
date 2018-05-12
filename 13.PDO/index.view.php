<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Classes</title>
  </head>
  <body>

      <ul>
    <?php foreach ($tasks as $task): ?>
        <li>
            <?php if ($task->completed): ?>
                <strike><?=$task->description;?></strike>
            <?php else: ?>
                <?=$task->description;?>
            <?php endif;?>

        </li>
    <?php endforeach;?>
</ul>



  </body>
</html>
