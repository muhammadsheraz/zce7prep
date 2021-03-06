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

//## using fetch()
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
//$records = $pdoStatement->fetchColumn(0);
//
//echo "<pre>";
//print_r($records);
//echo "<br>";
//
//echo $pdoStatement->columnCount();
//
//
//$pdoStatement->closeCursor();
//
//$records = $pdoStatement->fetch();
//
//echo "<pre>";
//var_dump($records); // return false;

## debugDumpParams()
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
//echo "<br>";
//
//
//print_r($pdoStatement->debugDumpParams());
//echo "<br>";

# bindColumn()
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
//$email = '%example.com';
//
//$pdoStatement->bindParam('email', $email);
//$pdoStatement->execute();
//
//$pdoStatement->bindColumn(3, $result);
//
//$records = $pdoStatement->fetchAll(PDO::FETCH_BOTH);
//
//echo "<pre>";
//print_r($records);
//echo "<br>";
//$dsn = "mysql:host=localhost;dbname=zce";
//$user='root';
//$pass='';
//
//$pdo = new PDO($dsn, $user, $pass);
//
//
//try {
//    $cmd = "INSERT INTO users (id, name, email) VALUES (:id, :name, :email)";
//    $stmt = $pdo->prepare($cmd);
//    $stmt->bindValue('id', 1);
//    $stmt->bindValue('name', 'anna');
//    $stmt->bindValue('email', 'alpha@example.com');
//    $stmt->execute();
//    echo "Success!";
//} catch (PDOException $e) {
//    echo "Failure!";
//    throw $e;
//}
ini_set('engine' , 'off');

$a = [1 => 'Apple', 3 => 'Cactus', 5 => 'Elderflower'] + ['Banana', 'Dragonfruit', 'Fig'];
$a = array_merge([1 => 'Apple', 3 => 'Cactus', 5 => 'Elderflower'] , ['Banana', 'Dragonfruit', 'Fig']);


var_dump($a);