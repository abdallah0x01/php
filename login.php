<?php

include('conn.php');
$isSuccess = 0;
if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    if (strlen($password) > 1) {
        $query = $conn->prepare("select username, password from users where username=? and password=? ");
        $query->bind_param('ss', $username, $password);
        $query->execute();

        $result = $query->get_result();
        while ($row = $result->fetch_assoc()) {
            header('location:admin.php');
            $isSuccess = 1;
        }
        if ($isSuccess == 0) {
            header('location:404.php');
        }
    }
}
