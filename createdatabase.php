<?php

$hostname = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect("$hostname","$username", "$password");
if(isset($_POST['submit']))
{    
     $databasename = $_POST['databasename'];
     $sql = "CREATE DATABASE $databasename";
     if (mysqli_query($conn, $sql)) {
        echo "Database Created!";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}

?>