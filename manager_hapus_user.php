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
          alert('data berhasil dihapus!');
          document.location.href = 'list_user_tampil.php'
        </script>
        ";
    } else {
    
      echo "
        <script>
          alert('Data gagal dihapus! Karena user terdapat pada data pelanggan.');
          document.location.href = 'list_user_tampil.php'
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
