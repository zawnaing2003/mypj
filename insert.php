<?php

$sql = "INSERT INTO roles (name, value) VALUES ('Alice', 6)";
$db->$query($sql);
echo $db->lastInsertId();