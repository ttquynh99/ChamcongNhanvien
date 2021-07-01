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
        padding-bottom:10px;
    }
    .bday{
        border: 2px solid #8CE4F8 ;
        text-align: center;
    }

    .table{
        padding-top:100px;
        border-spacing:50px;
        border-width:2px;  
        border-style:solid;
        
    }
    th{
        background-color: #8CE4F8;
        border-width:1px;  
        border-style:solid;
        border-top: 1px solid #eb1717;
        text-align: justify;
    }
    td{
        border-width:1px;  
        border-style:solid;
    }
    .ca{
        width: 300px; 
        padding-left: 70px;
        padding-bottom:30px;
        font-size: 16px;
    }
    .cars{
        width: 100px;
    }
    .option:hover {
    background-color:red;
    color:white;
    }
    .time{
        text-align: center;
        width: 100px;
    }



    </style>
</head>
<body>
<?php 
    include_once(__DIR__ . '/../navbar.php');
?>
<?php 
                // 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
                include_once(__DIR__ . '/../../connection.php');
                /* 
                    2.Truy vấn dữ liệu Ca làm 
                */
                // Chuẩn bị câu truy vấn
                $calam = "select * from calam";
                // Thực thi câu truy vấn SQL để lấy về dữ liệu
                $result = mysqli_query($conn, $calam);
                $data = [];
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    $dataCalam[] = array(
                        'ID' => $row['ID'],
                        'Calam' => $row['Calam']
                    );
                }
                /* --- End Truy vấn dữ liệu Ca làm --- */


                /* 
                    2.Truy vấn dữ liệu Nhân viên
                */
                // Chuẩn bị câu truy vấn
                $nhanvien = "select * from nhanvien";
                // Thực thi câu truy vấn SQL để lấy về dữ liệu
                $result = mysqli_query($conn, $nhanvien);
                $datanv = [];
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    $dataNhanvien[] = array(
                        'ID' => $row['ID'],
                        'HoTen' => $row['HoTen'],
                        'Email' => $row['Email'],
                        'NgaySinh' => $row['NgaySinh'],
                        'GioiTinh' => $row['GioiTinh'],
                        'Avatar' => $row['Avatar'],
                        'DiaChi' => $row['DiaChi'],
                        'Quan' => $row['Quan'],
                        'Tinh' => $row['Tinh'],
                        'ThanhPho' => $row['ThanhPho'],
                        'QuocGia' => $row['QuocGia'],
                        'NgayVaoLam' => $row['NgayVaoLam'],
                        'DienThoai' => $row['HoTDienThoaien'],
                        'TrangThai' => $row['TrangThai']
                    );
                }
                /* --- End Truy vấn dữ liệu  --- */
            ?>


<h2>THÊM CHẤM CÔNG</h2>

    <form  class="ngay" >
        Ngày:           
        <input class="bday" type="date" name="bday">
    </form>
    <form class="ca">
  <label for="cars">Ca làm : </label>
  <select name="cars" id="cars" class="cars">
  <?php foreach ($dataCalam as $calam) : ?>
    <option value = "<?= $calam['ID'] ?>"><?= $calam['Calam'] ?></option>
    <?php endforeach; ?>
  </select>
</form>


<table class="table">
<tr>
<th width="150" height="40" style = "text-align: center">STT</th>
<th width="800" height="40" style = "text-align: center">Họ tên</th>
<th width="800" height="40" style = "text-align: center">Trạng thái</th>
<th width="500" height="40" style = "text-align: center">Giờ vào làm</th>
</tr>
<tr>
<td>Minh Chinh</td>
<td>5000</td>
<td style = "text-align: left"><div class="radio">
  <label><input type="radio" name="optradio" checked>On</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio">Off</label>
</div></td>
<td style = "text-align: center">
    <input type="time" name="time" class="time">

</td>
</tr>

</table>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>