<?php
header('content-type: application/json');
include("koneksi.php");

$id = $_GET['id'];

	$sql="SELECT id,nama,alamat,username,password FROM tbl_anggota where id='$id'";
	$result=mysql_query($sql);
	while($hasil=mysql_fetch_assoc($result)) {
		$output[]=$hasil;
	}
	$hasil =json_encode($output);
	echo "{\"edit_event\":" . $hasil . "}";
	
?>