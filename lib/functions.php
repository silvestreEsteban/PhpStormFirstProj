<?php

function get_cars() {
    $config = require 'conn.php';
    $pdo = new PDO(
        $config['database_dsn'],
        $config['username'],
        $config['password']
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = 'SELECT * FROM car';
    $statement = $pdo->prepare($query);
    $statement->execute();
    $cars = $statement->fetchAll();
    return $cars;
}

function save_cars($cars) {
    $config = require 'conn.php';
    $pdo = new PDO(
        $config['database_dsn'],
        $config['username'],
        $config['password']
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = 'INSERT INTO car (make, model, year, estimated_cost, color) VALUES (?, ?, ?, ?, ?)';

}