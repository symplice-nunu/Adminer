<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
     $firstname = $_POST['name'];
     $gender = $_POST['gender'];
     $age = $_POST['age'];
     $sql = "INSERT INTO tech (firstname, gender, age) VALUES ('$firstname','$gender','$age')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>