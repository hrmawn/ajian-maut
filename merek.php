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
                                    echo"Merek Berhasil di Tambah";
                                  }elseif($_GET['message'] == 2){
                                echo"Merek Berhasil di Ubah";    
                                  }elseif($_GET['message'] == 3){
                                echo"Merek Berhasil di Hapus";    
                                  }
                            }
                              ?>
            </p>
          	<div class="row mt">
              <div class="col-lg-6">
              
          <div class="content-panel">
                     
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>No</th>
                                  <th>Merek</th>
                                  <th>Aksi</th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php
    $query = mysqli_query($connect,"SELECT * FROM tabel_merek");
    $no = 1;
    while ($data = mysqli_fetch_array ($query)){
    ?>
                              <tr>
                                <td><?php echo $no; ?></td>
                                  <td><?php echo $data['nama_merek'];?></td>
                                  <td>
                                    <button data-toggle="modal" data-target="#myModal<?php echo $data['id']; ?>" class="btn btn-round btn-success">Ubah</button>
                                    <a href="hapus_merek.php?id=<?php echo $data['id']; ?>" class="btn btn-round btn-danger" onclick="return confirmSubmit()">Hapus</a>
                                  </td>
                              </tr>
                             <?php 
                             $no++;
                           }
                             ?>
                             <script>
                  function confirmSubmit()
                    {
                        var agree=confirm("Apakah anda yakin akan menghapus data ini?");
                        if (agree)
                            return true ;
                        else
                            return false ;
                    }
                </script> 
                          </tbody>
                      </table>
                  </section>
              </div>
              
              <?php
    $query = mysqli_query($connect,"SELECT * FROM tabel_merek");
    while ($data = mysqli_fetch_array ($query)){
    ?>     
          <!-- Modal -->
            <div class="modal fade" id="myModal<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Edit Merek</h4>
                  </div>
                  <form class="form-horizontal tasi-form" action="edit_merek.php?id=<?php echo $data['id']; ?>" name="save" method="post" enctype="multipart/form-data">
                  <div class="modal-body">
                    
                              <div class="form-group has-success">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Merek</label>
                                  <div class="col-lg-10">
                                      <input type="text" value="<?php echo $data['nama_merek'];?>" name="nama_merek" class="form-control" id="inputSuccess">
                                  </div>
                              </div>
                             

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
              </form>
                </div>
              </div>
            </div>
            <?php } ?>

              </div>
              
              <div class="col-lg-6">
                <div class="showback">
                
                  <h4>Tambah Merek</h4>
                  <form class="form-horizontal tasi-form" action="tambah_merek.php" name="save" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label class="col-sm-4 col-sm-4 control-label">Nama Merek</label>
                   <div class="col-sm-8">
                    <input type="text" name="nama_merek" class="form-control">
                    </div>
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Tambah</button>
                  </form>
                
        </div>
              </div>
            </div>
            
			
		</section>
      </section><!-- /MAIN CONTENT -->
<?php include"footer.php"; ?>
