<?php

class Connection
{
    public static function make($config)
    {
        try {

            return new PDO(
                $config['connection'] . ';dbname=' . $config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
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
