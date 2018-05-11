<?php


try {

  $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');


} catch (PDOException $e) {

  die('could not connect');
}

$pdo->prepare('select * from todos');

$statement->execute();

var_dump($statement->fetchAll());

require 'index.view.php';
