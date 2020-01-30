<?php
if(isset($_POST['btn-save'])){
require("koneksi.php");
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$id_agency = $_POST['id_agency'];
$id_sto = $_POST['id_sto'];
$email = $_POST['email'];
$telpon = $_POST['telpon'];
$hp = $_POST['hp'];
$regional = $_POST['regional'];
$witel = $_POST['witel'];
$datel = $_POST['datel'];
$akses = 1;

// $query = "SELECT * FROM user WHERE username='$username'";
// $select = mysqli_query($con, $query);


  $cekUsername = "SELECT `username` FROM admin_agency WHERE `username`='$username'";
  // echo $cekTrack;
  $runCekUsername = mysqli_query($con, $cekUsername);
  $jumlahCekUsername = mysqli_num_rows($runCekUsername);



  if(($jumlahCekUsername) > 0){
    echo '<script language="JavaScript">
   alert("Username Pernah Diinputkan!");
   window.location = "manager_tampil_ag.php";
   </script>';
   die;
 }

 $query = "INSERT INTO admin_agency (username, password, nama, id_agency, id_sto, email, telpon, hp, regional, witel, datel, akses)
 VALUES ('$username', '$password', '$nama', '$id_agency', '$id_sto', '$email', '$telpon', '$hp', '$regional', '$witel', '$datel', '$akses')";
 $hasilQuery = mysqli_query($con, $query);


 if ($hasilQuery) {
    $queryAg = "INSERT INTO user (username, password, akses, nama, id_sto)
    VALUES ('$username', '$password', '$akses', '$nama', '$id_sto')";
    $hasilQueryAg = mysqli_query($con, $queryAg);

  echo '<script language="JavaScript">
   alert("Penyimpanan Berhasil!");
   window.location = "manager_tampil_ag.php";
   </script>';

 } else {
  echo '<script language="JavaScript">
  alert("Penyimpanan Gagal!");
  window.location = "manager_tampil_ag.php";
  </script>';
 }

$con->close();
}
else{ ?>
<script language="JavaScript">
alert("Isilah Form Terlebih Dahulu");
</script>
<?php
include("manager_input_ag.php");
}
?>
