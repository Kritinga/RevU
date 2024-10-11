<?php
include('../private/config.php');

// Retrieve files from the database
$sql = "SELECT * FROM ccs_login";
$result = $con->query($sql);

?>

<!-- HTML template for the administrator page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F7E7CE;
            margin: 0;
            padding: 0;
        }

        h1, h2 {
            color: #333;
        }

        h1 {
            text-align: center;
            margin-bottom: 40px;
        }

        h2 {
            color: #4A90E2;
        }

        .container {
            max-width: 60%;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
        }

        th {
            background-color: #f0f4f8;
            color: #333;
        }

        td {
            border-bottom: 1px solid #f0f4f8;
        }

        tr:hover td {
            background-color: #f9f9f9;
        }

        input[type="password"], input[type="submit"] {
            width: 80%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4A90E2;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #357ABD;
        }

        label {
            font-weight: bold;
            margin-bottom: 8px;
            display: inline-block;
            
        }

        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <h1>Your Account Setting</h1>

    <!-- Add a container to display files -->
    <div class="container">
        <h2>Your Information</h2>
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
                    echo "<td>".($row["password"])."</td>";

                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No information available</td></tr>";
            }
            ?>
        </table>
    </div>

    <!-- Add a form to change the password -->
    <div class="container">
        <h2>Change Password</h2>
        <form action="change_password.php" method="post" onsubmit="return confirm('Are you sure you want to change your password?')">
            <div class="form-group">
                <label for="old_password">Old Password:</label><br>
                <input type="password" id="old_password" name="old_password" required>
            </div>
            <div class="form-group">
                <label for="new_password">New Password:</label><br>
                <input type="password" id="new_password" name="new_password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password:</label><br>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>
            <input type="submit" value="Change Password">
        </form>
    </div>

    <!-- Add a form to change the secret password -->
    <div class="container">
        <h2>Change Secret Password</h2>
        <form action="change_secret.php" method="post" onsubmit="return confirm('Are you sure you want to change your secret password?')">
            <div class="form-group">
                <label for="old_secret_password">Old Secret Password:</label>
                <input type="password" id="old_secret_password" name="old_secret_password" required>
            </div>
            <div class="form-group">
                <label for="new_secret_password">New Secret Password:</label>
                <input type="password" id="new_secret_password" name="new_secret_password" required>
            </div>
            <div class="form-group">
                <label for="confirm_secret_password">Confirm Secret Password:</label>
                <input type="password" id="confirm_secret_password" name="confirm_secret_password" required>
            </div>
            <input type="submit" value="Change Secret Password">
        </form>
    </div>

</body>
</html>