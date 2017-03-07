<?php
	include "../lib/koneksi.php";
	$KodeJrs = htmlentities(trim($_POST['KodeJrs']));
	$NamaJrs = htmlentities(trim($_POST['NamaJrs']));

	$sql = ("INSERT INTO tb_jurusan (KodeJrs, NamaJrs)
		VALUES ('$KodeJrs', '$NamaJrs')") or die(mysql_error());
	$result = mysqli_query($conn, $sql);
		
	header("location: data-jrs.php");
?>