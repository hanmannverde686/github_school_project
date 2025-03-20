<?php

// Function to generate a random number between 1 and 10
function getRandomNumber() {
    return rand(1, 10);
}

// Function to get a random student from the school
function getRandomStudent() {
    $students = ["John Doe", "Jane Doe", "Bob Smith"];
    $randomStudentIndex = array_rand($students);
    return $students[$randomStudentIndex];
}

// Function to get a random subject from the school
function getRandomSubject() {
    $subjects = ["Math", "English", "Science"];
    $randomSubjectIndex = array_rand($subjects);
    return $subjects[$randomSubjectIndex];
}

?>