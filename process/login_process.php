<?php
session_start();
require_once '../database.php';
$conn = db_connect();

if(isset($_POST['email']) && isset($_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $enc_password = hash('sha256', $password);

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$enc_password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $row['email'];
        $_SESSION['id'] = $row['id'];
        header('Location: ../index.php');
    }else{
        // Show the error message in the login page
        $_SESSION['error'] = 'Invalid email or password';
        // print_r($_SESSION['error']);
        // die();
        header('Location: ../login.php');
    }
} else {
    header('Location: ../login.php');
}