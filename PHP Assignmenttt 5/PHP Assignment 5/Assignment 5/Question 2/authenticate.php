<?php

include_once("includes/config.php");

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){

        session_start();
        $data = mysqli_fetch_assoc($result);
        $user_id = $data['user_id'];
        $session_id = session_id();
        $last_access_time = time();
        
        $query_login = "INSERT INTO `login_sessions`(`user_id`, `session_id`, `last_access_time`) VALUES ('$user_id','$session_id','$last_access_time')";

        if(mysqli_query($conn, $query_login)){
            $_SESSION['user_id'] = $user_id;
            $_SESSION['session_id'] = $session_id;
            header("Location: admin.php");
            exit();
        } else{
            header("Location: login.php");
            exit();
        }

    } else{
        header("Location: login.php");
        exit();
    }
} else{
    header("Location: login.php");
    exit();
}


?>