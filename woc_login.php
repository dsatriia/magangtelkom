<?php
require("koneksi.php");
$username=$_POST['username'];
$password=$_POST['password'];

$query="SELECT * FROM woc WHERE username='$username' AND password='$password'";
$hasil=mysqli_query($con,$query);
$data=mysqli_fetch_array($hasil);

if($data != NULL) {
	$id = $data['id_woc'];
	$nama = $data['nama'];
	$username = $data['username'];
	$akses = $data['akses'];

	if($akses==7){
	 session_start();

	 $_SESSION['id']=$id;
	 $_SESSION['nama']=$nama;
	 $_SESSION['username']=$username;
	 $_SESSION['status']=$akses;
	 header("Location: dashboard_woc.php");
	} else {
		echo '<script language="JavaScript">
	alert("Login Gagal! Silahkan Coba Kembali.");
	window.location = "woc_index.php";
	</script>';
	}
}
else {
	echo '<script language="JavaScript">
	alert("Login Gagal! Silahkan Coba Kembali.");
	window.location = "woc_index.php";
	</script>';
}

 ?>
