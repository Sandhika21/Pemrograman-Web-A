<?php
$server = "localhost";
$user = "";
$password = "";
$database = "";
$link = mysqli_connect($server, $user, $password, $database) or die('gagal menghubungkan database : ' .mysqli_connect_error());
?>