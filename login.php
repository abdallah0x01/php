<?php

include('conn.php');
$isSuccess = 0;
if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    if (strlen($password) > 1) {
        $query = "select username, password from users where username='$username' and password='$password'";
        // "select username, password from users where username='' or 1=1"

        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            // the condition below prevent sql injection technics like admin' -- 
            if ($username == $row['username'] and $password == $row['password']) {
                header('location:admin.php');
                $isSuccess = 1;
            }
        }
        if ($isSuccess == 0) {
            header('location:404.php');
        }
    }
}
