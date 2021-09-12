<?php
include "conn.php";
$id_kategoti = $_POST['id_kategoti'];
$nama_kategoti = $_POST['nama_kategoti'];
$insert = $mysqli->query("INSERT INTO kategoti(id_kategoti,nama_kategoti)
						VALUES('$id_kategoti','$nama_kategoti')");
if ($insert) {
	echo "<script>alert('Data Berhasil Ditambah')</script>";
?><script language="javascript">document.location.href="kategoti.php?p=hal_alt"</script><?php
}
else{
	echo "<center>Data gagal Disimpan<br><a href='kategoti.php'>Kembali ke Form</a></center>";
}
?>