<?php

include('conn.php');
if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    if (strlen($password) > 6) {
        $query = "insert into users (username, password) values('$username','$password')";
        $result = mysqli_query($conn, $query);
        if ($result) {
            header('location:index.php');
        } else {
            echo 'error';
        }
    } else {
        echo 'password less than 6 chars';
    }
    // $query = "select * from users where username='$username' and password='$password'";

}
