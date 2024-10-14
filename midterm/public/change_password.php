<?php
include('../private/config.php');

// Get the old password, new password, and confirm password from the form
$old_password = md5($_POST["old_password"]);
$new_password = md5($_POST["new_password"]);
$confirm_password = md5($_POST["confirm_password"]);

// Check if the old password is correct
$sql = "SELECT * FROM ccs_login WHERE password = '$old_password'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // Check if the new password and confirm password match
  if ($new_password == $confirm_password) {
    // Update the password in the database
    $sql = "UPDATE ccs_login SET password = '$new_password'";
    $con->query($sql);
    ?>
    <script>
      alert("Password changed successfully!");
      window.location.href='student_acc.php';
    </script>
    <?php
  } else { ?>
    <script>
      alert("New password and Confirm do not match!");
      window.location.href='student_acc.php';
    </script>
  <?php }
} else { ?>
  <script>
      alert("Wrong Old password");
      window.location.href='student_acc.php';
    </script>
<?php }

$con->close();
?>