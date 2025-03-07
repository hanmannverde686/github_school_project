<?php
// Get data from form
$name = $_POST['name'];
$age = $_POST['age'];

// Validate input
if (empty($name) || empty($age)) {
    header("Location: https://github.com/your-username");
} else {
    // Process data
    $name = htmlspecialchars($name);
    $age = intval($age);

    // Output results
    echo "Hello, my name is $name and I am $age years old.";
}
?>