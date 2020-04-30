<?php

//conexion con la base de datos

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'blog';
$port = '3308';
$db = mysqli_connect($server, $username, $password, $database, $port);

mysqli_query($db, "SET NAMES 'utf8'");

// iniciar la sesion

session_start();

?>