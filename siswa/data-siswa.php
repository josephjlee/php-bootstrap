<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Aplikasi Absensi SMS Gateway</title>

    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/sticky-footer-navbar.css" rel="stylesheet">
    <link href="../assets/css/navbar-static-top.css" rel="stylesheet">
  </head>
  <body>
  <?php
    include '../menu.php';
    $KodeKls = isset($_POST['KodeKls'])? $_POST['KodeKls'] : '';
  ?>
  <div class="container">
  <div class="row">
  <legend>Manajemen Data Siswa</legend>
  <p><a href="tambah-data-siswa.php"><button type="button" class="btn btn-primary">Tambah Data</button></a></p>
  <div class="table-responsive">
  <table class="table table-condensed table-bordered">
      <thead>
      <tr>
        <th width='5'>No.</th>
        <th>NIS</th>
        <th>Nama Siswa</th>
        <th>Jenis Kelamin</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Agama</th>
        <th>Alamat</th>
        <th>Kode Kelas</th>
        <th align="center">Aksi</th>
      </tr>
      </thead>
    <tbody>
    <?php
        include '../lib/koneksi.php';
        $sql = "SELECT * FROM tb_siswa";
        $result = mysqli_query($conn, $sql);
        $i = 1;
        $rows = mysqli_num_rows($result);
        if ($rows == 0) {
          echo "<td colspan='11'>Data kosong. Silakan tambah data!</td>";
        } else {
          $No = 1;
          while ($data = mysqli_fetch_array($result)) {
    ?>
        <tr>
        <td><?php echo $No; ?></td>
        <td><?php echo $data['NIS']; ?></td>
        <td><?php echo $data['NamaSiswa']; ?></td>
        <td><?php echo $data['JenisKelamin']; ?></td>
        <td><?php echo $data['TempatLahir']; ?></td>
        <td><?php echo $data['TanggalLahir']; ?></td>
        <td><?php echo $data['Agama']; ?></td>
        <td><?php echo $data['AlamatSiswa']; ?></td>
        <td><?php echo $data['KodeKls']; ?></td>
        <td align="center">
        <a href="ubah-data-siswa.php?NIS=<?php echo $data['NIS'];?>">
        <span class="glyphicon glyphicon-edit" aria-hidden="true" title="Ubah"></span>
        </a> ||
        <a href="hapus-data-siswa.php?NIS=<?php echo $data['NIS'];?>">
        <span class="glyphicon glyphicon-trash" aria-hidden="true" title="Hapus"></span>
        </a>
        </td>
      </tr>
      <?php  
        $No++;
        }
      }
    ?>
    </tbody>
    </table>
  </div>
  </div>
  </div>
 <footer class="footer" >
  <div class="container" align="center">
  <p><b>Aplikasi CRUD dengan Bootstrap</b></p>
  <p><b>&copy; 2016 <a href="https://twitter.com/hafismuh" target="_blank">hfsmh.com</a></p>
  </div>
</footer>
    <script src="../assets/js/jquery.js"></script>  
    <script src="../assets/js/bootstrap.min.js"></script>

    </script>
  </body>
</html>
