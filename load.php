<?php
    header('content-type: application/json');
 include "koneksi.php";
  
 $id = $_GET['id'];
 $level = $_GET['id_level'];
 
 
 if($level=='2') {
     $sql="SELECT tb_anggota.id,tb_anggota.nama,tb_anggota.username,tb_anggota.alamat,tb_level.nama_level,tb_level.id_level FROM tb_anggota INNER JOIN tb_level ON tb_anggota.id_level=tb_level.id_level WHERE tb_anggota.id = '$id' AND tb_anggota.id_level='$level'";
     $result=mysql_query($sql);
     while($hasil=mysql_fetch_assoc($result)) {
      $output[]=$hasil;
     }
     $hasil =json_encode($output);
     echo "{\"list_event\":" . $hasil . "}";
     
 }else
 {
     $sql="SELECT * FROM tb_anggota ORDER BY id DESC";
     $result=mysql_query($sql);
     while($hasil=mysql_fetch_assoc($result)) {
      $output[]=$hasil;
     }
     $hasil =json_encode($output);
     echo "{\"list_event\":" . $hasil . "}";
     
 }
 
 
  
?>