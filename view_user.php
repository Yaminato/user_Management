<?php include "db.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>View Users</title>
</head>
<body>
     <hr>
    <nav>
        <a href="index.php">Home</a> |
        <a href="view_user.php">View Users</a> |
        <a href="register.php">Register User</a>
    </nav>
    </hr>
    
    <h2>Registered Users</h2>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th><th>Name</th><th>Email</th><th>Action</th>
        </tr>

        <?php
        $result = $conn->query("SELECT * FROM user_accounts");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$row['id']."</td>
                    <td>".$row['name']."</td>
                    <td>".$row['email']."</td>
                    <td>
                        <a href='update_user.php?id=".$row['id']."'>Update</a> | 
                        <a href='delete_user.php?id=".$row['id']."'>Delete</a>
                    </td>
                  </tr>";

                 
        }
        ?>

        
    </table>
</body>
</html>
