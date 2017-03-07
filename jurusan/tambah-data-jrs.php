<?php
  include "../lib/koneksi.php";
?>
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
?>
  <div class="container">
    <div class="row">
      <div class="span12">
      <div class="input-group">
        <legend>Entri Data Jurusan</legend>
        <form method="POST" action="simpan-data-jrs.php">
          <div class="form-group">
            <div class="input-group">
            <label>Kode Jurusan</label>
            <input type="text" name="KodeJrs" class="form-control" id="KodeJrs" required></input>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
            <label>Nama Jurusan</label>
            <input type="text" name="NamaJrs" class="form-control" id="NamaJrs" required></input>
            </div>
          </div>
        <input type="submit" class="btn btn-info" name="submit" value="Simpan"></input>
        <input type="submit" class="btn btn-info" name="submit" value="Batal"></input>
      </form>
      </div>
      
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
  </body>
</html>