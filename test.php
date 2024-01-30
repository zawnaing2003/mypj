<?php

$db = new PDO('mysql:dbhost=localhost;dbname=mypj', 'root', '', [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
]);

// R => Read
// $statement = $db->query("SELECT * FROM roles");
// $result = $statement->fetchAll();
// print_r($result);

// C => Create
// $sql = "INSERT INTO roles (name, value) VALUES ('Alice', 6)";
// $db->query($sql);
// echo $db->lastInsertId();

// $sql = "INSERT INTO roles (name, value) VALUES (:name, :value)";
// $statement = $db->prepare($sql);
// $statement->execute([
//     'name' => 'Roger',
//     'value' => 7
// ]);
// echo $db->lastInsertId();

// U => UPDATE
// $sql = "UPDATE roles SET name=:name FROM roles WHERE value = 7";
// $statement = $db->prepare($sql);
// $statement->execute([
//     'name' => 'Brody'
// ]);
// echo $statement->rowCount();

// D => Delete

$sql = "DELETE FROM roles WHERE id > 5";
$statement = $db->prepare($sql);
$statement->execute();
echo $statement->rowCount();