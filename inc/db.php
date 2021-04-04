<?php
require_once 'config.php';

// DSN
const DSN = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;

try {
    $pdo = new PDO(DSN, DB_USERNAME, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

} catch (PDOException $e) {
    echo "Error! <br />";
    echo  $e->getMessage();
    die();
}