<?php
$name = 'db_pulveasy';
$host = 'localhost';
$user = 'root';
$pass = 'R0drig04@';

$pdo = new PDO('mysql:dbname=' . $name . ';host=' . $host, $user, $pass);

$mysqli = new mysqli("localhost","root","R0drig04@","db_pulveasy");


if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


    
?>