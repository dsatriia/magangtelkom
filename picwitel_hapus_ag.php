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

    $kumpulanIdUser =  query('SELECT user.id FROM `user` INNER JOIN `admin_agency` ON user.username = admin_agency.username WHERE admin_agency.id_admin_agency ='.$id_admin_agency);
    $idUser = $kumpulanIdUser[0]['id'];

    $query = "DELETE FROM admin_agency WHERE id_admin_agency = $id_admin_agency";
    $deleteAdminTabel = mysqli_query($con, $query);

    if ($deleteAdminTabel == TRUE){
      $query = "DELETE FROM user WHERE id = $idUser";
      // echo $query;die;
      mysqli_query($con, $query);
    } else {
      return 0;
    }




    return mysqli_affected_rows($con);
}

function query($query){
  global $con;

  $hasil = mysqli_query($con, $query);
  $rows=[];

  while ($row = mysqli_fetch_assoc($hasil)){
      $rows[] = $row;
  }

  return $rows;
}

if($_SESSION['status']==9){
$id_admin_agency = $_GET["id_admin_agency"];

  // hapusya($id_admin_agency);
    if (hapus($id_admin_agency) > 0){
      // if (hapusya($id_admin_agency) > 0){
      echo "
        <script>
          alert('Data Berhasil Dihapus!');
          document.location.href = 'picwitel_tampil_ag.php'
        </script>
        ";
    } else {

      echo "
        <script>
          alert('Data Gagal Dihapus! User masih terhubung dengan data pelanggan!');
          document.location.href = 'picwitel_tampil_ag.php'
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
