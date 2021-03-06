
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome-free-5.15.3-web/css/all.css">
    <title>Login</title>
</head>

<body>


    <!-- Title -->
    <div class="frame">
        <div class="frame1">
            <img src="../ChamcongNhanvien/assets/image/logo-company.png" alt="logo">
            <h2>COMPANY</h2> 
        </div>
        
    <!-- End Title -->
    
    <!--Form Log In  -->
        <div class="login">
            <div class="frame1">
                <div id="demotext">
                    <H1>Đăng Nhập</H1>
                </div>

            </div>
            <form method="post" action="" class="form-group-login">

                <div class="col-auto">
                    <label class="lb-group-login" for="inlineFormInputGroup-user">Username</label>

                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="far fa-user fa-1.5x"></i> </div>
                        </div>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                    </div>
                </div>
                <div class="col-auto">
                    <label class="lb-group-login" for="inlineFormInputGroup-password">Password</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-lock fa-1.5px"></i> </div>
                        </div>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Password">
                    </div>
                </div>
                <button type="submit" class="bth-login btn btn-primary" id="bth-login" name="login">Log In</button>
            </form>
        </div>
        <!-- End Form Log In -->
    </div>

    <script src="../ChamcongNhanvien/vendor/jquery-3.6.0.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>