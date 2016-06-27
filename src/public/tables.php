<?php

function checkTables($pdo) {
    $query = $pdo->query("SHOW TABLES");

    print_r($query->fetchAll(PDO::FETCH_COLUMN));
}

$pdo = new PDO(
    "mysql:host=db;dbname=dockerdev",
    "dockerdevuser",
    "password"
);

checkTables($pdo);

$pdo->exec("CREATE TABLE test_table(
    ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY
);");

checkTables($pdo);
