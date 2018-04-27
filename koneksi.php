<?php
 
 $server  = "localhost"; // sesuaikan alamat server anda
 $user  = "u9801493_xamarin"; // sesuaikan user web server anda
 $password = "yourpasword"; // sesuaikan password web server anda
 $database = "u9801493_xamarin"; // sesuaikan database web server anda
 
 $connect = mysql_connect($server, $user, $password) or die ("Koneksi gagal!");
 mysql_select_db($database) or die ("Database belum siap!");
?>
