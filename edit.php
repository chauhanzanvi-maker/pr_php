<?php
$connection = mysqli_connect("localhost","root","","student_db");


$id = $_GET["id"];

$sql = "SELECT * FROM students WHERE id=$id";

$result = mysqli_query($connection, $sql);

$row = mysqli_fetch_assoc($result);

?>

<h2>Edit Student</h2>

<form action="update.php" method="post">

    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
    Name:
    <input type="text" name="name" value="<?php echo $row["name"]; ?>">
    <br><br>
    Email:
    <input type="text" name="email" value="<?php echo $row["email"]; ?>">
    <br><br>
    City:
    <input type="text" name="city" value="<?php echo $row["city"]; ?>">
    <br><br>
    <input type="submit" value="Update">

</form>