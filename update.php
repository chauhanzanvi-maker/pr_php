<?php

$connection = mysqli_connect("localhost","root","","student_db");

$id = $_POST["id"];
$name = $_POST["name"];
$email = $_POST["email"];
$city = $_POST["city"];

$sql = "UPDATE students 
        SET name='$name', email='$email', city='$city'
        WHERE id=$id";

mysqli_query($connection, $sql);

echo "Student updated successfully";

?>