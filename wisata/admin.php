<?php

include "koneksi.php";

  if (isset($_POST['bsimpan']))
  {
    if (@$_GET['hal']=="edit")
    {
      $update = mysqli_query($koneksi, "UPDATE admin set 
                                        username = '$_POST[tusername]',
                                        password = '$_POST[tpassword]', 
                                        nama_lengkap = '$_POST[tnama]',
                                        no_hp = '$_POST[thp]'
                                        WHERE id = '$_GET[id]'
                                    ");
      if($update)
        {
          echo "<script>
                  alert('Ubah data berhasil !');
                  document.location='admin.php';
                </script>";
        } else  {
          echo "<script>
                  alert('Ubah data GAGAL !!!');
                  document.location='admin.php';
                </script>";
        }

    }else {
      $simpan = mysqli_query($koneksi, "INSERT INTO admin (username, password, nama_lengkap, no_hp) VALUES ('$_POST[tusername]','$_POST[tpassword]','$_POST[tnama]','$_POST[thp]')
                                    ");
        if($simpan)
        {
          echo "<script>
                  alert('Simpan data sukses!!');
                  document.location='admin.php';
                </script>";
        } else  {
          echo "<script>
                  alert('Simpan data GAGAL !!!');
                  document.location='admin.php';
                </script>";
        }
    }
  }

  if (isset($_GET['hal']))
  {
    if ($_GET['hal'] == "edit")
    {
      $tampil = mysqli_query($koneksi, "SELECT * from admin WHERE id = '$_GET[id]' ");
      $data = mysqli_fetch_array ($tampil);
      if ($data)
      {
        $vusername = $data['username'];
        $vpassword = $data['password'];
        $vnama = $data['nama_lengkap'];
        $vhp = $data['no_hp'];
      }
    }elseif ($_GET['hal'] == "hapus") {
      $hapus = mysqli_query($koneksi, "DELETE FROM admin WHERE id = '$_GET[id]' ");
        if ($hapus){
          echo "<script>
                  alert('Data Berhasil di Hapus !!!');
                  document.location='admin.php';
                </script>";
        }else  {
          echo "<script>
                  alert('Hapus data GAGAL !!!');
                  document.location='admin.php';
                </script>";
        }
    }
  }

?>
<?php include "header.php"; ?>
   
    <!-- Awal Content -->
      <div class="container">

        <?php
        if (isset($_GET['hal']))
          {
            if ($_GET['hal'] == "tambah" || $_GET['hal'] == "edit")
            {    
      ?>
              <div class="card mb-4"><!-- Awal Card Form -->
                  <div class="card-header bg-light">
                    Data Admin
                  </div>
                  <div class="card-body">
                    <form method="post" action="">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="tusername" class="form-control" value = "<?=@$vusername ?>" placeholder="Username" required>
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="tpassword" class="form-control" value = "<?=@$vpassword ?>" placeholder="Password" required>
                      </div>
                      <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="tnama" class="form-control" value = "<?=@$vnama ?>" placeholder="Nama Lengkap" required>
                      </div>
                      <div class="form-group">
                        <label>No HP</label>
                        <input type="text" name="thp" class="form-control" value = "<?=@$vhp ?>" placeholder="No HP" required>
                      </div>
                      

                      <button type="submit" class="btn btn-primary" name="bsimpan">Simpan</button>
                      <a href="admin.php" class="btn btn-danger">Kembali </a>


                    </form>
                  </div>
                </div><!-- Akhir Card Form -->
      <?php
        } }
      ?>
      <br>
            <a href="admin.php?hal=tambah" class="btn btn-primary">Tambah Data </a>
            <div class="card mt-2"><!-- Awal Card Tabel -->
              <div class="card-header bg-light">
                Data Admin
              </div>
              <div class="card-body">
                <table class="table table-bordered table-striped">
                  <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>Nama Lengkap</th>
                    <th>No HP</th>
                    <th>Aksi</th>
                  </tr>
                  <?php
                    $no  = 1;
                    $tampil = mysqli_query($koneksi, "SELECT * from admin order by id asc");
                    while($data = mysqli_fetch_array($tampil)) {                   
                  ?>
                  <tr>
                    <td><?=$no++; ?></td>
                    <td><?=$data['username']; ?></td>
                    <td><?=$data['nama_lengkap']; ?></td>
                    <td><?=$data['no_hp']; ?></td>
                    <td>
                      <a href="admin.php?hal=edit&id=<?=$data['id'] ?>" class="btn btn-warning">Edit </a>
                       <a href="admin.php?hal=hapus&id=<?=$data['id'] ?>" onclick="return confirm('Apakah yakin ingin menghapus data ini ?')" class="btn btn-danger">Hapus </a>
                       </td>
                  </tr>
                  <?php }; ?>
                </table>
              </div>
            </div><!-- Akhir Card Tabel -->
   
      </div>
    <!-- Akhir Content -->
    

    <?php include "footer.php"; ?>
     <!-- footer -->
  <div class="row footer">
          <div class="col text-center">
            <p>2024 Muhammad Bais Al hakiiki</p>
          </div>
        </div>

        <!-- akhir footer -->