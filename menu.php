<?php
include "config/conn.php";

if ($_SESSION[leveluser]=='admin'){
  $sql=mysql_query("select * from fashionstore where aktif='Y' order by urutan");
}
else{
  $sql=mysql_query("select * from fashionstore where status='user' and aktif='Y' order by urutan"); 
} 
while ($m=mysql_fetch_array($sql)){  
  echo "<li><a href='$m[link]'>&#187; $m[nama_modul]</a></li>";
}
?>
