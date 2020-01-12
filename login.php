<?php
require("koneksi.php");
$username=$_POST['username'];
$password=$_POST['password'];

$query="SELECT * FROM user WHERE username='$username' AND password='$password'";
$hasil=mysqli_query($con,$query);
$data=mysqli_fetch_array($hasil);
$akses=$data['akses'];

if($akses != '') {
	if($akses==1){
	 session_start();
	 $_SESSION['username']=$username;
	 $_SESSION['status']=$akses;
	 header("Location: dashboard_ag.php");
	}
	if($akses==2){
	 session_start();
	 $_SESSION['username']=$username;
	 $_SESSION['status']=$akses;
	 header("Location: dashboard_spv.php");
	}
	if($akses==3){
	 session_start();
	 $_SESSION['username']=$username;
	 $_SESSION['status']=$akses;
	 header("Location: dashboard_sf.php");
	}
	if($akses==4){
	 session_start();
	 $_SESSION['username']=$username;
	 $_SESSION['status']=$akses;
	 header("Location: dashboard_inputer.php");
	}
	if($akses==5){
	 session_start();
	 $_SESSION['username']=$username;
	 $_SESSION['status']=$akses;
	 header("Location: dashboard_teknisi.php");
	}
	if($akses==6){
	 session_start();
	 $_SESSION['username']=$username;
	 $_SESSION['status']=$akses;
	 header("Location: dashboard_tl.php");
	}
	if($akses==7){
	 session_start();
	 $_SESSION['username']=$username;
	 $_SESSION['status']=$akses;
	 header("Location: dashboard_woc.php");
	}
	if($akses==8){
	 session_start();
	 $_SESSION['username']=$username;
	 $_SESSION['status']=$akses;
	 header("Location: dashboard_manager.php");
	}
	if($akses==9){
	 session_start();
	 $_SESSION['username']=$username;
	 $_SESSION['status']=$akses;
	 header("Location: dashboard_picwitel.php");
	}
	if($akses==10){
	 session_start();
	 $_SESSION['username']=$username;
	 $_SESSION['status']=$akses;
	 header("Location: dashboard_kasto.php");
	}
}
else {
	echo '<script language="JavaScript">
	alert("Login gagal, silahkan coba kembali.");
	</script>';
	include("index.php");
}

 ?>
