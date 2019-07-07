<?php
$domain = 'localhost';
$user = 'root';
$password = '';
$database = 'bazata';

$con = mysqli_connect($domain,$user,$password);
mysqli_select_db($con,$database);
?>