 <?php
$merek = $dm['nama_merek'];
$qu = mysqli_query($connect,"SELECT * FROM tabel_ukuran WHERE id ='1'");
$du = mysqli_fetch_array ($qu);
$data_ukuran1 = $du['ukuran'];
?>

 <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="/asep"><img src="assets/img/iconsepatu.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">TOKO SEPATU</h5>
              	  
                  <form role="form" action="sortir.php" method="post" enctype="multipart/form-data">
                    <li class="mt">
                       <div class="col-sm-10">
                        <span class="help-block">Harga Minimum</span>
                         <input type="text" name="min_harga" class="form-control">
                        </div><br><br>
                       <div class="col-sm-10">
                        <span class="help-block">Harga Maximum</span>
                          <input type="text" name="max_harga" class="form-control"><br>
                       </div>
                       <div class="col-sm-10">
                       <button type="submit" class="btn btn-theme">Cari</button>
                     </div>
                  </li>
                </form>

                <div class="col-sm-10">
                        <h1>Ukuran Kaki <br><?php echo"$data_ukuran1"; ?> cm</h1>
                <div class="col-sm-10">
               
                
                <input type="submit" value="Refresh" onClick="document.location.reload(true)">



              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
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