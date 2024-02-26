<?php
// session_start();
require_once '../../database.php';
require_once '../../process/user_process.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Listing</title>
</head>
<body>
    <h1>User Listing</h1>
    <a href="add.php" class="add-button" style="float: right;">Add New</a>

    <table>
        <tr>
            <th>SN</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php
        $i = 1;
        foreach ($users = getUsersList() as $user) {
        ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $user['id']; ?>">Edit</a>
                    |
                    <a href="delete.php?id=<?php echo $user['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
