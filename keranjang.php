<html>
<head>
<title>Fashion Store</title>
</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="index, follow">
<meta name="description" content="Fashion Store adalah toko online  Penyedia pakaian bagi wanita yang berkualitas dengan harga terjangkau. ">
<meta name="keywords" content="Fashion Store, toko online, pakaian wanita.">
<meta http-equiv="Copyright" content="lokomedia">
<meta http-equiv="imagetoolbar" content="no">
<meta name="language" content="Indonesia">
<meta name="revisit-after" content="7">
<meta name="webcrawlers" content="all">
<meta name="rating" content="general">
<meta name="spiders" content="all">

<link href="style.css" rel="stylesheet" type="text/css" />

	<script type="text/javascript">
		$(document).ready(function() {
		    $('.lightbox').lightbox();		    
		});
  </script>

</head>

<body>
<div id="main_container">
	<div class="top_bar">
    	<div class="top_search">
        	<div class="search_text">Cari Produk</div>
        	<form method="POST" action="hasil-pencarian.html">
            <input class="search_input" name="kata" type="text">
            <input src="image/search.ico" height="25" class="search_bt" type="image">
          </form>
      </div>            
  </div>
  
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

  <div class="crumb_navigation">
    Anda sedang berada di: <span class='current'>Keranjang Belanja</span>  </div>        
        
  <div class="left_content"> 
      
    <div class="title_box">Kategori</div>    
      <ul class="left_menu">
            <li class='ganjil'><a href='celana.php'> Celana (5)</a></li>
			<li class='genap'><a href='gamis.php'> Gamis (5)</a></li>
			<li class='ganjil'><a href='kaos.php'> Kaos (5)</a></li>
			<li class='genap'><a href='kemeja.php'> Kemeja (3)</a></li>
			<li class='ganjil'><a href='rok.php'> Rok (5)</a></li>
			<li class='genap'><a href='sweater.php'> Sweater (3)</a></li>  
			<li class='genap'><a href='tunik.php'> Tunik (4)</a></li>  
		</ul>
       
    <div class="title_box">Produk Best Seller</div>  
     <div class="border_box">
      <div class='product_title'><a href='celana4.php'>Celana Square</a></div>
         <div class='product_img'>
             <a href='celana4.php'>
                <img src='produk/cln4.jpg' border='0' height='110'>
             </a>
         </div><div class='product_title'><a href='tunik5.php'>Tunik Import</a></div>
         <div class='product_img'>
             <a href='tunik4.php'>
                <img src='produk/tnk4.jpg' border='0' height='110'>
             </a>
         </div>       </div>

     <div class="banner_adds"></div>    
         
  </div>
   
   <div class="center_content">
      <script language="javascript">
function validasi(form){
  if (form.nama.value == ""){
    alert("Anda belum mengisikan Nama.");
    form.nama.focus();
    return (false);
  }    
  if (form.alamat.value == ""){
    alert("Anda belum mengisikan Alamat.");
    form.alamat.focus();
    return (false);
  }
  if (form.telpon.value == ""){
    alert("Anda belum mengisikan Telpon.");
    form.telpon.focus();
    return (false);
  }
  if (form.email.value == ""){
    alert("Anda belum mengisikan Email.");
    form.email.focus();
    return (false);
  }
  if (form.kota.value == 0){
    alert("Anda belum mengisikan Kota.");
    form.kota.focus();
    return (false);
  }
  if (form.kode.value == ""){
    alert("Anda belum mengisikan Kode.");
    form.kode.focus();
    return (false);
  }
  return (true);
}

function validasi2(form2){
  if (form2.email.value == ""){
    alert("Anda belum mengisikan Email.");
    form2.email.focus();
    return (false);
  }
  if (form2.password.value == ""){
    alert("Anda belum mengisikan Password.");
    form2.password.focus();
    return (false);
  }
  return (true);
}

function harusangka(jumlah){
  var karakter = (jumlah.which) ? jumlah.which : event.keyCode
  if (karakter > 31 && (karakter < 48 || karakter > 57))
    return false;
  return true;
}
</script>

<script>window.alert('Keranjang Belanjanya Masih Kosong');
        window.location=('home.php')</script>           
   </div>
   
   <div class="right_content">
      	   <div class="shopping_cart">
        <div class="cart_title">Keranjang belanja</div>
        <div class="cart_details">
           <i>0 item produk</i><br />
          <span class='border_cart'></span>
          Total: <span class='price'>Rp. 0</span>
        </div>    
        <div class="cart_icon"><img src="image/shoppingcart.png" alt="" title="" width="48" border="0" height="48">
        </div>        
      </div>	

      <div class="title_box">Customer Service</div>  
      <div class="border_box">

      <br /><p>&bull; Fashion Store 
              </p><br />      </div>  	 
	 
	  <div class="title_box">Statistik User</div>  
     <div class="border_box">
<br /><p align='left'>
      <img src='image/hariini.png'> Pengunjung hari ini : 1 <br />
      <img src='image/total.png'> Total pengunjung    : 99 <br /><br />
      <img src='image/hariini.png'> Hits hari ini    : 24 <br />
      <img src='image/total.png'> Total Hits       : 3355 <br /><br />
      <img src='image/online.png'> Pengunjung Online: 1<br /><br /></p>
      <p align='center'><img src='image/0.png' alt='0'><img src='image/0.png' alt='0'><img src='image/3.png' alt='3'><img src='image/3.png' alt='3'><img src='image/5.png' alt='5'><img src='image/5.png' alt='5'> </p><br />

	 </div> 	          
                
   </div><!-- end of right content -->   
            
   </div><!-- end of main content -->
   
   <div class="footer">
        <div class="left_footer">
        <img src="image/menu_bg.gif" alt="" title="" width="990" height="55">
        </div>
        
        <div class="center_footer">
        Copyright &copy;. All Rights Reserved.<br />
        <a>Fashion Store</a><br />
        <img src="image/payment.gif" alt="" title="">
        </div>
        
        <div class="right_footer">
        <a href="index.php">home</a>
        <a href="profil-kami.html">about</a>
        <a href="cara-pembelian.html">cara pembelian</a>
        <a href="semua-produk.html">semua produk</a>
        <a href="hubungi-kami.html">hubungi kami</a>
        </div>   
   </div>                 

</div>
<!-- end of main_container -->
<div style="visibility: hidden; position: absolute;"><div></div></div>
</body>
</html>
