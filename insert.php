<?php
$conn = mysqli_connect("localhost","root","","student_db");

$name = $_POST["name"];
$email = $_POST["email"];
$city = $_POST["city"];

$sql = "INSERT INTO students (name, email, city)
        VALUES ('$name', '$email', '$city')";

if (mysqli_query($conn, $sql)) {
    echo "Student inserted successfully";
     echo "<br>";
    echo "<a href='view.php'><button>View Students</button></a>";
} else {
    echo "Error: " . mysqli_error($conn);
}

?>