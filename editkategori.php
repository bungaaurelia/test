<html>
<body>
<?php include "config/conn.php";
	$id=$_GET['id'];
	$sql=$mysqli->query("SELECT*FROM kategori where id_kategori='$id' ");
	$edit=mysqli_fetch_array($sql,MYSQLI_ASSOC);
?>
<center><h1>Form Tambah Kategori</h1><hr>
<form method='POST' action='updatekategori.php'>
<table border=1>
<tr><td>ID Kategori</td>
	<td>:</td>
	<td><input type='text' name='id' value= '<?php echo $edit['id_kategori'];?>' readonly></td>
</tr>
<tr><td>Nama Kategori</td>
	<td>:</td>
	<td><input type='text' name='nama' value= '<?php echo $edit['nama_kategori'];?>' ></td>
</tr>
<tr><td colspan=3 align='center'><input type='submit' value='Ubah'></td></tr>
</table></form></center>;
</body>
</html>
