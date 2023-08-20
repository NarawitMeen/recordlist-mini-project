<?php
session_start();
include('../models/users-model.php');

$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['username'] : '';
$msgLoginErr = '';

if (isset($_POST['loginUser'])) {
    $usersModel = new UsersModel();
    $hasUserResult = $usersModel->getUserByUsernameAndPassword($username, $password);

    if ($hasUserResult) {
        $_SESSION['username'] = $username;
        header('Location: home-controller.php');
    } else {
        $msgLoginErr = 'username had already!';
    }
}

include('../views/login-page.php');
