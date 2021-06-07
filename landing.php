<?php
    session_start();
    if(isset($_SESSION["name"])) {
        echo "<span>Welcome ".$_SESSION['name']."</span>";
    } else {
        header("location: index.php");
    } 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Landing Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="landing.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>

    <style>
        input {
            border: 0px;
            display: block;
            margin: 15px auto;
            padding: 10px;
            border-bottom: 1px solid #013c6c;
            background-color:  #001628;
            color: #fff;
            font-size: 15px;
            width: 230px;
        }
        button {
            padding: 7.5px 10px;
            cursor: pointer;
            background-color: #002340;
            color: #fff;
            margin-left: 20px;
            margin-bottom: 0px;
            width: auto;
            border: 0;
        }
        button:hover {
            background-color:  #68A2B9;
            color: #001628;
        }
    </style>
</head>
<body>
    <button onclick="window.location.href='logout.php'">Logout</button>
    <button onclick="window.location.href='register.php'">Add User</button>
    <div id="intro">Mr/Ms [Full Name], Many Many Happy Returns Of The Day<br>Game time!!<br> Click on each letter to find questions, answering correct to which will open our <b>Surprises</b></div>
    <ul class="container">
        <li class="let">F</li>
        <li class="let">I</li>
        <li class="let">R</li>
        <li class="let">S</li>
        <li class="let">T</li>
        <li class="let">N</li>
        <li class="let">A</li>
        <li class="let">M</li>
        <li class="let">E</li>
    </ul><br><br>
    <div class="que-container">
        <span class="que"></span>
        <button class="hint-btn" onclick="hint()">Hint</button><br>
        <span class="hint"></span>
        <span class="ans-container">
            <input type="password" class="ans" placeholder="Type your answer here"/>
            <button onclick="verify()" class="ver-btn"> Check </button>
        </span>
    </div><br><br>
    <div class="result"></div>
    <iframe width="560" height="315" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" class="video"></iframe>
    <script type="text/javascript" src="landing.js"></script>
</body>
</html>