<?php

$username = "user";
$password = "password";
$dsn = 'mysql:host=php_nginx_mysql;dbname=mysql_database';

$pdo = new PDO($dsn, $username, $password);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

$stmt = $pdo->query("SELECT * FROM people");

foreach($stmt as $person)
{
    echo $person['firstname'];
}