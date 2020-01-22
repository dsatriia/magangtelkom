<?php
require("koneksi.php");
$username=$_POST['username'];
$password=$_POST['password'];

$query="SELECT * FROM tl WHERE username='$username' AND password='$password'";
$hasil=mysqli_query($con,$query);
$data=mysqli_fetch_array($hasil);

if($data != NULL) {
	$id = $data['id_tl'];
	$nama = $data['nama'];
	$username = $data['username'];
	$akses = $data['akses'];

	if($akses==6){
	 session_start();

	 $_SESSION['id']=$id;
	 $_SESSION['nama']=$nama;
	 $_SESSION['username']=$username;
	 $_SESSION['status']=$akses;
	 header("Location: dashboard_tl.php");
	} else {
		echo '<script language="JavaScript">
	alert("Login Gagal! Silahkan Coba Kembali.");
	window.location = "tl_index.php";
	</script>';
	}
}
else {
	echo '<script language="JavaScript">
	alert("Login Gagal! Silahkan Coba Kembali.");
	window.location = "tl_index.php";
	</script>';
}

 ?>
