<html>
<head>
<title></title>
<script language="javascript" type="text/javascript">
    tinyMCE_GZ.init({
    plugins : 'style,layer,table,save,advhr,advimage, ...',
		themes  : 'simple,advanced',
		languages : 'en',
		disk_cache : true,
		debug : false
});
</script>
<script language="javascript" type="text/javascript"
src="../tinymcpuk/tiny_mce_src.js"></script>
<script type="text/javascript">
tinyMCE.init({
		mode : "textareas",
		theme : "advanced",
		plugins : "table,youtube,advhr,advimage,advlink,emotions,flash,searchreplace,paste,directionality,noneditable,contextmenu",
		theme_advanced_buttons1_add : "fontselect,fontsizeselect",
		theme_advanced_buttons2_add : "separator,preview,zoom,separator,forecolor,backcolor,liststyle",
		theme_advanced_buttons2_add_before: "cut,copy,paste,separator,search,replace,separator",
		theme_advanced_buttons3_add_before : "tablecontrols,separator,youtube,separator",
		theme_advanced_buttons3_add : "emotions,flash",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		extended_valid_elements : "hr[class|width|size|noshade]",
		file_browser_callback : "fileBrowserCallBack",
		paste_use_dialog : false,
		theme_advanced_resizing : true,
		theme_advanced_resize_horizontal : false,
		theme_advanced_link_targets : "_something=My somthing;_something2=My somthing2;_something3=My somthing3;",
		apply_source_formatting : true
});

	function fileBrowserCallBack(field_name, url, type, win) {
		var connector = "tiny/filemanager/browser.html?Connector=connectors/php/connector.php";
		var enableAutoTypeSelection = true;
		
		var cType;
		tinymcpuk_field = field_name;
		tinymcpuk = win;
		
		switch (type) {
			case "image":
				cType = "Image";
				break;
			case "flash":
				cType = "Flash";
				break;
			case "file":
				cType = "File";
				break;
		}
		
		if (enableAutoTypeSelection && cType) {
			connector += "&Type=" + cType;
		}
		
		window.open(connector, "tinymcpuk", "modal,width=600,height=400");
	}
</script>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>


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

	<div id="menu">
	<table border="2" align="center" width="1000"> 
	  
		<tr><td><li><a href='homeadmin.php'>Home</a></li></td>
			<td rowspan="11">
     <h2>Ongkos Kirim</h2>
          <input type=button value='Tambah Ongkos Kirim' 
          onclick="window.location.href='ongkir&act=tambahongkoskirim';">
          <table border="1" width="800">
          <tr><th>no</th><th>nama kota</th><th>ongkos kirim</th><th>aksi</th></tr><tr><td>1</td>
             <td>Surabaya</td>
             <td align=right>13.000</td>
             <td><a href=ongkoskirim&act=editongkoskirim&id=11>Edit</a> | 
	               <a href=aksi_ongkoskirim.php?=ongkir&act=hapus&id=11>Hapus</a>
             </td></tr><tr><td>2</td>
             <td>Palembang</td>
             <td align=right>23.000</td>
             <td><a href=ongkoskirim&act=editongkoskirim&id=10>Edit</a> | 
	               <a href=aksi_ongkoskirim.php?module=ongkir&act=hapus&id=10>Hapus</a>
             </td></tr><tr><td>3</td>
             <td>Lainnya</td>
             <td align=right>10.000</td>
             <td><a href=ongkoskirim&act=editongkoskirim&id=9>Edit</a> | 
	               <a href=aksi_ongkoskirim.php?ongkir&act=hapus&id=9>Hapus</a>
             </td></tr><tr><td>4</td>
             <td>Samarinda</td>
             <td align=right>19.500</td>
             <td><a href=ongkoskirim&act=editongkoskirim&id=8>Edit</a> | 
	               <a href=aksi_ongkoskirim.php?mongkoskirim&act=hapus&id=8>Hapus</a>
             </td>
             </tr></table> 

		<tr><td><li><a href='gantipass.php'>Ganti Password</a></li></td></tr>
		<tr><td><li><a href='kategori.php'> Kategori Produk</a></li></td></tr>
			<tr><td><li><a href='produk.php'> Produk</a></li></td></tr>
			<tr><tr><td><li><a href='order.php'> Order</a></li></td></tr>
			<tr><td><li><a href='?ongkir.php'> Ongkos Kirim</a></li></td></tr>
			<tr><td><li><a href='hubungi'> Hubungi Kami</a></li></td></tr>
			<tr><td><li><a href=logout.php>Logout</a></li></tr></td></tr>
			</table>
	    
 	</div>
		 

          <p>&nbsp;</p>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
          <p align=right>Login : Rabu, 17 Juni 2020 | 06:36:31 WIB</p>  </div>
  
		<div id="footer" align="center">
			Copyright &copy; 2020. All rights reserved.
		</div>
</div>


</body>
</html>
