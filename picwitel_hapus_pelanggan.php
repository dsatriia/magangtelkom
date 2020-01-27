<?php
session_start();
require("koneksi.php");
function hapus($id){
    global $con;
    $query = "DELETE FROM data_pelanggan WHERE id = $id";
    mysqli_query($con, $query);

    return mysqli_affected_rows($con);
}
if($_SESSION['status']==9){


    $id = $_GET["id"];

    if (hapus($id) > 0){
      echo "
        <script>
          alert('Data Berhasil Dihapus!');
          document.location.href = 'picwitel_tampil.php'
        </script>
        ";
    } else {

      echo "
        <script>
          alert('Data Gagal Dihapus!');
          document.location.href = 'picwitel_tampil.php'
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
