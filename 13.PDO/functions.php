<?php

function fetchAllTasks($pdo)
{

    $statement = $pdo->prepare('select * from todos');

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

}

function dd($data)
{

    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';

}
