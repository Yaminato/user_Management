<?php 
include "db.php"; 
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM user_accounts WHERE id=$id");
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Navigation -->
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

    <!-- Form Container -->
    <div class="form-container">
        <h2>Update User</h2>
        <form method="POST">
            <div class="input-group">
                <label for="name">Full Name</label>
                <input type="text" name="name" id="name" value="<?php echo $user['name']; ?>" required>
            </div>

            <div class="input-group">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" value="<?php echo $user['email']; ?>" required>
            </div>

            <button type="submit" name="update">Update</button>
        </form>
    </div>

    <?php
    if (isset($_POST['update'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];

        $sql = "UPDATE user_accounts SET name='$name', email='$email' WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('User updated successfully!'); window.location='view_user.php';</script>";
        } else {
            echo "Error: " . $conn->error;
        }
    }
    ?>

</body>
</html>
