<?php
include "db.php";

$id = $_GET['id'];

// Fetch user for confirmation
$result = $conn->query("SELECT * FROM user_accounts WHERE id=$id");
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
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

    <!-- Delete Confirmation -->
    <div class="form-container">
        <h2>Delete User</h2>
        <p>Are you sure you want to delete <strong><?php echo $user['name']; ?></strong> (<?php echo $user['email']; ?>)?</p>

        <form method="POST">
            <button type="submit" name="delete" class="btn delete">Yes, Delete</button>
            <a href="view_user.php" class="btn cancel">Cancel</a>
        </form>
    </div>

    <?php
    if (isset($_POST['delete'])) {
        $sql = "DELETE FROM user_accounts WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('User deleted successfully!'); window.location='view_user.php';</script>";
        } else {
            echo "Error deleting user: " . $conn->error;
        }
    }
    ?>

</body>
</html>
