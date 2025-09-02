<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Management</title>
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

    <!-- Dashboard Content -->
    <div class="dashboard">
        <h2>Welcome to System Management</h2>
        <p>Select an action below to manage your users:</p>

        <div class="card-container">
            <a href="register.php" class="card">
                <h3>➕ Register User</h3>
                <p>Add a new user to the system.</p>
            </a>
            <a href="view_user.php" class="card">
                <h3>📋 View Users</h3>
                <p>See all registered users and manage them.</p>
            </a>
        </div>
    </div>

</body>
</html>
