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
          	<h3><i class="fa fa-angle-right"></i> Data Sepatu</h3>
            <p>
               <?php
                                   if (!empty($_GET['message'])) 
                                 {
                                  if($_GET['message'] == 1){
                                    echo"Sepatu Berhasil di Tambah";
                                  }elseif($_GET['message'] == 2){
                                echo"Sepatu Berhasil di Ubah dengan Gambar";    
                                  }elseif($_GET['message'] == 3){
                                echo"Sepatu Berhasil di Ubah Tanpa Gambar";    
                                  }elseif($_GET['message'] == 4){
                                echo"Sepatu Berhasil di Hapus Gambar";
                              }
                            }
                              ?>
            </p>
          	<div class="row mt">
          		<div class="col-lg-12">
          		
					<div class="content-panel">
                      <h4><button class="btn btn-round btn-primary" data-toggle="modal" data-target="#myModal">+Tambah</button></h4>
                          <section id="unseen">
                            <table class="table table-bordered">
                              <thead>
                              <tr>
                                  <th>No</th>
                                  <th>Merek</th>
                                  <th>Tipe</th>
                                  <th>Ukuran</th>
                                  <th>Ukuran(cm)</th>
                                  <th>Stok</th>
                                  <th>Gambar</th>
                                  <th>Harga</th>
                                  <th>Aksi</th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php
    $query = mysqli_query($connect,"SELECT * FROM tabel_sepatu");
    $no = 1;
    while ($data = mysqli_fetch_array ($query)){
       $stok = $data['stok'];
      if ($stok == '0') {
    ?>
                              <tr style="background-color:#ff7373;color: #3a3939;">
                                <th><?php echo $no; ?></th>
                                  <th><?php echo $data['merek'];?></th>
                                  <th><?php echo $data['tipe'];?></th>
                                  <th><?php echo $data['ukuran'];?></th>
                                  <th><?php echo $data['ukuran_lain'];?></th>
                                  <th><?php echo $data['stok'];?></th>
                                  <th><img src="gambarsepatu/<?php echo $data['gambar'];?>" width="70" alt=""></th>
                                   <th><?php echo number_format($data['harga']);?></th>
                                  <th>
                                  	<button data-toggle="modal" data-target="#myModal<?php echo $data['id']; ?>" class="btn btn-round btn-success">Ubah</button>
                                  	<a href="hapus_sepatu.php?id=<?php echo $data['id']; ?>" class="btn btn-round btn-danger" onclick="return confirmSubmit()">Hapus</a>
                                  </th>
                              </tr>
                             <?php 
                          
    }elseif ($stok <= '5') {
      ?>
      <tr style="background-color: #f5fd2f;color: #3a3939;">
                                <th><?php echo $no; ?></th>
                                  <th><?php echo $data['merek'];?></th>
                                  <th><?php echo $data['tipe'];?></th>
                                  <th><?php echo $data['ukuran'];?></th>
                                  <th><?php echo $data['ukuran_lain'];?></th>
                                  <th><?php echo $data['stok'];?></th>
                                  <th><img src="gambarsepatu/<?php echo $data['gambar'];?>" width="70" alt=""></th>
                                   <th><?php echo number_format($data['harga']);?></th>
                                  <th>
                                    <button data-toggle="modal" data-target="#myModal<?php echo $data['id']; ?>" class="btn btn-round btn-success">Ubah</button>
                                    <a href="hapus_sepatu.php?id=<?php echo $data['id']; ?>" class="btn btn-round btn-danger" onclick="return confirmSubmit()">Hapus</a>
                                  </th>
                              </tr>
                             <?php 
      }else{ ?>
  <tr style="background-color: #f3f3f7;color: #3a3939;">
                                <th><?php echo $no; ?></th>
                                  <th><?php echo $data['merek'];?></th>
                                  <th><?php echo $data['tipe'];?></th>
                                  <th><?php echo $data['ukuran'];?></th>
                                  <th><?php echo $data['ukuran_lain'];?></th>
                                  <th><?php echo $data['stok'];?></th>
                                  <th><img src="gambarsepatu/<?php echo $data['gambar'];?>" width="70" alt=""></th>
                                   <th><?php echo number_format($data['harga']);?></th>
                                  <th>
                                    <button data-toggle="modal" data-target="#myModal<?php echo $data['id']; ?>" class="btn btn-round btn-success">Ubah</button>
                                    <a href="hapus_sepatu.php?id=<?php echo $data['id']; ?>" class="btn btn-round btn-danger" onclick="return confirmSubmit()">Hapus</a>
                                  </th>
                              </tr>
                             <?php 
                             
      }
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
          		<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						        <h4 class="modal-title" id="myModalLabel">Tambah Sepatu</h4>
						      </div>
						      <form class="form-horizontal tasi-form" action="proses_tambah_sepatu.php" name="save" method="post" enctype="multipart/form-data">
						      <div class="modal-body">
						        
                              <div class="form-group has-success">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Merek</label>
                                  <div class="col-lg-10">
                                   <select name="merek" class="form-control">
                                    <option value="Kosong">-Pilih-</option>
                                    <?php
                                    $qm = mysqli_query($connect,"SELECT * FROM tabel_merek");
                                    while ($dm = mysqli_fetch_array ($qm)){
                                    ?>
                                    <option value="<?php echo $dm['nama_merek'];?>"><?php echo $dm['nama_merek'];?></option>
                                    <?php } ?>
                                  </select>
                                  </div>
                              </div>
                             <div class="form-group has-success">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Tipe</label>
                                  <div class="col-lg-10">
                                      <input type="text" name="tipe" class="form-control" id="inputSuccess">
                                  </div>
                              </div>
                               <div class="form-group has-success">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Ukuran</label>
                                  <div class="col-lg-10">
                                      <input type="text" name="ukuran" class="form-control" id="inputSuccess">
                                  </div>
                              </div>
                               <div class="form-group has-success">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Ukuran(cm)</label>
                                  <div class="col-lg-10">
                                      <input type="text" name="ukuran_lain" class="form-control" id="inputSuccess">
                                  </div>
                              </div>
                               <div class="form-group has-success">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Stok</label>
                                  <div class="col-lg-10">
                                      <input type="text" name="stok" class="form-control" id="inputSuccess">
                                  </div>
                              </div>
                               <div class="form-group has-success">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Harga</label>
                                  <div class="col-lg-10">
                                      <input type="text" name="harga" class="form-control" id="inputSuccess">
                                  </div>
                              </div>
                               <div class="form-group has-success">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Gambar</label>
                                  <div class="col-lg-10">
                                      <input type="file" name="gambar" class="form-control" id="inputSuccess">
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
              <?php
    $query = mysqli_query($connect,"SELECT * FROM tabel_sepatu");
    while ($data = mysqli_fetch_array ($query)){
    ?>     
          <!-- Modal -->
            <div class="modal fade" id="myModal<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Edit Sepatu</h4>
                  </div>
                  <form class="form-horizontal tasi-form" action="proses_edit_sepatu.php?id=<?php echo $data['id']; ?>" name="save" method="post" enctype="multipart/form-data">
                  <div class="modal-body">
                    
                              <div class="form-group has-success">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Merek</label>
                                  <div class="col-lg-10">
                                      <select name="merek" class="form-control">
                                    <option value="<?php echo $data['merek'];?>"><?php echo $data['merek'];?></option>
                                    <option value="Kosong">-Pilih-</option>

                                    <?php
                                    $qm = mysqli_query($connect,"SELECT * FROM tabel_merek");
                                    while ($dm = mysqli_fetch_array ($qm)){
                                    ?>
                                    <option value="<?php echo $dm['nama_merek'];?>"><?php echo $dm['nama_merek'];?></option>
                                    <?php } ?>
                                  </select>
                                  </div>
                              </div>
                             <div class="form-group has-success">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Tipe</label>
                                  <div class="col-lg-10">
                                      <input type="text" value="<?php echo $data['tipe'];?>" name="tipe" class="form-control" id="inputSuccess">
                                  </div>
                              </div>
                               <div class="form-group has-success">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Ukuran</label>
                                  <div class="col-lg-10">
                                      <input type="text" value="<?php echo $data['ukuran'];?>" name="ukuran" class="form-control" id="inputSuccess">
                                  </div>
                              </div>
                               <div class="form-group has-success">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Ukuran(cm)</label>
                                  <div class="col-lg-10">
                                      <input type="text" value="<?php echo $data['ukuran_lain'];?>" name="ukuran_lain" class="form-control" id="inputSuccess">
                                  </div>
                              </div>
                               <div class="form-group has-success">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Stok</label>
                                  <div class="col-lg-10">
                                      <input type="text" value="<?php echo $data['stok'];?>" name="stok" class="form-control" id="inputSuccess">
                                  </div>
                              </div>
                               <div class="form-group has-success">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Harga</label>
                                  <div class="col-lg-10">
                                      <input type="text" value="<?php echo $data['harga'];?>" name="harga" class="form-control" id="inputSuccess" >
                                  </div>
                              </div>
                               <div class="form-group has-success">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Gambar</label>
                                  <div class="col-lg-10">
                                      <input type="file" name="gambar" class="form-control" id="inputSuccess">
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
          	</div>
			
		</section>
      </section><!-- /MAIN CONTENT -->
      <script>
      function convertToRupiah(objek) {
      separator = ".";
      a = objek.value;
      b = a.replace(/[^\d]/g,"");
      c = "";
      panjang = b.length;
      j = 0;
      for (i = panjang; i > 0; i--) {
        j = j + 1;
        if (((j % 3) == 1) && (j != 1)) {
          c = b.substr(i-1,1) + separator + c;
        } else {
          c = b.substr(i-1,1) + c;
        }
      }
      objek.value = c;

    } 
</script>
<!-- onkeyup="convertToRupiah(this); -->
<?php include"footer.php"; ?>
