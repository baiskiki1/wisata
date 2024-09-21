<?php
include "koneksi.php"; // Mengimpor koneksi ke database
?>
<html>
<head>
  <title>Laporan Pengunjung</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="jumbotron jumbotron-fluid bg-dark">
        <div class="container">
          <h1 class="display-4">WISATA SEJARAH ‘Benteng Malborough </h1>
<p class="lead"> </p>
          <p class="lead">Jl. kampung cina / Bengkulu</p>
        </div>
      </div>
    <!-- Akhir Jumbotron -->

    <div class="container naek tombol">
      <div class="row">
        <div class="col">
            <nav class="navbar navbar-expand-lg bg-dark bunder">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item text-dark">
                    <a class="nav-link" href="beranda.php">Beranda </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pengunjung.php">pengunjung </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="admin.php">Admin </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="export.php">cetak laporan </a>
                  </li>
                </ul>
                <a href="logout.php" class="btn text-white"> Log Out </a>
              </div>
          </nav>
        </div>        
      </div>     
    </div>
      
    
    
<div class="container">
  <h2>Laporan Pengunjung</h2>
  <h4>(Riwayat)</h4>
  <div class="data-tables datatable-dark">
    <table class="table table-bordered" id="mauexport" width="100%" cellspacing="0"> 
      <thead>
        <tr>
          <th>No.</th>
          <th>Nama Pengunjung</th>
          <th>Tanggal Berkunjung</th>
          <th>Alamat</th>
        </tr>
      </thead>
      <tbody>
      <?php
        $no  = 1;
        $tampil = mysqli_query($koneksi, "SELECT * FROM pengunjung ORDER BY id_pengunjung ASC");
        while($data = mysqli_fetch_assoc($tampil)) {
      ?>
      <tr>
        <td><?=$no++; ?></td>
        <td><?=$data['nama_pengunjung']; ?></td>
        <td><?=$data['tanggal']." - ".$data['bulan']." - ".$data['tahun']; ?></td>
        <td><?=$data['alamat']; ?></td>
      </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>
</div>

<!-- Scripts untuk mengaktifkan DataTables dan tombol ekspor -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

<script>
$(document).ready(function() {
    $('#mauexport').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
});
</script>
</body>
</html>
