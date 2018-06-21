<?php 
include"koneksi.php";
include"header.php"; 
$min_harga = $_POST['min_harga'];
$max_harga = $_POST['max_harga'];

$qu = mysqli_query($connect,"SELECT * FROM tabel_ukuran WHERE id ='1'");
$du = mysqli_fetch_array ($qu);
$data_ukuran = $du['ukuran'];
?>
 <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src="assets/img/iconsepatu.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered"><TABLE>TOKO SEPATU</TABLE></h5>
                  
                  <form role="form" action="sortir.php" method="post" enctype="multipart/form-data">
                    <li class="mt">
                       <div class="col-sm-10">
                        <span class="help-block">Harga Minimum</span>
                         <input type="text" name="min_harga" value="<?php echo $min_harga?>" class="form-control">
                        </div><br><br>
                       <div class="col-sm-10">
                        <span class="help-block">Harga Maximum</span>
                          <input type="text" name="max_harga" value="<?php echo $max_harga?>" class="form-control"><br>
                       </div>
                       <div class="col-sm-10">
                       <button type="submit" class="btn btn-theme">Cari</button>
                     </div>
                  </li>
                </form>
                  



              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> UKURAN SEPATU <?php echo $data_ukuran ?> CM</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		
					
					
					<div class="row">
<?php
   $query = mysqli_query($connect,"SELECT * FROM tabel_sepatu WHERE ukuran_lain = '$data_ukuran' AND harga BETWEEN $min_harga AND $max_harga");
    while ($data = mysqli_fetch_array ($query)){
    ?>
						<div class="col-lg-3 col-md-3 col-sm-3 mb">
							<div class="product-panel-2 pn">
								<div class="badge badge-hot"></div>
								<img src="gambarsepatu/<?php echo $data['gambar'];?>" width="150px" alt="">
								<h5 class="mt" style="text-transform: uppercase;"><?php echo $data['merek'];?></h5>
                <h5 style="text-transform: uppercase;"><?php echo $data['tipe'];?></h5>
								<h6>HARGA: <?php echo number_format($data['harga']);?></h6>
								<button class="btn btn-small btn-theme04" data-toggle="modal" data-target="#myModal<?php echo $data['id']; ?>">DETAIL</button>
							</div>
						</div>
						<?php 
                           }
                             ?>
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
                    <h4 class="modal-title" id="myModalLabel">Detail Sepatu</h4>
                  </div>
                  <form class="form-horizontal tasi-form" name="save" action="tambah_keranjang.php?id=<?php echo $data['id']; ?>" method="post" enctype="multipart/form-data">
                  <div class="modal-body">
                    
                              <div class="form-group has-success">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Merek</label>
                                  <div class="col-lg-10">
                                      <p>: <?php echo $data['merek'];?></p>
                                  </div>
                              </div>
                             <div class="form-group has-success">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Tipe</label>
                                  <div class="col-lg-10">
                                      <p>: <?php echo $data['tipe'];?></p>
                                  </div>
                              </div>
                               <div class="form-group has-success">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Ukuran</label>
                                  <div class="col-lg-10">
                                      <p>: <?php echo $data['ukuran'];?></p>
                                  </div>
                              </div>
                               <div class="form-group has-success">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Ukuran(cm)</label>
                                  <div class="col-lg-10">
                                      <p>: <?php echo $data['ukuran_lain'];?></p>
                                  </div>
                              </div>
                               <div class="form-group has-success">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Stok</label>
                                  <div class="col-lg-10">
                                      <p>: <?php echo $data['stok'];?></p>
                                  </div>
                              </div>
                               <div class="form-group has-success">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Harga</label>
                                  <div class="col-lg-10">
                                      <p>: <?php echo number_format($data['harga']);?></p>
                                  </div>
                              </div>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-primary">Masuk Keranjang</button>
                  </div>
              </form>
                </div>
              </div>
            </div>
            <?php } ?>
			
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
<?php include"footer.php"; ?>
