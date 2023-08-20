<?php
session_start();
include('../models/users-model.php');

$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['username'] : '';
$msgRegisterErr = isset($msgRegisterErr) ? $msgRegisterErr : '';

if (isset($_POST['regUser'])) {
    $usersModel = new UsersModel();
    $hasUserResult = $usersModel->getUserByUsername($username);

    if ($hasUserResult) {
        $msgRegisterErr = 'username had already!';
    } else {
        $usersModel->addUser($username, $password);
        $_SESSION['username'] = $username;
        header('Location: home-controller.php');
    }
}

include('../views/register-page.php');
