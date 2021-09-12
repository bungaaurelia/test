<?php
if(isset($_POST['register_submit'])) {
	
	$connect= mysqli_connect ('localhost', 'root', '', 'fashionstore')
	or die (mysqli_connect_error());
	
	$nama = mysqli_real_escape_string($connect, trim($POST['nama']));
	$email= mysqli_real_escape_string($connect, trim($POST['email']));
	$password = mysqli_real_escape_string($connect, trim($POST['password']));
	$konfirmasi = mysqli_real_escape_string($connect, trim($POST['konformasi_password']));
	
	if($password != $konfirmasi) {
		header('location: fashionstore/home.php?konfirmasipassword-failed');
	}else{
		$sql = '
			insert into rezauser
			values(
			"",
			"'.$nama.'",
			"'.$email.'",
			"'.$password.'",
			"'.date('Y-m-d').'"
			)
			';
			mysqli_query($connect, $sql);
			header('location: home.php');
}}
?>