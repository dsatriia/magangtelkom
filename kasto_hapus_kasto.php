<?php
session_start();
require("koneksi.php");

function hapusya($id_picwitel){
global $con;

    $querySelect = "SELECT `username` FROM detail_picwitel WHERE id_picwitel = '$id_picwitel'";
    $hasil = mysqli_query($con,$querySelect);
    $userNama  = mysqli_fetch_array($hasil);
    $userIni = $userNama[0];
    // var_dump ($userIni); die;
    $queryUser = "DELETE FROM user WHERE `username` = $userIni";

    mysqli_query($con, $queryUser);


    return mysqli_affected_rows($con);
}


function hapus($id_picwitel){
    global $con;

    $kumpulanIdUser =  query('SELECT user.id FROM `user` INNER JOIN `detail_picwitel` ON user.username = detail_picwitel.username WHERE detail_picwitel.id_picwitel ='.$id_picwitel);
    $idUser = $kumpulanIdUser[0]['id'];

    $query = "DELETE FROM detail_picwitel WHERE id_picwitel = $id_picwitel";
    $deleteDetailTabel = mysqli_query($con, $query);

    if ($deleteDetailTabel == TRUE){
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

if($_SESSION['status']==8){
$id_picwitel = $_GET["id_picwitel"];

  // hapusya($id_admin_agency);
    if (hapus($id_picwitel) > 0){
      // if (hapusya($id_admin_agency) > 0){
      echo "
        <script>
          alert('User Berhasil Dihapus!');
          document.location.href = 'kasto_tampil_kasto.php'
        </script>
        ";
    } else {

      echo "
        <script>
          alert('User Gagal Dihapus! User masih terhubung dengan data pelanggan!');
          document.location.href = 'kasto_tampil_kasto.php'
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
