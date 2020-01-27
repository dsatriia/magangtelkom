<?php
if(isset($_POST['btn-save'])){
require("koneksi.php");
$username = $_POST['username'];
$password = $_POST['password'];
$akses = $_POST['akses'];
$id_sto = $_POST['id_sto'];
$nama = $_POST['nama'];


$query = "SELECT * FROM user WHERE username='$username'";
$select = mysqli_query($con, $query);


  $cekUsername = "SELECT `username` FROM user WHERE `username`='$username'";
  // echo $cekTrack;
  $runCekUsername = mysqli_query($con, $cekUsername);
  $jumlahCekUsername = mysqli_num_rows($runCekUsername);



  if(($jumlahCekUsername) > 0){
    echo '<script language="JavaScript">
   alert("Username dan Jabatan Pernah Diinputkan!");
   window.location = "manager_tampil_user.php";
   </script>';
   die;
 }

 $query = "INSERT INTO user (username, password, akses, id_sto, nama)
 VALUES ('$username', '$password', '$akses', '$id_sto', '$nama')";
 $hasilQuery = mysqli_query($con, $query);


 if ($hasilQuery) {

  if ($akses == 1){
    $queryAg = "INSERT INTO admin_agency (username, password, akses, id_sto, nama)
    VALUES ('$username', '$password', '$akses', '$id_sto', '$nama')";
    $hasilQueryAg = mysqli_query($con, $queryAg);
  }
  else if ($akses == 2){
    $querySpv = "INSERT INTO supervisor (username, password, akses, id_sto, nama)
    VALUES ('$username', '$password', '$akses', '$id_sto', '$nama')";
    $hasilQuerySpv = mysqli_query($con, $querySpv);
  }
  else if ($akses == 3){
    $querySf = "INSERT INTO salesforce (username, password, akses, id_sto, nama)
    VALUES ('$username', '$password', '$akses', '$id_sto', '$nama')";
    $hasilQuerySf = mysqli_query($con, $querySf);
  }
  else if ($akses == 5 || $akses == 6 || $akses == 7){
    $queryDt = "INSERT INTO detail_teknis (username, password, akses, id_sto, nama)
    VALUES ('$username', '$password', '$akses', '$id_sto', '$nama')";
    $hasilQueryDt = mysqli_query($con, $queryDt);
  }
  else if ($akses == 4 || $akses == 8 || $akses == 9 || $akses == 10){
    $queryDp = "INSERT INTO detail_picwitel (username, password, akses, id_sto, nama)
    VALUES ('$username', '$password', '$akses', '$id_sto', '$nama')";
    $hasilQueryDp = mysqli_query($con, $queryDp);
  }

 echo '<script language="JavaScript">
   alert("Penyimpanan Berhasil!");
   window.location = "manager_tampil_user.php";
   </script>';

 } else {
  echo '<script language="JavaScript">
  alert("Penyimpanan Gagal!");
  window.location = "manager_tampil_user.php";
  </script>';
 }

$con->close();
}
else{ ?>
<script language="JavaScript">
alert("Isilah Form Terlebih Dahulu");
</script>
<?php
include("manager_input_user.php");
}
?>
