<?php
if(isset($_POST['btn-update'])){
require("koneksi.php");

// $id_admin_agency = $_POST['id_admin_agency'];
//  $select = mysqli_query($con, "SELECT *FROM admin_agency WHERE id_admin_agency='$id_admin_agency'");
//
//
//  $array = mysqli_fetch_array($select);

$username = $_POST['username'];
$password = $_POST['password'];
$akses = 1;
$id_sto = $_POST['id_sto'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$telpon = $_POST['telpon'];
$hp = $_POST['hp'];
$id_agency = $_POST['id_agency'];
$regional = $_POST['regional'];
$witel = $_POST['witel'];
$datel = $_POST['datel'];

// $query = "SELECT * FROM user WHERE username='$username'";
// $select = mysqli_query($con, $query);


  $cekUsername = "SELECT * FROM admin_agency WHERE `username`='$username'";
  $runCekUsername = mysqli_query($con, $cekUsername);
  $jumlahCekUsername = mysqli_num_rows($runCekUsername);

  $compare = "SELECT `username` FROM admin_agency WHERE `username`='$username'";
  $hasil = mysqli_query($con, $compare);
  $data = mysqli_fetch_array($hasil);


	if ($data != null && $username == $data['username']){
    $query = "UPDATE admin_agency SET username='$username', password='$password', akses='$akses', id_sto='$id_sto', nama='$nama', email='$email', telpon='$telpon', hp='$hp', id_agency='$id_agency', regional='$regional', witel='$witel', datel='$datel'
    WHERE username='$username'";
    $hasilQuery = mysqli_query($con, $query);

    // if ($hasilQuery) {
      $queryAg = "UPDATE user SET username='$username', password='$password', akses='$akses', nama='$nama',  id_sto='$id_sto'
      WHERE username='$username'";
       $hasilQueryAg = mysqli_query($con, $queryAg);

       if ($hasilQueryAg){
         echo '<script language="JavaScript">
          alert("Update Data Berhasil!");
          window.location = "manager_tampil_ag.php";
          </script>';
       } else {
         echo '<script language="JavaScript">
          alert("Update Data Gagal!");
          window.location = "manager_tampil_ag.php";
            </script>';
       }


  }else if($jumlahCekUsername > 0){
    echo '<script language="JavaScript">
   alert("Username Pernah Diinputkan!");
   window.location = "manager_tampil_ag.php";
   </script>';

 } else {
   $query = "UPDATE admin_agency SET username='$username', password='$password', akses='$akses', id_sto='$id_sto', nama='$nama', email='$email', telpon='$telpon', hp='$hp', id_agency='$id_agency', regional='$regional', witel='$witel', datel='$datel'
   WHERE username='$username'";
   $hasilQuery = mysqli_query($con, $query);

   // if ($hasilQuery) {
     $queryAg = "UPDATE user SET username='$username', password='$password', akses='$akses', nama='$nama',  id_sto='$id_sto'
     WHERE username='$username'";
      $hasilQueryAg = mysqli_query($con, $queryAg);

      if ($hasilQueryAg) echo '<script language="JavaScript">
  		alert("Update Data Berhasil!");
  		window.location = "manager_tampil_ag.php";
  		</script>';
  	 }


$con->close();
}
else{ ?>
<script language="JavaScript">
alert("Isilah Form Terlebih Dahulu!");
window.location = "manager_edit_ag.php";
</script>';
<?php
include("manager_tampil_ag.php");
}
 ?>
