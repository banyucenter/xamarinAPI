<?php
    header('content-type: application/json');
 include "koneksi.php";
  
 $id = $_GET['id'];
 
 
     $sql="SELECT * FROM tb_produk Where id='$id' ORDER BY id DESC";
     $result=mysql_query($sql);
     while($hasil=mysql_fetch_assoc($result)) {
      $output[]=$hasil;
     }
     $hasil =json_encode($output);
     echo "{\"detail_produk\":" . $hasil . "}";
     

 
 
  
?>