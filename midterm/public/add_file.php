<?php
include('../private/config.php');

// Get the file details from the form submission
$id = $_POST['id'];
$title = $_POST['title'];
$category = $_POST['category'];
$uploader = $_POST['uploader'];

// Add the file to the subjects table
$sql = "INSERT INTO subjects (id, title, category, uploader) VALUES (?, ?, ?, ?)";
$stmt = $con->prepare($sql);
$stmt->bind_param("isss", $id, $title, $category, $uploader);
$stmt->execute();

// Check if the insertion was successful
if ($stmt->affected_rows > 0) {
    echo "File added successfully!";
} else {
    echo "Error adding file: " . $con->error;
}

// Close the database connection
$con->close();

// Redirect back to the administrator page
echo "<script>window.location.href='admin.php';</script>";
exit;
?>