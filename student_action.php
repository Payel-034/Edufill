<?php
include "connection.php";
// Insert logic
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['student_name'];
    $email = $_POST['student_email'];
    $phone = $_POST['student_phone'];
    $dob = $_POST['student_dob'];
    $address = $_POST['student_address'];
    $clg_id = $_POST['clg_id'];
    $course = $_POST['course_applied'];

    $stmt = $conn->prepare("INSERT INTO student (student_name, student_email, student_phone, student_dob, student_address, clg_id, course_applied) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssis", $name, $email, $phone, $dob, $address, $clg_id, $course);

    if ($stmt->execute()) {
        $message = "Admission form submitted successfully.";
    } else {
        $message = "Error: " . $stmt->error;
    }

    $stmt->close();
}

// Get colleges for dropdown
$college_result = $conn->query("SELECT clg_id, clg_name FROM Collage");
?>