<?php
    $uname = $_POST["username"];
    $pwd = $_POST["password"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mall";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, username, password FROM user where username = '".$uname."' and password = '".$pwd."'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Login successful. <a href='index.html'>Proceed</a>";
    }
    } else {
    echo "Username or Password is incorrect. <a href='login.html'>Try Again</a>";
    }
    $conn->close();

?>