<?php
include "connection.php"; // or wherever you connect to the DB

if (isset($_GET['clg_id'])) {
    $clg_id = intval($_GET['clg_id']);
    $stmt = $conn->prepare("SELECT course_name FROM course WHERE clg_id = ?");
    $stmt->bind_param("i", $clg_id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    $courses = [];
    while ($row = $result->fetch_assoc()) {
        $courses[] = $row;
    }
    echo json_encode($courses);
}
?>
