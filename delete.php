<?php

$conn = mysqli_connect("localhost", "root", "", "student_db");

$id = $_GET["id"];

$sql = "DELETE FROM students WHERE id=$id";

mysqli_query($conn, $sql);

echo "Student deleted successfully";

?>