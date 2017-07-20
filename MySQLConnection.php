<?php
$host = "localhost";
$username = "root";
$password = "coderslab";
$dbname = "shop_ex";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
} catch(PDOException $e) {
    die("Can not connect to database.");
}


