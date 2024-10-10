<?php
include('../private/config.php');

// Retrieve the list of files from the database
$sql = "SELECT * FROM files";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $files = array();
    while($row = $result->fetch_assoc()) {
        $files[] = $row;
    }
} else {
    echo "No files found";
}

// Retrieve the list of users from the database
$sql = "SELECT * FROM subjects";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $users = array();
    while($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
} else {
    echo "No users found";
}

// Retrieve the list of students from the database
$sql = "SELECT * FROM ccs_login";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $students = array();
    while($row = $result->fetch_assoc()) {
        $students[] = $row;
    }
} else {
    echo "No users found";
}

$con->close();
?>

<!-- HTML template for the administrator page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F7E7CE;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #333;
        }

        h2 {
            color: #4A90E2;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .admin-header {
            text-align: center;
            margin-bottom: 40px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 40px;
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
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

        button {
            padding: 10px 15px;
            background-color: #4A90E2;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #357ABD;
        }

        .btn-danger {
            background-color: #e74c3c;
        }

        .btn-danger:hover {
            background-color: #c0392b;
        }

        input[type="file"] {
            padding: 10px;
            margin: 10px 0;
        }

        .form-container {
            margin-bottom: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .center-text {
            text-align: center;
        }

        .logout-link {
            display: inline-block;
            margin-top: 20px;
            color: #e74c3c;
            text-decoration: none;
        }

        .logout-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="admin-header">
        <h1>Administrator Dashboard</h1>
        <h2>Pending Reviewers</h2>
        <a href="logout.php" class="logout-link">Logout</a>
    </div>

    <div class="form-container">
        <h2>Files Pending Review</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Category</th>
                <th>Uploader</th>
                <th>Delete</th>
                <th>Add</th>
            </tr>
            <?php foreach ($files as $file) { ?>
                <tr>
                    <td><?php echo $file['id']; ?></td>
                    <td><?php echo $file['title']; ?></td>
                    <td><?php echo $file['category']; ?></td>
                    <td><?php echo $file['uploader']; ?></td>
                    <td>
                        <form action="delete_file.php" method="post" onsubmit="return confirm('Are you sure you want to delete this file?')">
                            <input type="hidden" name="id" value="<?php echo $file['id']; ?>">
                            <button type="submit" class="btn-danger">Reject</button>
                        </form>
                    </td>
                    <td>
                        <form action="add_file.php" method="post" onsubmit="return confirm('Are you sure you want to add this file?')">
                            <input type="hidden" name="id" value="<?php echo $file['id']; ?>">
                            <input type="hidden" name="title" value="<?php echo $file['title']; ?>">
                            <input type="hidden" name="category" value="<?php echo $file['category']; ?>">
                            <input type="hidden" name="uploader" value="<?php echo $file['uploader']; ?>">
                            <button type="submit">Accept</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </table>

        <h2>Upload New File</h2>
        <form action="upload_file.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file_to_upload">
            <button type="submit">Upload File</button>
        </form>
    </div>

    <div class="form-container">
        <h2>Reviewers List</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Category</th>
                <th>Uploader</th>
                <th>Delete</th>
            </tr>
            <?php foreach ($users as $user) { ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['title']; ?></td>
                    <td><?php echo $user['category']; ?></td>
                    <td><?php echo $user['uploader']; ?></td>
                    <td>
                        <form action="delete_user.php" method="post" onsubmit="return confirm('Are you sure you want to removed this reviewer?')">
                            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                            <button type="submit" class="btn-danger">Remove</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </table>

        <h2>Students List</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Status</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Middle Name</th>
                <th>Change Status</th>
            </tr>
            <?php foreach ($students as $student) { ?>
                <tr>
                    <td><?php echo $student['id']; ?></td>
                    <td><?php echo $student['action']; ?></td>
                    <td><?php echo $student['fname']; ?></td>
                    <td><?php echo $student['lname']; ?></td> 
                    <td><?php echo $student['mname']; ?></td> 
                    <td>
                        <form action="change_status.php" method="post" onsubmit="return confirm('Are you sure you want to change the status of this student?')">
                            <input type="hidden" name="id" value="<?php echo $student['id']; ?>">
                            <?php if ($student['action'] == 'Active') { ?>
                                <button type="submit">Deactivate</button>
                            <?php } else { ?>
                                <button type="submit">Activate</button>
                            <?php } ?>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>

</body>
</html>