<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xem chấm công</title>
    <link rel="stylesheet" href="/chamcongnhanvien/assets/css/style1.css" type="text/css" />
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
                        'DienThoai' => $row['DienThoai'],
                        'TrangThai' => $row['TrangThai']
                    );
                }
                /* --- End Truy vấn dữ liệu  --- */




                /* 
                    2.Truy vấn dữ liệu Chấm công
                */
                // Chuẩn bị câu truy vấn
                $chamcong = "select * from chitietchamcong";
                // Thực thi câu truy vấn SQL để lấy về dữ liệu
                $resultchamcong = mysqli_query($conn, $chamcong);
                $datachamcong = [];
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    $datachamcong[] = array(
                        'ID' => $row['ID'],
                        'Ngay' => $row['Ngay'],
                        'Gio' => $row['Gio'],
                        'TrangThai' => $row['TrangThai'],
                        'ID_NV' => $row['ID_NV'],
                        'ID_Calam' => $row['ID_Calam']

                    );
                }
                /* --- End Truy vấn dữ liệu  --- */
            ?>


<h2>XEM CHI TIẾT CHẤM CÔNG</h2>
<form name="frmchamcong" id="frmchamcong" method="post" action="">
    <div class="ngay"  >
        Chọn Ngày:           
        <input class="bday" type="date" name="Ngay" id="Ngay">
    </div>

<table class="table">
<tr>
    <th width="150" height="40" style = "text-align: center">STT</th>
    <th width="800" height="40" style = "text-align: center">Họ tên</th>
    <th width="800" height="40" style = "text-align: center">Trạng thái</th>
    <th width="800" height="40" style = "text-align: center">Lý do</th>
    <th width="500" height="40" style = "text-align: center">Giờ vào làm</th>
    <th width="800" height="40" style = "text-align: center">Ca làm</th>
    <th width="800" height="40" style = "text-align: center">Chỉnh sửa</th>
</tr>
<tr>
<td> 
    <div style="text-align : center"> 
        <?php foreach ($dataNhanvien as $nhanvien) : ?> 
            <option > <input type="text" id="NV" name="NV" value="<?= $nhanvien['ID'] ?>" > <?= $nhanvien['ID'] ?> </option>
        <?php endforeach; ?>
    </div>
</td>
<td>
    <div >
        <?php foreach ($dataNhanvien as $nhanvien) : ?>
            <option value="<?= $nhanvien['ID'] ?>"> <?= $nhanvien['HoTen'] ?></option>
        <?php endforeach; ?>
    </div>
</td>
<td style = "text-align: left">
    <div  id="TrangThai">
        <?php foreach ($datachamcong as $chamcong) : ?> 
            <input type="text"  value="<?= $chamcong['ID'] ?>" > <?= $chamcong['TrangThai'] ?>
        <?php endforeach; ?>
</div>
<td>
    <?php foreach ($datachamcong as $chamcong) : ?> 
        <input type="text"  value="<?= $chamcong['ID'] ?>" > <?= $chamcong['LyDo'] ?>
    <?php endforeach; ?>
</td>
    
</td>
<td style = "text-align: center">
    <input type="time" name="Gio" id="Gio" class="time">

</td>
<td></td>
<td><button class="btn btn-warning" name="btnEdit">Sửa</button></td>
</tr>

</table>

<button class="btn" name="btnSee" style="margin-left : 45% ; background: linear-gradient(180deg, #FFFFFF 17.86%, rgba(255, 255, 255, 0) 117.86%),
linear-gradient(0deg, #1BC5EB, #1BC5EB);">Xem chi tiết</button>
</form>



<script>
    $(document).ready(function(){
    $("p").hide(); // thêm dòng này để nội dung trong thẻ p ẩn lúc đầu
     
    $("#on").click(function(){
        $("p").hide();
    });
    $("#off").click(function(){
        $("p").show();
    });
});
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>