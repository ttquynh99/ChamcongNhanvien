<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm nhân viên</title>
    <script src="../../vendor/jquery-3.6.0.min.js"></script>
    <!-- <link rel="stylesheet" href="../../vendor/bootstrap/css/bootstrap.min.css"> -->
    <style>
        body {
            background-image: url("/chamcongnhanvien/assets/image/background.png");
        }

        h1 {
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

        .bth {
            width: 100px;
            margin-top: 50px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body>

    <!-- Truy vấn dữ liệu -->
    <?php
    include_once(__DIR__ . '/../navbar.php');

    include_once __DIR__ . '../../../connection.php';
    // Truy vấn dữ liệu Phòng Ban
    $sql = "SELECT * FROM phongban";
    $result = mysqli_query($con, $sql);
    $data_pb = [];
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $data_pb[] = array(
            'idphongban' => $row['ID'],
            'tenphongban' => $row['TenPhongBan']
        );
    }
    // End Truy Vấn 

    // Truy vấn dữ liệu Chức Vụ
    $sql1 = "SELECT * FROM chucvu";
    $result1 = mysqli_query($con, $sql1);
    $data_cv = [];
    while ($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
        $data_cv[] = array(
            'idchucvu' => $row1['ID'],
            'tenchucvu' => $row1['ChucVu']
        );
    }
    // End truy vấn 

    // Truy vấn dữ liệu Tỉnh thành
    include_once __DIR__ . '../../nhanvien/province/csdl_tt.php';
    // End truy vấn


    ?>

    <!-- End Truy vấn -->


    <h1>Thêm nhân viên</h1>
    <form action="#" method="POST">
        <div class="clearfix">
            <!-- Start Box 1 -->
            <div class="box1">

            </div>
            <!-- End Box 1 -->



            <!-- Start Box 2 -->
            <div class="box2" style="height: 500px;">
                <form class="">
                    <table>
                        <tr>
                            <th> Họ và Tên: </th>
                            <td><input type="text" name="name" id="name"></td>

                        </tr>
                        <tr>
                            <td><br><br><br></td>
                        </tr>
                        <tr>
                            <th>Ngày Sinh:</th>
                            <td><input type="date" name="birth" id="birth"></td>
                        </tr>
                        <tr>
                            <td><br><br><br></td>
                        </tr>
                        <tr>
                            <th>Địa Chỉ:</th>
                            <td><input type="text" name="address" id="address"></td>
                        </tr>
                        <tr>
                            <td><br><br><br></td>
                        </tr>
                        <tr>
                            <th>Tỉnh/Thành Phố:</th>
                            <td>
                                <select name="province" id="province" style="text-align: center;">
                                    <option value="">--Chọn Tỉnh-- </option>
                                    <?php foreach ($data as $province) : ?>
                                        <option value="<?= $province['idprovince'] ?>"> <?= $province['nameprovince'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td><br><br><br></td>
                        </tr>
                        <tr>
                            <th>Ngày vào làm:</th>
                            <td><input type="date" name="day_work" id="day_work"></td>
                        </tr>
                        <tr>
                            <td><br><br><br></td>
                        </tr>
                        <tr>
                            <th>Phòng ban: </th>
                            <td>

                                <select name="department" id="department">

                                    <option value="">Phòng ban</option>
                                    <?php foreach ($data_pb as $pb) : ?>
                                        <option value="<?= $pb['idphongban'] ?>"><?= $pb['tenphongban'] ?></option>
                                    <?php endforeach; ?>
                                </select>

                            </td>
                        </tr>

                    </table>

                    <br><br><br><br>
                </form>
            </div>
            <!-- End Box 2 -->

            <!-- Start Box 3 -->
            <div class="box3" style="height: 500px;">
                <form class="">
                    <table>
                        <tr>
                            <th>Email:</th>
                            <td><input type="text" name="email" id="email" placeholder="name@example.com"></td>
                        </tr>
                        <tr>
                            <td><br><br><br></td>
                        </tr>
                        <tr>
                            <th>Giới tính:</th>
                            <th>
                                <input type="radio" name="gender" id="gender"> Nam &nbsp;&nbsp;&nbsp;
                                <input type="radio" name="gender" id="gender"> Nữ
                            </th>
                        </tr>
                        <tr>
                            <td><br><br><br></td>
                        </tr>
                        <tr>
                            <th>Trạng thái:</th>
                            <td><textarea name="status" id="status" cols="25" rows="1.5"></textarea></td>
                        </tr>
                        <tr>
                            <td><br><br><br></td>
                        </tr>
                        <tr>
                            <th>Quận/Huyện:</th>
                            <td>
                                <select name="district" id="district">
                                    <option value="">--Chưa chọn Tỉnh-- </option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><br><br><br></td>
                        </tr>

                        <tr>
                            <th>Phường/Xã</th>
                            <td>
                                <select name="ward" id="ward">
                                    <option value="">--Chọn Quận/Huyện-- </option>
                                    <?php foreach ($data_ward as $province) : ?>
                                        <option value="<?= $province['idprovince'] ?>"> <?= $province['nameprovince'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><br><br><br></td>
                        </tr>
                        <tr>
                            <th>Chức vụ: </th>
                            <td>
                                <select name="position" id="position">
                                    <option value="">Chức vụ</option>
                                    <?php foreach ($data_cv as $cv) : ?>
                                        <option value="<?= $cv['idchucvu'] ?>"><?= $cv['tenchucvu'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>

                    </table>
                    <button type="submit" class="bth-login btn btn-primary" id="bth-login">Thêm Nhân Viên</button>

                </form>
            </div>
            <!-- End Box 3 -->
        </div>

        <div class="bth">
            
        </div>
    </form>

    <?php
    // include_once __DIR__ . '/data.php';
    ?>

    <script>
        jQuery(document).ready(function($) {
            $("#province").change(function(event) {
                provinceID = $("#province").val();
                $.post('district.php', {
                    "provinceid": provinceID
                }, function(data) {
                    $("#district").html(data);
                })
            })
            $("#district").change(function(event) {
                districtID = $("#district").val();
                $.post('ward.php', {
                    "districtid": districtID
                }, function(data) {
                    $("#ward").html(data);
                })
            })
        })
    </script>
</body>

</html>