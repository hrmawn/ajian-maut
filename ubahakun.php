<?php
include"koneksi.php";
include"cek_login.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>ADMIN TOKO SEPATU</b></a>
            <!--logo end-->
            
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php">Logout</a></li>
            	</ul>
            </div>
        </header>
         <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="assets/img/admin.png" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Admin</h5>
              	  

                  <li class="mt">
                       <a class="active" href="admin.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Stok sepatu</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                       <a  class="active" href="merek.php">
                          <i class="fa fa-bookmark"></i>
                          <span>Merek</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                       <a  class="active" href="ubahakun.php">
                          <i class="fa fa-cogs"></i>
                          <span>Edit Akun</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                       <a  class="active" href="logout.php">
                          <i class="fa fa-sign-out"></i>
                          <span>Keluar</span>
                      </a>
                  </li>




              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Akun</h3>
            <p>
               <?php
                                   if (!empty($_GET['message'])) 
                                 {
                                  if($_GET['message'] == 1){
                                    echo"Akun Berhasil di Ubah";
                                  }
                            }
                              ?>
            </p>
          	<div class="row mt">
          		<div class="col-lg-6">
                <div class="form-panel">
                  <?php
                  $query = mysqli_query($connect,"SELECT * FROM admin WHERE id='1'");
                  $data = mysqli_fetch_array ($query);
                   ?>
                  <form class="form-horizontal tasi-form" action="proses_ubahakun.php" name="save" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Username</label>
                   <div class="col-sm-10">
                    <input type="text" name="username" value="<?php echo $data['username'];?>" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Password</label>
                   <div class="col-sm-10">
                    <input type="password" name="password" value="<?php echo $data['password'];?>" class="form-control">
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Ubah</button>
                  </form>
                </div>
        
          		</div>
          	</div>
			
		</section>
      </section><!-- /MAIN CONTENT -->
<?php include"footer.php"; ?>
