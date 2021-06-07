<?php
    
    $uname = $_POST["uname"];
    $pwd = $_POST["pwd"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "surprisetemplate";

    // if ($uname === "admin") {
    //     if ($pwd === "Admin") {
    //         session_start();
    //         $_SESSION["name"]=$uname;
    //         echo "suc";
    //     } 
    //     else {
    //         echo "Incorrect Password";
    //     }
    // } 
    // else {
    //     echo "Incorrect Username";
    // }
    

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $unamesql = "SELECT uname FROM user where uname = '".$uname."'";
    $result = $conn->query($unamesql);
    $row = $result->fetch_assoc();
    if (isset($row["uname"])) {
        $pwdsql = "SELECT uname FROM user where uname = '".$uname."' and pwd = '".$pwd."'";
        $pwdresult = $conn->query($pwdsql);
        $prow = $pwdresult->fetch_assoc();
        if(isset($prow["uname"])) {
            session_start();
            $_SESSION["name"]=$uname;
            echo "suc";
        } else {
            echo "Incorrect Password";
        }
    } else {
    echo "Incorrect Username";
    }
    $conn->close();
?>