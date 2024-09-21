<?php 
  session_start();
  if($_SESSION['status']!="login"){
    header("location:index.php?pesan=belum_login");
  }
?>
<?php include "header.php"; ?>
<br>

    <!-- container -->
      <div class="container">
        <!-- konten -->
        <div class="row konten">
          <div class="col">
            <img src="img/benteng.jpg" alt="Bengkulu" class="img-fluid float-left">          
            <h3>WISATA SEJARAH<span>‘Benteng Marlborough</span></h3>
            <p>Nama Benteng : ‘Benteng Marlborough </p>
          
        </div>

        <!-- konten -->
      </div>  

    
 
    <?php include "footer.php"; ?>
     <!-- footer -->
  <div class="row footer">
          <div class="col text-center">
            <p>2024 Muhammad Bais Al hakiiki</p>
          </div>
        </div>

        <!-- akhir footer -->