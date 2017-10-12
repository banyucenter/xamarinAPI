<?php
    header('content-type: application/json');
    include "koneksi.php";
 
     $sql="SELECT * FROM tb_produk ORDER BY id DESC";
     $result=mysql_query($sql);
     while($hasil=mysql_fetch_assoc($result)) {
      $output[]=$hasil;
     }
     $hasil =json_encode($output);
     echo $hasil;
?>