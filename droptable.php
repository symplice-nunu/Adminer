<?php

$hostname = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect("$hostname","$username", "$password");
$db = mysqli_select_db($conn, "adminer");
mysqli_query($conn, "DROP TABLE tech");

echo "Table Deleted!";

?>