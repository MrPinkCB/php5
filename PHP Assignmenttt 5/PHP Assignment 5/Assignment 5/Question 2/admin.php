<?php
session_start();
include_once("includes/config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>

    <?php

        if(isset($_SESSION['user_id'])){
            $session_id = $_SESSION['session_id'];
            $user_id = $_SESSION['user_id'];
            $last_access_time = time();

            $query = "UPDATE `login_sessions` SET `last_access_time` = '$last_access_time' WHERE `user_id` = '$user_id' AND `session_id` = '$session_id'";
            mysqli_query($conn, $query);

            $select_user = "SELECT * FROM `users` WHERE `user_id` = '$user_id'";
            $result = mysqli_query($conn, $select_user);
            $data = mysqli_fetch_assoc($result);
            $username = $data['username'];

            ?>
            
            
            <h3 style="background-color: blue; color: white; padding: 10px; text-align: center;">Welcome <?php echo $username; ?> to the Admin Page</h3>


            <?php

        } else{
            header("Location: login.php");
            exit();
        }

    ?>


</body>
</html>