<?php
 include "koneksi.php";
 
 $username  = $_POST['username'];
 $password = $_POST['password'];
 $nama  = $_POST['nama'];
 $alamat = $_POST['alamat'];
 
 class emp{}
 
 if (empty($username) || empty($password)) {
  $response = new emp();
  $response->success = 0;
  $response->message = "Kolom isian tidak boleh kosong";
  die(json_encode($response));
 } else {
  $query = mysql_query("INSERT INTO tb_anggota (id,username,password,nama,alamat,level) VALUES(0,'".$username."','".$password."','".$nama."','".$alamat."','2')");
 
  if ($query) {
   $response = new emp();
   $response->success = 1;
   $response->message = "Data berhasil di simpan";
   die(json_encode($response));
  } else{ 
   $response = new emp();
   $response->success = 0;
   $response->message = "Error simpan Data";
   die(json_encode($response));
  }
 }
?>