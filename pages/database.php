<?php

$server = 'localhost:3307';
$username = 'root';
$password = 'root';
$database = 'consulta_virtual';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: PITOOO ' . $e->getMessage());
}

?>