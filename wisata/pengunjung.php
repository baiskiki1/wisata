<?php
include "koneksi.php";
  if (isset($_POST['bsimpan']))
  {
    if (@$_GET['hal']=="edit")
    {
      $update = mysqli_query($koneksi, "UPDATE pengunjung set 
                                        tanggal = '$_POST[ttanggal]',
                                        bulan = '$_POST[tbulan]',
                                        tahun = '$_POST[ttahun]',
                                        nama_pengunjung = '$_POST[tnama_pengunjung]',
                                        tahun = '$_POST[tahun]',
                                        alamat = '$_POST[talamat]' 
                                        WHERE id_pengunjung = '$_GET[id_pengunjung]'
                                    ");
      if($update)
        {
          echo "<script>
                  alert('Ubah data berhasil !');
                  document.location='pengunjung.php';
                </script>";
        } else  {
          echo "<script>
                  alert('Ubah data GAGAL !!!');
                  document.location='pengunjung.php';
                </script>";
        }

    }else {
      $simpan = mysqli_query($koneksi, "INSERT INTO pengunjung (nama_pengunjung, tanggal, bulan, tahun, alamat) VALUES ('$_POST[tnama_pengunjung]','$_POST[ttanggal]','$_POST[tbulan]','$_POST[ttahun]','$_POST[talamat]')
                                    ");
        if($simpan)
        {
          echo "<script>
                  alert('Simpan data sukses!!');
                  document.location='pengunjung.php';
                </script>";
        } else  {
          echo "<script>
                  alert('Simpan data GAGAL !!!');
                  document.location='pengunjung.php';
                </script>";
        }
    }
  }

  if (isset($_GET['hal']))
  {
    if ($_GET['hal'] == "edit")
    {
      $tampil = mysqli_query($koneksi, "SELECT * from pengunjung WHERE id_pengunjung= '$_GET[id_pengunjung]' ");
      $data = mysqli_fetch_array ($tampil);
      if ($data)
      {
        $vtanggal = $data['tanggal'];
        $vbulan = $data['bulan'];
        $vtahun = $data['tahun'];
        $vnama_donatur = $data['nama_pengunjung'];
        $vjumlah = $data['jumlah'];
        $valamat = $data['alamat'];
      }
    }elseif ($_GET['hal'] == "hapus") {
      $hapus = mysqli_query($koneksi, "DELETE FROM pengunjung WHERE id_pengunjung= '$_GET[id_pengunjung]' ");
        if ($hapus){
          echo "<script>
                  alert('Data Berhasil di Hapus !!!');
                  document.location='pengunjung.php';
                </script>";
        }else  {
          echo "<script>
                  alert('Hapus data GAGAL !!!');
                  document.location='pengunjung.php';
                </script>";
        }
    }
  }

?>
<?php include "header.php"; ?>
    

    <!-- Awal Content -->
      <div class="container mt-3">
        <div class="row">
          <div class="col">
            <?php
              if (isset($_GET['hal']))
                {
                  if ($_GET['hal'] == "edit" || $_GET['hal'] == "tambah")
                  {    
            ?>
            <div class="card mb-4"><!-- Awal Card Form -->
              <div class="card-header bg-light">
                Data Pengunjung
              </div>
                <div class="card-body">
                  <form method="post" action="">
                    <div class="form-group">
                      <label>Tanggal berkunjung</label>
                      <input type="date" name="ttanggal" class="form-control" value = "<?=@$vtanggal ?>" placeholder="Tanggal" required>
                    </div>
                   

                    <div class="form-group">
                      <label>Nama Pengunjung</label>
                      <input type="text" name="tnama_pengunjung" class="form-control" value = "<?=@$vnama_pengunjung ?>" placeholder="Nama_pengunjung" required>
                  </div>
                    <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" name="talamat" placeholder="Alamat" required><?=@$valamat?></textarea>
                    
                  </div>

                    <button type="submit" class="btn btn-primary" name="bsimpan">Simpan</button>
                    <a href="donatur.php" class="btn btn-danger">Kembali </a>


                  </form>
                </div>
              </div><!-- Akhir Card Form -->
              <?php
                } }
              ?>
          </div>
        </div>
      </div>
    <!-- Akhir Content -->
      <div class="container">
        
        <div class="row justify-content-center">
          <div class="col">
            <p class="text-center"><h3>Data pengunjung</h3></p>
            <hr>
            <a href="pengunjung.php?hal=tambah" class="btn btn-primary">Tambah Data Pengunjung </a>
            <table class="table table-bordered table-striped mt-2">
                <tr>
                  <th>No.</th>
                  <th>Nama pengunjung</th>
                  <th>Tanggal berkunjung</th>
                
                  <th>Alamat</th>
                  <th>Aksi</th>
                </tr>
                <?php
                  $no  = 1;
                  $tampil = mysqli_query($koneksi, "SELECT * from pengunjung order by id_pengunjung asc");
                  while($data = mysqli_fetch_array($tampil)) {                   
                ?>
                <tr>
                  <td><?=$no++; ?></td>
                  <td><?=$data['nama_pengunjung']; ?></td>
                  <td><?=$data['tanggal'].$data['bulan'].$data['tahun']; ?></td>
               
                  <td><?=$data['alamat']; ?></td>
                  <td>
                    <a href="pengunjung.php?hal=edit&id_pengunjung=<?=$data['id_pengunjung'] ?>" class="btn btn-warning">Edit </a>
                    <a href="pengunjung.php?hal=hapus&id_pengunjung=<?=$data['id_pengunjung']?>" onclick="return confirm('Apakah yakin ingin menghapus data ini ?')" class="btn btn-danger">Hapus </a>
                     </td>
                </tr>
                <?php }; ?>
              </table>
            
          </div>
        </div>
        
      </div>
              
      
                
      

    <?php include "footer.php"; ?>
     <!-- footer -->
  <div class="row footer">
          <div class="col text-center">
            <p>2024 Muhammad Bais Al hakiiki</p>
          </div>
        </div>

        <!-- akhir footer -->