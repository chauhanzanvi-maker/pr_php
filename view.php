<?php

$conn = mysqli_connect("localhost", "root", "", "student_db");
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Email</th>";
echo "<th>City</th>";
echo "<th>Update</th>";
echo "<th>Delete</th>";
echo "</tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["email"] . "</td>";
    echo "<td>" . $row["city"] . "</td>";
    echo "<td>";
    echo "<a href='edit.php?id=" . $row["id"] . "'>Edit</a>";
    echo "</td>";
     echo "<td>";
    echo "<a href='delete.php?id=" . $row["id"] . "'>Delete</a>";
    echo "</td>";
    echo "</tr>";
}

echo "</table>";

?>