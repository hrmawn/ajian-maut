<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Toko Sepatu</title>

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

    <script>
  function reloadpage() 
  {
    location.reload()
  }
</script>

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
            <a href="/asep" class="logo"><b>TOKO SEPATU</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
              <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
              <a  href="keranjang.php">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="badge bg-theme">
                        <?php
$qk = mysqli_query($connect,"SELECT * FROM tabel_keranjang WHERE status='0'");
$dk = mysqli_num_rows($qk);
echo $dk;
?>
                        </span>
                        </a>
               </li>
               </ul>         
            </div>
            
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                   <!--  <li><a class="logout" href="login.html">Logout</a></li> -->

            	</ul>
            </div>
        </header>