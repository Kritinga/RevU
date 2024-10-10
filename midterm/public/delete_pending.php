<?php
include('../private/config.php');

// Get the ID of the file to be deleted
$id = $_POST['id'];

// Delete the file from the database
$sql = "DELETE FROM files WHERE id = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

// Redirect back to the administrator page
echo "<script>window.location.href='admin.php';</script>";
exit;
?>