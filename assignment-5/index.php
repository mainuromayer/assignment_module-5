<?php


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Form</title>
    <style>
        *{
            margin: 0 auto;
        }
        
        body {
            margin: 250px 440px;
            background-color: #F0F4FF;
        }
        
        body form {
            width: 500px;
            background-color: #FFFFFF;
            padding: 50px;
            border-radius: 5px;
        }

        form label {
            color: #3F5160;
            line-height: 40px;
        }
        
        form input {
            padding: 12px;
            width: 95%;
            border-radius: 5px;
            background-color: #E9EEF1;
            border: none;
            font-size: 14px;
        }

        hr {
            margin-top: 25px;
            border: 0.2px solid #ccc;

        }
        
        form button {
            padding: 12px;
            width: 200px;
            display: block;
            margin: 30px auto;
            cursor: pointer;
            border-radius: 5px;
            background-color: #428BE1;
            border: none;
            color: #FFFFFF;
            font-size: large;
        }
    </style>
</head>
<body>
    <form action="control.php" method="POST" enctype="multipart/form-data">
        <label for="">Name :
        <input type="text" name="user_name" placeholder="Enter your Name">
        </label>
        <br>
        <label for="">Email :
        <input type="email" name="user_email" placeholder="Enter your Email">
        </label>
        <hr>
        <button type="submit">Submit</button>
    </form>
</body>
</html>