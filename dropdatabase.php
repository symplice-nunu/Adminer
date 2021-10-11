<?php

$hostname = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect("$hostname","$username", "$password");
mysqli_query($conn, "DROP DATABASE adminer");

echo "Database Deleted!";

?>