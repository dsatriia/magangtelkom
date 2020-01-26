<?php
session_start();
require("koneksi.php");
function hapus($id){
    global $con;
    $query = "DELETE FROM user WHERE id = $id";
    mysqli_query($con, $query);

    return mysqli_affected_rows($con);
}

if($_SESSION['status']==8){


    $id = $_GET["id"];

    if (hapus($id) > 0){
      echo "
        <script>
          alert('User Berhasil Dihapus!');
          document.location.href = 'manager_tampil_user.php'
        </script>
        ";
    } else {

      echo "
        <script>
          alert('User Gagal Dihapus! Karena User ada pada Data Pelanggan.');
          document.location.href = 'manager_tampil_user.php'
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
