<?php
session_start();
require_once '../inc/db.php';

if (isset($_POST['submit'])) {
    $old_password = filter_var($_POST['old_password'], FILTER_SANITIZE_EMAIL);
    $new_password = filter_var($_POST['new_password'], FILTER_SANITIZE_EMAIL);
    $confirm_password = filter_var($_POST['confirm_password'], FILTER_SANITIZE_STRING);

//   Check if email exist or not
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_SESSION['user_email']]);

    $data = $stmt->fetchObject();

    if ($data) {
        $check = password_verify($old_password, $data->password);
        if ($check) {
            if ($new_password === $confirm_password) {
                $new_password = password_hash($new_password, PASSWORD_DEFAULT);
                $sql = "UPDATE users SET password=:password WHERE email=:email";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(['password'=> $new_password, 'email'=> $_SESSION['user_email']]);
                $_SESSION['success'] = "Password updated successfully";
            }

            header("location:../index.php");
            die();
        } else {
            $_SESSION['error'] = "password is wrong";
        }
    } else {
        $_SESSION['error'] = "Email not found";
    }

}

header("location: ../change-password.php");


