<?php
$response= array();
header('content-type: application/json');
include("koneksi.php");

$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$almt = $_POST['alamat'];
$sposisi = $_POST['posisi'];

$tgl2 = date("Y-m-d", strtotime($tgl));

if ($sposisi == "edit"){
	$sql = "UPDATE tb_anggota SET username='$username',password='$password',nama='$nama',alamat='$almt' where id='$id'";
	$result = mysql_query($sql);
} else{
	$sql = "INSERT INTO tb_anggota(username,password,nama,alamat) VALUES ('$username','$password',$nama','$almt')";
	$result = mysql_query($sql);
}
?>
