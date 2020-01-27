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

      ////////////////
      $queryAkses = "SELECT akses FROM user WHERE id='$id'";
      $runQueryAkses = mysqli_query($con, $queryAkses);

      $queryUsername = "SELECT username FROM user WHERE id='$id'";
      $runQueryUsername = mysqli_query($con, $queryUsername);

      if ($runQueryAkses == 1){
        function hapusAg ($runQueryUsername){
        global $con;
        $queryDelAg = "DELETE FROM admin_agency WHERE username = $runQueryUsername"
        mysqli_query($con, $queryDelAg);
        
        return mysqli_affected_rows($con);

        // $runQueryDelAg = mysqli_query($con, $queryDelAg);
        // return $runQueryDelAg;
        }
      }

      else if ($runQueryAkses == 2){
        global $con;
        $queryDelSpv = "DELETE FROM supervisor WHERE username = $runQueryUsername"
        mysqli_query($con, $queryDelSpv);

        return mysqli_affected_rows($con);
      }

      else if ($runQueryAkses == 3){
        global $con;
        $queryDelSf = "DELETE FROM salesforce WHERE username = $runQueryUsername"
        mysqli_query($con, $queryDelSf);

        return mysqli_affected_rows($con);
      }

      else if ($runQueryAkses == 5 || $runQueryAkses == 6 || $runQueryAkses == 7){
          global $con;
        $queryDelDt = "DELETE FROM detail_teknis WHERE username = $runQueryUsername"
        mysqli_query($con, $queryDelDt);

        return mysqli_affected_rows($con);
      }
      else if ($runQueryAkses == 4 || $runQueryAkses == 8 || $runQueryAkses == 9 || $runQueryAkses == 10){
        global $con;
        $queryDelDp = "DELETE FROM detail_picwitel WHERE username = $runQueryUsername"
        mysqli_query($con, $queryDelDp);

        return mysqli_affected_rows($con);
      }
       ///////////////
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
