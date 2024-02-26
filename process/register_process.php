<?php
session_start();
require_once '../database.php';

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $enc_password = hash('sha256', $password);

    if($password == $confirm_password){
        $enc_password = hash('sha256', $password);
        $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$enc_password')";
        if(mysqli_query($conn, $sql)){
            $_SESSION['success'] = 'You have successfully registered';
            header('Location: ../login.php');
        }else{
            $_SESSION['error'] = 'Something went wrong';
            header('Location: ../register.php');
        }
    }else{
        $_SESSION['error'] = 'The password does not match';
        header('Location: ../register.php');
    }
} else {
    header('Location: ../register.php');
}