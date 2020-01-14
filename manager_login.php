<?php
require("koneksi.php");
$username=$_POST['username'];
$password=$_POST['password'];

$query="SELECT * FROM manager WHERE username='$username' AND password='$password'";
$hasil=mysqli_query($con,$query);
$data=mysqli_fetch_array($hasil);

if($data != NULL) {
	$id = $data['id_manager'];
	$nama = $data['nama'];
	$username = $data['username'];
	$akses = $data['akses'];

	if($akses==8){
	 session_start();

	 $_SESSION['id']=$id;
	 $_SESSION['nama']=$nama;
	 $_SESSION['username']=$username;
	 $_SESSION['status']=$akses;
	 header("Location: dashboard_manager.php");
	} else {
		echo '<script language="JavaScript">
	alert("Login gagal, silahkan coba kembali.");
	window.location = "manager_index.php";
	</script>';
	}
}
else {
	echo '<script language="JavaScript">
	alert("Login gagal, silahkan coba kembali.");
	window.location = "manager_index.php";
	</script>';
}

 ?>
