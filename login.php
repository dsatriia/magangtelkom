<?php 
require("koneksi.php");
$username=$_POST['username']; 
$password=$_POST['password'];

$query="SELECT * FROM user WHERE username='$username' AND password='$password'"; 

$hasil=mysqli_query($con,$query); 
$data=mysqli_fetch_array($hasil);
$akses=$data['akses'];

if($akses != '') {
	if($akses == 1){
	 session_start();
	 $_SESSION['username']=$username;
	 $_SESSION['status']=$akses;
	 header("Location: dashboard_gudang.php");
	}
	else{
	 session_start();
	 $_SESSION['username']=$username;
	 $_SESSION['status']=$akses;
	 header("Location: dashboard_kasir.php");
	}
}
else {
	echo '<script language="JavaScript">
	alert("Login gagal, silahkan coba kembali.");
	</script>';
	include("index.php");
}


 ?>                                         
