<?php
    header('content-type: application/json');
 include "koneksi.php";
  
 $username = $_GET['username'];
 $password = $_GET['password'];
 $id_level = $_GET['id_level'];
   
 
 $sql="SELECT id,username,password,id_level FROM tb_anggota where username='$username' and password='$password'";
 $result=mysql_query($sql);
 while($hasil=mysql_fetch_assoc($result)) {
  $output[]=$hasil;
 }
 $hasil =json_encode($output);
 echo "{\"login_event\":" . $hasil . "}";
  
?>