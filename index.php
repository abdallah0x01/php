<?php
include('conn.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>

<body>
    <div id=form>
        <h1>Login Form</h1>
        <form action="./login.php" name='form' method="POST">
            <label for="username">username</label>
            <input type="text" id='username' name='username'>
            <br>
            <br>
            <label for="password">password</label>
            <input type="password" id='password' name='password'>
            <br>
            <br>
            <button type="submit" name='login'>login</button>

        </form>
    </div>
</body>

</html>