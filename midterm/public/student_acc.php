<?php
include('../private/config.php');

// Retrieve files from the database
$sql = "SELECT * FROM ccs_login";
$result = $con->query($sql);

?>

<!-- HTML template for the administrator page -->
<!DOCTYPE html>
<html>
  <head>
    <title>Students Page</title>

    <style>
      table {
        border-collapse: collapse;
        width: 100%;
      }
      th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
      }
      .container {
  width: 50%;
  margin: 40px auto;
  padding: 20px;
  background-color: #f9f9f9;
  border: 1px solid #ccc;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

    </style>
  </head>
  <body><center>
    <h1>Your Account Setting</h1>
    <a href="HomePage">Back</a>
    <br><br>
    
    <!-- Add a container to display files -->
    <h2>Your Information</h2>
<div class="container">
  <table>
    <tr>
      <th>First Name</th>
      <th>Middle Name</th>
      <th>Last Name</th>
      <th>Student Number</th>
      <th>Password</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["fname"]."</td>";
        echo "<td>".$row["mname"]."</td>";
        echo "<td>".$row["lname"]."</td>";
        echo "<td>".$row["stunum"]."</td>";
        echo "<td>".$row["password"]."</td>";
        echo "</tr>";
      }
    } else {
      echo "<tr><td colspan='2'>No files available</td></tr>";
    }
    ?>
  </table>
</div>
    
    <!-- Add a form to change the password -->
    <h2>Change Password</h2>
<div class="container">
  <form action="change_password.php" method="post" onsubmit="return confirm('Are you sure you want to change your password?')">
    <label for="old_password">Old Password:</label>
    <input type="password" id="old_password" name="old_password"><br><br>
    <label for="new_password">New Password:</label>
    <input type="password" id="new_password" name="new_password"><br><br>
    <label for="confirm_password">Confirm Password:</label>
    <input type="password" id="confirm_password" name="confirm_password"><br><br>
    <input type="submit" value="Change Password">
  </form>
</div>
  </center></body>
</html>
