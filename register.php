<?php
    session_start();
    if(isset($_SESSION["name"])) {
    } else {
       header("location: index.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register | Surprise Template</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
    <style type="text/css">
        body {
            height: 90vh;
            width: 97%;
            background-color: #001628;
            color: #99D9D9;
            display: flex;
            justify-content: center;
            align-content: center;
        }
        body > div {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        h1 {
            min-width: 250px;
        }
        .container {
            padding: 20px;
            text-align: center;
            display: flex;
            justify-content: space-between;
            align-content: center;
            flex-wrap: wrap;
        }
        .container > div:first-of-type {
            margin-right: 40px;
            border-right: solid #99D9D9 1px;
        }
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
        input[type='submit'] {
            padding: 10px 20px;
            cursor: pointer;
            background-color: #002340;
            color: #fff;
            margin: 10px auto;
            width: 250px;
            border: 0;
        }
        input[type='submit']:hover {
            background-color:  #68A2B9;
            color: #001628;
        }
        @media screen and (max-width: 600px) {
            body {
                margin: 0;
                overflow: hidden;
            }
            .container {
                padding: 0;
                justify-content: center;
                overflow: hidden;
            }
            .container > div:first-of-type {
                margin-right: 0;
                border-right: 0;
                border-bottom: solid #99D9D9 1px;
            }
        }
    </style>
</head>
<body>
<div class="container">
        <div id="auto">
            <div></div>
            <div></div>
        </div>
        <div>
            <h1>Add User</h1>
            <input type="text" id="uname" placeholder="Username" value="" required>
            <input type="password" id="pwd" placeholder="Password" value="" required>
            <input type="password" id="repwd" placeholder="Re-enter Password" value="" required>
            <input type="submit" value="Signup" onclick="ver()">
            <input type="submit" value="Return" onclick="window.location.href = 'landing.php'">
            <div class="res"></div>
        </div>
    </div>
    <script>
        function ver() {
            var uname = document.getElementById('uname').value;
            var pwd = document.getElementById('pwd').value;
            var repwd = document.getElementById('repwd').value;

            if (pwd === "" || repwd == "" || uname == "") {
                document.getElementsByClassName('res')[0].innerHTML = "Please enter all the fields";
            } else if(pwd != repwd) {
                document.getElementsByClassName('res')[0].innerHTML = "Password and Re-entered password does not match";
            } else {
                var formdata = new FormData();
                formdata.append('uname', document.getElementById('uname').value);
                formdata.append('pwd', document.getElementById('pwd').value);
                formdata.append('repwd', document.getElementById('repwd').value);

                axios.post("reguser.php", formdata)
                .then (res => {
                    if (res.data == 'suc') {
                        window.location.href = 'landing.php';
                    } else {
                        document.getElementsByClassName('res')[0].innerHTML = res.data;
                    }
                })
                .catch(err => {
                    console.log("Error : " + err);
                });
            }
        }
    </script>
</body>
</html>