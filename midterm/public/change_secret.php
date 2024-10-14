<?php
include('../private/config.php');
session_start(); // Start the session

// Get the old password, new password, and confirm password from the form
$old_password = md5($_POST["old_password"]);
$new_password = md5($_POST["new_password"]);
$confirm_password = md5($_POST["confirm_password"]);

// Get the logged-in user's student number or unique identifier from the session
$student_number = $_SESSION['student_number']; // Make sure this is set during login

// Check if the old password is correct for the logged-in user
$sql = "SELECT * FROM students WHERE stunum = '$student_number' AND secret = '$old_password'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // Check if the new password and confirm password match
  if ($new_password == $confirm_password) {
    // Update the password for the specific user
    $sql = "UPDATE students SET secret = '$new_password' WHERE stunum = '$student_number'";
    if ($con->query($sql) === TRUE) {
      ?>
      <script>
        alert("Secret Password changed successfully!");
        window.location.href='student_acc.php';
      </script>
      <?php
    } else {
      ?>
      <script>
        alert("Error updating password. Please try again.");
        window.location.href='student_acc.php';
      </script>
      <?php
    }
  } else { ?>
    <script>
      alert("New Secret password and Confirm do not match!");
      window.location.href='student_acc.php';
    </script>
  <?php }
} else { ?>
  <script>
    alert("Wrong Old Secret password");
    window.location.href='student_acc.php';
  </script>
<?php }

$con->close();
?>