<html>
<head>
<title>Administrator Fashion Store</title>
<script language="javascript">
function validasi(form){
  if (form.username.value == ""){
    alert("Anda belum mengisikan Username.");
    form.username.focus();
    return (false);
  }
     
  if (form.password.value == ""){
    alert("Anda belum mengisikan Password.");
    form.password.focus();
    return (false);
  }
  return (true);
}
</script>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<div id="main_container">
<div id="header"></div>

  <div id="main_content"> 
       <div id="menu_tab">
            <div class="left_menu_corner"></div>
              <ul class="menu">
		            <li><a href="home.php" class="nav1">Home</a></li>
                <li class="divider"></li>
		            <li><a href="profil.php" class="nav2">Profil</a></li>
                <li class="divider"></li>
		            <li><a href="carabeli.php" class="nav3">Cara Pembelian</a></li>
                <li class="divider"></li>
		            <li><a href="produkhal1.php" class="nav4">Semua Produk</a></li>
                <li class="divider"></li>
		            <li><a href="keranjang.php" class="nav5">Keranjang Belanja</a></li>
                <li class="divider"></li>
		            <li><a href="katalog.php" class="nav7">Unduh Katalog</a></li>
                <li class="divider"></li>
		            <li><a href="hubungi.php" class="nav6">Hubungi Kami</a></li>        
                <li class="divider"></li>
		            <li><a href="admin.php" class="nav8">Admin</a></li>
              </ul>
            <div class="right_menu_corner"></div>
          </div><!-- end of menu tab -->
  
  <div id="content">  
		<h2 align="center">Login Admin Toko</h2>
    
<form name="login" action="homeadmin.php" method="POST" onSubmit="return validasi(this)" >
<table border="3" align="center">
<tr><td rowspan="4"><img src="image/login.png" width="97" height="105" hspace="10"></td></tr>
<tr><td>Username</td><td> : <input type="text" id="username" name="username"></td></tr>
<tr><td>Password</td><td> : <input type="password" id="password" name="password"></td></tr>
<tr><td colspan="2"><input type="submit" value="Login"></td></tr>
</table>
</form>

<br><h2 align="center">Login Admin Gudang</h2>
    
<form name="login" action="admingudang.php" method="POST" onSubmit="return validasi(this)" >
<table border="3" align="center">
<tr><td rowspan="4"><img src="image/login2.png" width="97" height="105" hspace="10"></td></tr>
<tr><td>Username</td><td> : <input type="text" id="username" name="username"></td></tr>
<tr><td>Password</td><td> : <input type="password" id="password" name="password"></td></tr>
<tr><td colspan="2"><input type="submit" value="Login"></td></tr>
</table>
</form>
  
  <h2 align="center">Login Admin Supplier</h2>
    
<form name="login" action="supplier.php" method="POST" onSubmit="return validasi(this)" >
<table border="3" align="center">
<tr><td rowspan="4"><img src="image/login3.png" width="97" height="105" hspace="10"></td></tr>
<tr><td>Username</td><td> : <input type="text" id="username" name="username"></td></tr>
<tr><td>Password</td><td> : <input type="password" id="password" name="password"></td></tr>
<tr><td colspan="2"><input type="submit" value="Login"></td></tr>
</table>
</form>

<p>&nbsp;</p>
  </div>
	<div id="footer" align="center">
			Copyright &copy; 2020. All rights reserved.
	</div>
</div>
</body>
</html>
