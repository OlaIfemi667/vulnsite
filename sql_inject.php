<?php
$host="localhost";
$username="root";
$password="";
$db="injection";

$conn=mysqli_connect($host,$username,$password);
mysqli_select_db($conn,$db);
?>