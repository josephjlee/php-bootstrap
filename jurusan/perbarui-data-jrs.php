<?php
	include "../lib/koneksi.php";
	$KodeJrs = htmlentities(trim($_POST['KodeJrs']));
	$NamaJrs = htmlentities(trim($_POST['NamaJrs']));


	$sql = ("UPDATE tb_jurusan SET NamaJrs = '$NamaJrs' WHERE KodeJrs = '$KodeJrs'") or die(mysql_error());
	$result = mysqli_query($conn, $sql);	
	if ($result) {
		mysqli_close($conn);
		echo "<script type='text/javascript'>
				alert('Data Berhasil Diubah'); 
				window.location.href='data-jrs.php';
			  </script>"; 
	} else {
		mysqli_close($conn);
		echo "<script type='text/javascript'>
				alert('Data Gagal di Edit'); 
				window.location.href='data-jrs.php';
			  </script>"; 
	}
?>