<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
</head>
<body>
    This is the index page.
    <?php
        if(isset($_SESSION['email'])) {
    ?>
        <form action="process/logout_process.php" method="post">
            <button type="submit">Logout</button>
        </form>
    <?php
        }
    ?>
</body>
</html>