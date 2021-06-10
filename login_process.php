<?php
    include_once 'koneksi.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM user WHERE username = '$username'";
    $result = $koneksi->query($sql);
    if ($result->num_rows) {
        $row = $result->fetch_object();
        if (password_verify($password, $row->password)) {
            session_start();
            $_SESSION['app123_logged_in'] = true;
            $_SESSION['name'] = $row->name;
            header('Location: home.php');
        } else {
            echo 'Wrong username or password.';
        }
    } else {
        echo 'Wrong username or password.';
    }
    $result->close();
    $koneksi->close();
?>
