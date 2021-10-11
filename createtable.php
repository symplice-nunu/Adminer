<?php

$hostname = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect("$hostname","$username", "$password");
$db = mysqli_select_db($conn, "adminer");
if(isset($_POST['submit']))
{  
    
    $tablename = $_POST['tablename'];
    $columnname = $_POST['columnname'];
    $type = $_POST['type'];
    $length = $_POST['length'];
    $null = $_POST['null'];
    $authinc = $_POST['authinc'];
    $sql = "CREATE TABLE $tablename
(
   
    $columnname $type($length) $null $authinc,
    PRIMARY KEY ($columnname)
)

";

if (mysqli_query($conn, $sql)) {
    echo "Table Created!";
 } else {
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
 }
 mysqli_close($conn);
}
?>