<?php
session_start();
// require_once '../database.php';

function getUsersList() {
    $conn = db_connect();

    // Query to retrieve users from the database
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);

    // Fetch all users as an associative array
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // $users = mysqli_fetch_assoc($result);

    // Close the database connection
    mysqli_close($conn);

    return $users;
}
