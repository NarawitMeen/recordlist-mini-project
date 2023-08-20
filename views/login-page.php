<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>

<body>
    <h1>
        Log in
    </h1>
    <?php echo $msgLoginErr ?>
    <form method="POST">
        <label for="username">username</label>
        <br>
        <input type="text" name="username" required>
        <br>
        <label for="password">password</label>
        <br>
        <input type="password" name="password" required>
        <br>
        <br>
        <button type="submit" name="loginUser">Login</button>
    </form>
    <p>
        Don't have username ?
        <a href="register-controller.php">
            Click here !
        </a>
    </p>
</body>

</html>