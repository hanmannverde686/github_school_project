<?php
// Connect to database
$conn = mysqli_connect("localhost", "username", "password", "database");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// SQL query to fetch information of register students from database
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['StudentID'] . "</td>";
    echo "<td>" . $row['FirstName'] . "</td>";
    echo "<td>" . $row['LastName'] . "</td>";
    echo "<td>" . $row['Gender'] . "</td>";
    echo "<td>" . $row['DateOfBirth'] . "</td>";
    echo "<td>" . $row['Address'] . "</td>";
    echo "<td>" . $row['PhoneNumber'] . "</td>";
    echo "<td>" . $row['Email'] . "</td>";
    echo "</tr>";
}
// Close connection
mysqli_close($conn);
?>