<?php
	include '../lib/koneksi.php';
	$KodeJrs = $_GET['KodeJrs'];


	$sql = "DELETE FROM tb_jurusan WHERE KodeJrs = '$KodeJrs'";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		mysqli_close($conn);
		echo "<script type='text/javascript'>
				alert('Data Berhasil di Hapus'); 
				window.location.href='data-jrs.php';
			  </script>"; 
	} else {
		mysqli_close($conn);
		echo "<script type='text/javascript'>
				alert('Data Gagal di Hapus'); 
				window.location.href='data-jrs.php';
			  </script>"; 
	}
?>
