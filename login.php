<?php
session_start();
if(isset($_SESSION['email'])) {
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <!-- Include css link below to assets/css/style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <?php
            if(isset($_SESSION['error'])){
                echo "<span class='error-text auth-err'>". $_SESSION['error'] . "</span>";
                unset($_SESSION['error']);
            }
            if(isset($_SESSION['success'])){
                echo "<span class='success-text auth-err'>". $_SESSION['success'] . "</span>";
                unset($_SESSION['success']);
            }
            ?>
        <form action="process/login_process.php" method="POST">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
            <div class="form-group">
                <a href="register.php">Don't have an account? Register</a>
            </div>
        </form>
    </div>
</body>
</html>
