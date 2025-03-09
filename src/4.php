<?php

// Connect to the database
$conn = new mysqli('localhost', 'yourusername', 'yourpassword', 'yourdatabase');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the data from the form
$name = $_POST['name'];
$age = $_POST['age'];
$grade = $_POST['grade'];

// Insert the data into the database
$sql = "INSERT INTO students (name, age, grade) VALUES ('$name', $age, '$grade')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>