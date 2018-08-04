<?php 

$dsn = 'mysql:host=localhost;dbname=sts_db';
$user = 'jack';
$password = 'fQU8us9Mn5k2OLGx';

try {
    $db = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
    
?>