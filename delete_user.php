<?php
include "db.php";

$id = $_GET['id'];

$sql = "DELETE FROM user_accounts WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    echo "User deleted successfully! <a href='view_user.php'>Go Back</a>";
} else {
    echo "Error deleting user: " . $conn->error;
}


?>
