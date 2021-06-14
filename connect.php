<?php
$user = 'root';
$password = '';
$db = 'goals';
$host = 'localhost';
$port = 8000;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link,
   $host,
   $user,
   $password,
   $db,
   $port
);

?>
