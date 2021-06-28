<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
 
 .dropdown-menu > li.kopie > a {
    padding-left:5px;
}
.dropdown-submenu>.dropdown-menu {
   top:0;left:100%;
   margin-top:-6px;margin-left:-1px;
   -webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;
 }
  
.dropdown-submenu > a:after {
  border-color: transparent transparent transparent #333;
  border-style: solid;
  border-width: 5px 0 5px 5px;
  content: " ";
  display: block;
  float: right;  
  height: 0;     
  margin-right: -10px;
  margin-top: 5px;
  width: 0;
}
 
.dropdown-submenu:hover>a:after {
    border-left-color:#555;
 }

.dropdown-menu > li > a:hover, .dropdown-menu > .active > a:hover {
  text-decoration: underline;
  background-color: #8CE4F8;
}  
  
@media (max-width: 1000px) {
  .navbar-nav  {
     display: inline;
  }
  .navbar-default .navbar-brand {
    display: inline;
  }
  .navbar-default .navbar-toggle .icon-bar {
    background-color: #fff;
  }
  .navbar-default .navbar-nav .dropdown-menu > li > a {
    color: red;
    background-color: #ccc;
    border-radius: 4px;
    margin-top: 2px;   
  }
   .navbar-default .navbar-nav .open .dropdown-menu > li > a {
     color: #333;
   }
   .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
   .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
     background-color: #ccc;
   }

   .navbar-nav .open .dropdown-menu {
     border-bottom: 1px solid white; 
     border-radius: 0;
   }
  .dropdown-menu {
      padding-left: 10px;
      
  }
  .dropdown-menu .dropdown-menu {
      padding-left: 20px;
   }
   .dropdown-menu .dropdown-menu .dropdown-menu {
      padding-left: 30px;
      font-size:18px;
   }
   li.dropdown.open {
    border: 0px solid red;
   }

}
 
@media (min-width: 1400px) {
  ul.nav li:hover > ul.dropdown-menu {
    display: block;
  }
  #navbar {
    text-align: center;
  }
}

.collapse navbar-collapse{

height:200px;

}


</style>
<div id="navbar" >
  <nav class="navbar navbar-default navbar-static-top" role="navigation" style="height: 100px; background-color: white ; border-bottom: #8CE4F8 solid 2px;">
    <div class="navbar-header">
      <a href="#"><img src="/ChamcongNhanvien/assets/image/logo-company.png" alt="" style="width:100px; height:100px  "></a>
    </div>
    <div class="collapse navbar-collapse" id="navbar-collapse-1" style="height: 200px" >
      <ul class="nav navbar-nav">
        <li class="active"><a href="#" style="background-color: white ; font-size: 18px ;  padding-top: 40px; padding-right: 30px; padding-left: 30px; ">Trang chủ</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="background-color: white ; font-size: 18px ;padding-top: 40px; padding-right: 30px; padding-left: 30px; ">Nhân viên <b class="caret"></b></a> 
          <ul class="dropdown-menu">
            <li><a href="#"  style="font-size:16px;">Thêm nhân viên</a></li>
            <li><a href="#"style="font-size:16px;">Xem thông tin nhân viên</a></li>
          </ul>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="background-color: white ; font-size: 18px ;padding-top: 40px; padding-right: 30px; padding-left: 30px; ">Chấm công <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#" style="font-size:16px;">Chấm công</a></li>
            <li><a href="#" style="font-size:16px;">Xem chấm công</a></li>
          </ul>
        </li>
        <form class="navbar-form navbar-left" action="/action_page.php" style="padding-top: 30px; padding-left: 250px;">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default" style="background-color: #8CE4F8">Search</button>
    </form>
        
        <li class="dropdown">
        <a href="#" class="" style="background-color: white ; font-size: 18px ;padding-top: 30px; padding-right: 10px; padding-left: 160px; "><img src="/ChamcongNhanvien/assets/image/user.png" alt="" style="width:50px; height:50px "></a>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="background-color: white ; font-size: 18px ;padding-top: 50px; padding-right: 30px; padding-left: 10px; ">Admin <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#" style="font-size:16px;">Cài đặt</a></li>
            <li><a href="#" style="font-size:16px;">Đăng xuất</a></li>
          </ul>
        </li>
      </li>
    </div>
    <!-- /.navbar-collapse -->
  </nav>
</div>
