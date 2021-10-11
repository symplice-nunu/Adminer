<?php

$hostname = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect("$hostname","$username", "$password");
$db = mysqli_select_db($conn, "adminer");
if(isset($_POST['submit']))
{    
     $tablename = $_POST['tablename'];
     $sql = "CREATE TABLE $tablename";
     if (mysqli_query($conn, $sql)) {
        echo "Table Created!";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}

?>