<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm nhân viên</title>
    <style>
    body{
        background-image: url("/chamcongnhanvien/assets/image/background.png");
    }
    h1{
        padding-top: 15px;
        text-align: center;
        background: -webkit-linear-gradient(#FFFFFF, #670BFF);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }


    .box1 {
        float: left;
        width: 20%;
        padding: 50px;
    }
    .box2 {
        float: left;
        width: 40%;
        padding: 50px;
    }
    .box3 {
        float: left;
        width: 40%;
        padding: 50px;
    }
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

    </style>
</head>
<body>
<?php 
    include_once(__DIR__ . '/../navbar.php');
?>
<h1>Thêm nhân viên</h1>

<div class="clearfix">
        <div class="box1" >
            
        </div>
        <div class="box2">
            <form class=""> 
                First name: <input type="text" name="firstname">
                <br><br><br><br>
                Last name:  <input type="text" name="lastname">
                <br><br><br><br>
                First name: <input type="text" name="firstname">
                <br><br><br><br>
                Last name:  <input type="text" name="lastname">
                <br><br><br><br>
            </form>
        </div>
        <div class="box3" >
            <form class=""> 
            First name: <input type="text" name="firstname">
                <br><br><br><br>
                Last name:  <input type="text" name="lastname">
                <br><br><br><br>
                First name: <input type="text" name="firstname">
                <br><br><br><br>
                Last name:  <input type="text" name="lastname">
                <br><br><br><br>
            </form>
        </div>
    </div>



</body>
</html>

