<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <h1>
        Register
    </h1>
    <?php echo $msgRegisterErr ?>
    <form method="POST">
        <label for="createusername">create username</label>
        <br>
        <input type="text" name="username" value="<?php echo $username ?>" required>
        <br>
        <label for="createpassword">create password</label>
        <br>
        <input type="password" name="password" required>
        <br>
        <br>
        <button type="submit" name="regUser">Register</button>
    </form>
    <p>
        Already have username ?
        <a href="login-controller.php">
            Click here !
        </a>
    </p>
</body>

</html>