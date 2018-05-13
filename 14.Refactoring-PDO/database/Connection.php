<?php

class Connection
{
    public static function make()
    {
        try {
            return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}

// calling make() as just a public method
// $connection = new Connection();
// $connection->make();

//as a static method
// $pdo = Connection::make();
// a static method means you don't need to make an instance of a class
