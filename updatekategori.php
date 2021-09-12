<?php
include "config/conn.php";
$id_kategori = $_POST['id_kategori'];
$nama_kategori = $_POST['nama_kategori'];


$update = $mysqli->query("UPDATE kategori SET nama_kategori='$nama_kategori', WHERE id_kategori='$id_kategori'");
if($update){
	echo "<script>alert('Data Berhasil Diubah')</script>";
	?>
<script language="javascript">document.location.href="kategori.php"</script><?php
}
else{
	echo "<script>>alert('Data Gagal Diubah')</script>";
?><script language="javascript">document.location.href="kategori.php"</script><?php
}
?>