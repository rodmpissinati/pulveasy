<?php
$name = 'db_pulveasy';
$host = 'localhost';
$user = 'root';
$pass = 'aluno123';

$pdo = new PDO('mysql:dbname=' . $name . ';host=' . $host, $user, $pass);

$mysqli = new mysqli("localhost","root","aluno123","db_pulveasy");


if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


    
?>