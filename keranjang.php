<?php 
include"koneksi.php";
include"header.php";
include"sidebar.php"; 
?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> KERANJANG SEPATU</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		
					
					
					<div class="row">
<?php
    $query = mysqli_query($connect,"SELECT tabel_keranjang.id_sepatu, tabel_sepatu.id,tabel_sepatu.gambar,tabel_sepatu.merek,tabel_sepatu.tipe,tabel_sepatu.harga FROM tabel_keranjang JOIN tabel_sepatu ON tabel_keranjang.id_sepatu = tabel_sepatu.id  WHERE status = '0'");
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
                  <form class="form-horizontal tasi-form" name="save" action="beli.php?id=<?php echo $data['id']; ?>" method="post" enctype="multipart/form-data">
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
                    <a href="hapus_beli.php?id=<?php echo $data['id'];?>" class="btn btn-danger">Hapus</a>
                    <button type="submit" class="btn btn-primary">Beli</button>
                  </div>
              </form>
                </div>
              </div>
            </div>
            <?php } ?>
			
		</section>
      </section><!-- /MAIN CONTENT -->
<?php include"footer.php"; ?>
