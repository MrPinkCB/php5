<?php 
    
    //database credentials
    $db_host = "localhost:3306";  //xampp use => $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";      //xampp use => $db_pass = "";
    $db_name = "unit_7";   
    
    //establish a DB connection to a specific database
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    //check for a valid connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // echo "Connected successfuly";
?>   

    
