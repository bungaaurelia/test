<html>
<head>
<title>Register Member Fashion Store</title>
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
		            <li><a href="loginmember.php" class="nav1">LOGIN</a></li>
                <li class="divider"></li>
		            <li><a href="registermember.php" class="nav2">REGISTER</a></li>
              </ul>
            <div class="right_menu_corner"></div>
          </div><!-- end of menu tab -->
  
  <div id="content">  
		<h2 align="center">Register Member</h2>
    
<form name="login" action="aksiregister.php" method="POST" onSubmit="return validasi(this)" >
<table border="3" align="center">
		<tr><td rowspan="6"><img src="image/login.png" width="97" height="105" hspace="10"></td></tr>
		<tr><td>Nama</td><td> : <input type="text" name="nama"></td></tr>
		<tr><td>Email</td><td> : <input type="text" name="email"></td></tr>
		<tr><td>Password</td><td> : <input type="password" name="password"></td></tr>
		<tr><td>Konfirmasi Password</td><td> : <input type="password" name=" konfirmasi_password"></td></tr>
		<tr><td colspan="2"><input type="submit" name="register_submit" value="Register"></td></tr>
</table>
</form>