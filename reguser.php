<?php

    $uname = $_POST["uname"];
    $pwd = $_POST["pwd"];
    $repwd = $_POST["repwd"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "surpriseTemplate";

    if($pwd == "" || $repwd == "") {
        echo "Please enter password";
    } else {
        if ($pwd === $repwd) {
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
    
            $sql = "insert into user (uname, pwd) values ('".$uanme."', '".$pwd."')";
            $result = $conn->query($sql);
    
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "suc";
                }
            } else {
                echo "Error in registering user, please try again";
            }
            $conn->close();
        } 
        else {
            echo "Password and Re-entered password";
        }
    }
?>