<?php
require("koneksi.php");
$username=$_POST['username'];
$password=$_POST['password'];

$query="SELECT * FROM user WHERE username='$username'";

$hasil=mysqli_query($con,$query);
$data=mysqli_fetch_array($hasil);

if($data != NULL) {
	$id = $data['id'];
	$nama = $data['nama'];
	$username = $data['username'];
	$akses = $data['akses'];

	if($akses==1){
        $query="SELECT * FROM agency WHERE username='$username' AND password='$password'";

        $hasil=mysqli_query($con,$query);
        $data=mysqli_fetch_array($hasil);

        $id = $data['id_agency'];
        $nama = $data['nama'];
        $username = $data['username'];
        $akses = $data['akses'];

        session_start();

        $_SESSION['id']=$id;
        $_SESSION['nama']=$nama;
        $_SESSION['username']=$username;
        $_SESSION['status']=$akses;
        header("Location: dashboard_ag.php");
    } 
    
    else if($akses==2){

        $query="SELECT * FROM supervisor WHERE username='$username' AND password='$password'";

        $hasil=mysqli_query($con,$query);
        $data=mysqli_fetch_array($hasil);

        $id = $data['id_supervisor'];
        $nama = $data['nama'];
        $username = $data['username'];
        $akses = $data['akses'];
        session_start();

        $_SESSION['id']=$id;
        $_SESSION['nama']=$nama;
        $_SESSION['username']=$username;
        $_SESSION['status']=$akses;
        header("Location: dashboard_spv.php");
    }
    else if($akses==3){

        $query="SELECT * FROM salesforce WHERE username='$username' AND password='$password'";

        $hasil=mysqli_query($con,$query);
        $data=mysqli_fetch_array($hasil);

        $id = $data['id_salesforce'];
        $nama = $data['nama'];
        $username = $data['username'];
        $akses = $data['akses'];

        session_start();

        $_SESSION['id']=$id;
        $_SESSION['nama']=$nama;
        $_SESSION['username']=$username;
        $_SESSION['status']=$akses;
        header("Location: dashboard_sf.php");
    }
    else if($akses==4){

        $query="SELECT * FROM inputer WHERE username='$username' AND password='$password'";

        $hasil=mysqli_query($con,$query);
        $data=mysqli_fetch_array($hasil);

        $id = $data['id_inputer'];
        $nama = $data['nama'];
        $username = $data['username'];
        $akses = $data['akses'];

        session_start();

        $_SESSION['id']=$id;
        $_SESSION['nama']=$nama;
        $_SESSION['username']=$username;
        $_SESSION['status']=$akses;
        header("Location: dashboard_inputer.php");
    }
    else if($akses==5){

        $query="SELECT * FROM teknisi WHERE username='$username' AND password='$password'";

        $hasil=mysqli_query($con,$query);
        $data=mysqli_fetch_array($hasil);

        $id = $data['id_teknisi'];
        $nama = $data['nama'];
        $username = $data['username'];
        $akses = $data['akses'];

        session_start();

        $_SESSION['id']=$id;
        $_SESSION['nama']=$nama;
        $_SESSION['username']=$username;
        $_SESSION['status']=$akses;
        header("Location: dashboard_teknisi.php");
    }
    else if($akses==6){
        $query="SELECT * FROM tl WHERE username='$username' AND password='$password'";

        $hasil=mysqli_query($con,$query);
        $data=mysqli_fetch_array($hasil);

        $id = $data['id_tl'];
        $nama = $data['nama'];
        $username = $data['username'];
        $akses = $data['akses'];

        session_start();

        $_SESSION['id']=$id;
        $_SESSION['nama']=$nama;
        $_SESSION['username']=$username;
        $_SESSION['status']=$akses;
        header("Location: dashboard_tl.php");
    }
    else if($akses==7){
        $query="SELECT * FROM woc WHERE username='$username' AND password='$password'";

        $hasil=mysqli_query($con,$query);
        $data=mysqli_fetch_array($hasil);

        $id = $data['id_woc'];
        $nama = $data['nama'];
        $username = $data['username'];
        $akses = $data['akses'];
        
        session_start();

        $_SESSION['id']=$id;
        $_SESSION['nama']=$nama;
        $_SESSION['username']=$username;
        $_SESSION['status']=$akses;
        header("Location: dashboard_woc.php");
    }
    else if($akses==8){
        $query="SELECT * FROM manager WHERE username='$username' AND password='$password'";

        $hasil=mysqli_query($con,$query);
        $data=mysqli_fetch_array($hasil);

        $id = $data['id_manager'];
        $nama = $data['nama'];
        $username = $data['username'];
        $akses = $data['akses'];

        session_start();

        $_SESSION['id']=$id;
        $_SESSION['nama']=$nama;
        $_SESSION['username']=$username;
        $_SESSION['status']=$akses;
        header("Location: dashboard_manager.php");
    }
    else if($akses==9){
        $query="SELECT * FROM picwitel WHERE username='$username' AND password='$password'";

        $hasil=mysqli_query($con,$query);
        $data=mysqli_fetch_array($hasil);

        $id = $data['id_picwitel'];
        $nama = $data['nama'];
        $username = $data['username'];
        $akses = $data['akses'];

        session_start();

        $_SESSION['id']=$id;
        $_SESSION['nama']=$nama;
        $_SESSION['username']=$username;
        $_SESSION['status']=$akses;
        header("Location: dashboard_picwitel.php");
    }
    else if($akses==10){

        $query="SELECT * FROM kasto WHERE username='$username' AND password='$password'";

        $hasil=mysqli_query($con,$query);
        $data=mysqli_fetch_array($hasil);

        $id = $data['id_kasto'];
        $nama = $data['nama'];
        $username = $data['username'];
        $akses = $data['akses'];

        session_start();

        $_SESSION['id']=$id;
        $_SESSION['nama']=$nama;
        $_SESSION['username']=$username;
        $_SESSION['status']=$akses;
        header("Location: dashboard_kasto.php");
    }
    else {
		echo '<script language="JavaScript">
	alert("Login gagal, silahkan coba kembali.");
	window.location = "index.php";
	</script>';
	}
}
else {
	echo '<script language="JavaScript">
	alert("Login gagal, silahkan coba kembali.");
	window.location = "index.php";
	</script>';
}

 ?>