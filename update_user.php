<?php 
include "db.php"; 
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM user_accounts WHERE id=$id");
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <title>Update User</title>
</head>
<body>
     <hr>
    <nav>
        <a href="index.php">Home</a> |
        <a href="view_user.php">View Users</a> |
        <a href="register.php">Register User</a>
    </nav>
    </hr>

    <h2>Update User</h2>
    <form method="POST">
        <label>Name:</label><br>
        <input type="text" name="name" value="<?php echo $user['name']; ?>" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="<?php echo $user['email']; ?>" required><br><br>

        <button type="submit" name="update">Update</button>
    </form>

    <?php
    if (isset($_POST['update'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];

        $sql = "UPDATE user_accounts SET name='$name', email='$email' WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            echo "User updated successfully!";
        } else {
            echo "Error: " . $conn->error;
        }
    }
    ?>


</body>
</html>
