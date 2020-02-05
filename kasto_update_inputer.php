<?php
if(isset($_POST['btn-update'])){
require("koneksi.php");

$username = $_POST['username'];
$password = $_POST['password'];
$akses = 4;
$id_sto = $_POST['id_sto'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$telpon = $_POST['telpon'];
$hp = $_POST['hp'];
$regional = $_POST['regional'];
$witel = $_POST['witel'];
$datel = $_POST['datel'];

  $cekUsername = "SELECT * FROM detail_picwitel WHERE `username`='$username'";
  $runCekUsername = mysqli_query($con, $cekUsername);
  $jumlahCekUsername = mysqli_num_rows($runCekUsername);

  $compare = "SELECT `username` FROM detail_picwitel WHERE `username`='$username'";
  $hasil = mysqli_query($con, $compare);
  $data = mysqli_fetch_array($hasil);


	if ($data != null && $username == $data['username']){
    $query = "UPDATE detail_picwitel SET username='$username', password='$password', akses='$akses', id_sto='$id_sto', nama='$nama', email='$email', telpon='$telpon', hp='$hp', regional='$regional', witel='$witel', datel='$datel'
    WHERE username='$username'";
    $hasilQuery = mysqli_query($con, $query);

    // if ($hasilQuery) {
      $queryUser = "UPDATE user SET username='$username', password='$password', akses='$akses', nama='$nama',  id_sto='$id_sto'
      WHERE username='$username'";
       $hasilQueryUser = mysqli_query($con, $queryUser);

       if ($hasilQueryUser){
         echo '<script language="JavaScript">
          alert("Update Data Berhasil!");
          window.location = "kasto_tampil_inputer.php";
          </script>';
       } else {
         echo '<script language="JavaScript">
          alert("Update Data Gagal!");
          window.location = "kasto_tampil_inputer.php";
            </script>';
       }


  }else if($jumlahCekUsername > 0){
    echo '<script language="JavaScript">
   alert("Username Pernah Diinputkan!");
   window.location = "kasto_tampil_inputer.php";
   </script>';

 } else {
   $query = "UPDATE detail_picwitel SET username='$username', password='$password', akses='$akses', id_sto='$id_sto', nama='$nama', email='$email', telpon='$telpon', hp='$hp', regional='$regional', witel='$witel', datel='$datel'
   WHERE username='$username'";
   $hasilQuery = mysqli_query($con, $query);

   // if ($hasilQuery) {
     $queryUser = "UPDATE user SET username='$username', password='$password', akses='$akses', nama='$nama',  id_sto='$id_sto'
     WHERE username='$username'";
      $hasilQueryUser = mysqli_query($con, $queryUser);

      if ($hasilQueryUser) echo '<script language="JavaScript">
  		alert("Update Data Berhasil!");
  		window.location = "kasto_tampil_inputer.php";
  		</script>';
  	 }


$con->close();
}
else{ ?>
<script language="JavaScript">
alert("Isilah Form Terlebih Dahulu!");
window.location = "kasto_edit_inputer.php";
</script>';
<?php
include("kasto_tampil_inputer.php");
}
 ?>
