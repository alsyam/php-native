<?php

session_start();

if ($_SESSION['login'] == true) {
    header('location: /session/member.php');
    exit();
}

$error = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($_POST['username'] == 'alsyam' && $_POST['password'] == 'tahu') {
        $_SESSION['login'] = true;
        $_SESSION['username'] = 'alsyam';
        header('Location: /session/member.php');
        exit();
    } else {
        $error = "Login Gagal";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if ($error != "") { ?>
        <h2><?= $error; ?></h2>
    <?php } ?>
    <H1>LOGIN</H1>
    <form action="/session/login.php" method="post">
        <label>Username :
            <input type="text" name="username">
        </label>
        <br>
        <label>password :
            <input type="text" name="password">
        </label>
        <br>
        <input type="submit" value="Login">
    </form>

</body>

</html>