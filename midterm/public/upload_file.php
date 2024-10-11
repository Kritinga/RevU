<?php
include "config.php";

// Create a table to store file details
$sql2 = "CREATE TABLE IF NOT EXISTS files (
    id INT AUTO_INCREMENT,
    title VARCHAR(255),
    category VARCHAR(255),
    uploader VARCHAR(255),
    file_path VARCHAR(255),
    file_size INT,
    file_type VARCHAR(255),
    PRIMARY KEY (id)
)";
$stmt2 = $con->prepare($sql2);
$stmt2->execute();

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the uploaded file
    $file_to_upload = $_FILES["file_to_upload"];

    // Check if the file is valid
    if ($file_to_upload["error"] == 0) {
        // Get the file details
        $file_name = $file_to_upload["name"];
        $file_tmp_name = $file_to_upload["tmp_name"];
        $file_size = $file_to_upload["size"];
        $file_type = $file_to_upload["type"];

        // Define the file path
        $upload_dir = "uploads/";
        $file_path = $upload_dir . $file_name;

        // Insert the file into the database
        $sql = "INSERT INTO subjects (title, category, uploader, file_path, file_size, file_type) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $con->prepare($sql);
        $category = "Uncategorized";
        $uploader = "Admin";
        $stmt->bind_param("sssssi", $file_name, $category, $uploader, $file_path, $file_size, $file_type);
        if ($stmt->execute()) {
            // Move the uploaded file to a permanent location
            if (move_uploaded_file($file_tmp_name, $file_path)) {
                // Redirect back to the administrator page with a success message
                header("Location: admin.php?upload_success=true");
                exit;
            } else {
                echo "Error moving file: unable to move file to permanent location";
            }
        } else {
            echo "Error uploading file: unable to insert file into database";
        }
    } else {
        echo "Error uploading file: " . $file_to_upload["error"];
    }
}

$con->close();
?>