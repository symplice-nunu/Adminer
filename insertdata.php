<?php

$hostname = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect("$hostname","$username", "$password");
$db = mysqli_select_db($conn, "adminer");
mysqli_query($conn, "INSERT INTO tech VALUES ('', 'Symplice', 'Male', '20')");

echo "Data Inserted!";

?>