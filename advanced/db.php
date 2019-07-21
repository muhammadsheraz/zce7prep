<?php
## Basics
//$dsn = 'mysql:host=localhost;dbname=zce';
//$user= 'root';
//$pass='';
//
//$pdo = new PDO($dsn, $user, $pass);
//
//$cmd = "SELECT name, email FROM users LIMIT 1";
//$stmt = $pdo->prepare($cmd);
//$stmt->execute();
//
//$result = $stmt->fetchAll(PDO::FETCH_OBJ);
//$row = $result[0];
//
//echo "<pre>";
//print_r($row);


//$dsn = 'mysql:host=localhost;dbname=zce';
//$user = 'root';
//$password = '';
//
//$pdo_connection = new PDO($dsn, $user, $password);
//
//$pdo_connection->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
//
//$sql = 'SELECT * FROM `users`';
//
//$statement = $pdo_connection->prepare($sql);
//$statement->execute();
//
//$records = $statement->fetchAll();
//
//echo "<pre>";
//print_R($records);

## bindValue() vs bindParam()
//$dsn = 'mysql:host=localhost;dbname=zce';
//$user = 'root';
//$password = '';
//
//$pdo_connection = new PDO($dsn, $user, $password);
//
//$pdo_connection->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
//
//$statement = 'SELECT * FROM `users` WHERE email LIKE :email';
//
//$pdoStatement = $pdo_connection->prepare($statement);
//$email = '%gmail.com';
//
//$pdoStatement->bindParam('email', $email);
//
//$email = '%example.com';
//
//$pdoStatement->execute();
//$records = $pdoStatement->fetchAll();
//
//echo "<pre>";
//print_r($records);

