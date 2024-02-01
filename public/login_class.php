<?php
// $_SESSION['kkkkk'] = '555';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // check username and password
    if ($username == 'admin' && $password == '1234') {
        $_SESSION['username'] = 'admin';
        $_SESSION['name'] = 'administrator';
        session_write_close();
        header("location:index.php");
    } elseif ($username == 'admin_con' && $password == '1234') {
        $_SESSION['username'] = 'admin';
        $_SESSION['status'] = 'complete';
        $_SESSION['name'] = 'administrator';
        session_write_close();
        header("location:index.php");
    } else {
        echo 'Username and Password Incorrect!';
        header("location:logout.php");
    }
} else {
    echo 'Username and Password Incorrect!';
    header("location:logout.php");
}
