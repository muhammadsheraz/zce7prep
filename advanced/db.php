<?php

$dsn = 'mysql:host=localhost;dbname=zce';
$user= 'root';
$pass='';

$pdo = new PDO($dsn, $user, $pass);

$cmd = "SELECT name, email FROM users LIMIT 1";
$stmt = $pdo->prepare($cmd);
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_OBJ);
$row = $result[0];

echo "<pre>";
print_r($row);
