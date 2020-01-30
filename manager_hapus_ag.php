<?php
session_start();
require("koneksi.php");





function hapusya($id_admin_agency){
global $con;

    $querySelect = "SELECT `username` FROM admin_agency WHERE id_admin_agency = '$id_admin_agency'";
    $hasil = mysqli_query($con,$querySelect);
    $userNama  = mysqli_fetch_array($hasil);
    $userIni = $userNama[0];
    // var_dump ($userIni); die;
    $queryUser = "DELETE FROM user WHERE `username` = $userIni";

    mysqli_query($con, $queryUser);


    return mysqli_affected_rows($con);
}


function hapus($id_admin_agency){
    global $con;

    $query = "DELETE FROM admin_agency WHERE id_admin_agency = $id_admin_agency";
    mysqli_query($con, $query);


    return mysqli_affected_rows($con);
}
if($_SESSION['status']==8){
$id_admin_agency = $_GET["id_admin_agency"];

  // hapusya($id_admin_agency);
    if (hapus($id_admin_agency) > 0){
      // if (hapusya($id_admin_agency) > 0){
      echo "
        <script>
          alert('Data Berhasil Dihapus!');
          document.location.href = 'manager_tampil_ag.php'
        </script>
        ";
    } else {

      echo "
        <script>
          alert('Data Gagal Dihapus!');
          document.location.href = 'manager_tampil_ag.php'
        </script>
        ";
    }
} else {
    echo "
    <script>
      document.location.href = 'index.php'
    </script>
    ";
}
