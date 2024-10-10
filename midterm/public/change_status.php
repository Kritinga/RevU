<?php
include('../private/config.php');

// Get the ID of the student to change status
$id = $_POST['id'];

// Check if the student is active or inactive
$sql = "SELECT status FROM students WHERE id = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$student = $result->fetch_assoc();

// Change the status of the student
if ($student['status'] == 'Active') {
  $new_status = 'Inactive';
} else {
  $new_status = 'Active';
}

$sql = "UPDATE students SET status = ? WHERE id = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("si", $new_status, $id);
$stmt->execute();

// Redirect back to the administrator page
echo "<script>window.location.href='admin.php';</script>";
exit;
?>