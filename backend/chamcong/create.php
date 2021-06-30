<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm chấm công</title>
    <style>
    body{
        background-image: url("/chamcongnhanvien/assets/image/background.png");
    }
    h2{
        padding-top: 15px;
        text-align: center;
        background: -webkit-linear-gradient(#FFFFFF, #670BFF);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .ngay{
        text-align: center;
        padding-top: 30px;
        font-size:16px;
        padding-bottom:30px;
    }
    .bday{
        border: 2px solid #8CE4F8 ;
        text-align: center;
    }

    .table{
        border:1px solid red;
        border-spacing:50px;
        
    }
    .th,td {
    }

    
    </style>
</head>
<body>
<?php 
    include_once(__DIR__ . '/../navbar.php');
?>
<h2>THÊM CHẤM CÔNG</h2>

    <form  class="ngay" >
        Ngày:           
        <input class="bday" type="date" name="bday">
    </form>


<table class="table">
<tr>
<th width="150" height="50">STT</th>
<th width="800" height="50" >Họ tên</th>
<th width="800" height="50">Trạng thái</th>
<th width="500" height="50">Giờ vào làm</th>
</tr>
<tr>
<td>Minh Chinh</td>
<td>5000</td>
<td>Minh Chinh</td>
<td>5000</td>
</tr>
<tr>
<td>Duy Manh</td>
<td>7000</td>
<td>Minh Chinh</td>
<td>5000</td>
</tr>
</table>
</body>
</html>

