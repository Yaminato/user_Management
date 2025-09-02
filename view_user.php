<?php include "db.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Users</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <nav class="navbar">
        <div class="nav-container">
            <div class="logo">User System</div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="view_user.php">View Users</a></li>
                <li><a href="register.php">Register User</a></li>
            </ul>
        </div>
    </nav>


    <div class="container">
        <h2>Registered Users</h2>

        <table class="user-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $result = $conn->query("SELECT * FROM user_accounts");
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>".$row['id']."</td>
                            <td>".$row['name']."</td>
                            <td>".$row['email']."</td>
                            <td>
                                <a class='btn update' href='update_user.php?id=".$row['id']."'>Update</a>
                                <a class='btn delete' href='delete_user.php?id=".$row['id']."'>Delete</a>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No users found</td></tr>";
            }
            ?>
            </tbody>
        </table>
    </div>

</body>
</html>
