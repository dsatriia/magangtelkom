<?php
  include("koneksi.php");
  // $id = $_SESSION['id'];

  // var_dump ($query);
  function query($query){
    global $con;
    $result = mysqli_query($con, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
      $rows[] = $row;
    }
    return $rows;
  }


  function cari1($keyword){
    // $id = $_SESSION['id'];
    $query = "SELECT * FROM admin_agency
              WHERE akses = 1 AND
              nama LIKE '%$keyword%'
              ";

    return query($query);
  }

  // $kumpulanUser = query("SELECT * FROM admin_agency WHERE id_admin_agency != 0 ORDER BY id_agency");
  $kumpulanUser = query("SELECT * FROM admin_agency WHERE akses = 1");


  if (isset($_POST['cari1'])) {
    $kumpulanUser = cari1($_POST["kata-kunci1"]);
  }

  function cari2($keyword){
    // $id = $_SESSION['id'];
    $query = "SELECT * FROM admin_agency
              WHERE akses = 1 AND
              username LIKE '%$keyword%'
              ";

    return query($query);
  }

  if (isset($_POST['cari2'])) {
    $kumpulanUser = cari2($_POST["kata-kunci2"]);
  }

$kumpulanAgency = query("SELECT * FROM agency");


?>

<div id="container">
<br>
<table class="table table-hover table-bordered text-center">
    <thead style="background-color:lightgrey" >
      <th rowspan="2" class="text-center"><b>Nama</b></th>
      <th rowspan="2" class="text-center"><b>Kode ID</b></th>
      <th rowspan="2" class="text-center"><b>Email</b></th>
      <th rowspan="2" class="text-center"><b>Telpon</b></th>
      <th rowspan="2" class="text-center"><b>HP</b></th>
      <th rowspan="2" class="text-center"><b>Agency</b></th>
      <th rowspan="2" class="text-center"><b>Regional</b></th>
      <th rowspan="2" class="text-center"><b>Witel</b></th>
      <th rowspan="2" class="text-center"><b>Datel</b></th>
      <th rowspan="2" class="text-center"><b>Tanggal Aktif</b></th>
      <th rowspan="2" class="text-center"><b>Jabatan</b></th>
      <th rowspan="2" class="text-center"><b>Action</b></th>
    </thead>
<tbody>
<?php
// $id = $_SESSION['id'];
foreach($kumpulanUser as $user): ?>
<tr>
            <td><?php echo $user['nama'] ?></td>
            <td><?php echo $user['username'] ?></td>
            <td><?php echo $user['email'] ?></td>
            <td><?php echo $user['telpon'] ?></td>
            <td><?php echo $user['hp'] ?></td>
            <?php
            if($user['id_agency'] == 1){
              $Agency = 'MEGA CREATIVE PROMOSINDO';
            } elseif($user['id_agency'] == 2){
              $Agency= 'A';
            }elseif($user['id_agency'] == 3){
              $Agency= 'B';
            }elseif($user['id_agency'] == 4){
              $Agency = 'C';
            }elseif($user['id_agency'] == 5){
              $Agency= 'D';
            }elseif($user['id_agency'] == 6){
              $Agency= 'E';
            }elseif($user['id_agency'] == 7){
              $Agency= 'F';
            }elseif($user['id_agency'] == 8){
              $Agency= 'G';
            }elseif($user['id_agency'] == 9){
              $Agency= 'H';
            } elseif($user['id_agency'] == 10){
              $Agency= 'I';
            } elseif($user['id_agency'] == 11){
              $Agency= 'J';
            } elseif($user['id_agency'] == 12){
              $Agency= 'K';
            } elseif($user['id_agency'] == 13){
              $Agency= 'L';
            } elseif($user['id_agency'] == 14){
              $Agency= 'M';
            } elseif($user['id_agency'] == 15){
              $Agency= 'N';
            } elseif($user['id_agency'] == 16){
              $Agency = 'O';
            }
          ?>
          <td><?= $Agency ?></td>
            <td><?php echo $user['regional'] ?></td>
            <td><?php echo $user['witel'] ?></td>
            <td><?php echo $user['datel'] ?></td>
            <td><?php echo $user['tanggal_aktif'] ?></td>


             <td><?php

               if ($user['akses'] == 0){
                 $sto= 'Tidak Ada';
               } else {
                 $akses = $user['akses'];
                 $query_jabatan = "SELECT nama_jabatan FROM jabatan WHERE id_jabatan = $akses";
                 $run_jabatan = mysqli_query($con, $query_jabatan);
                 $hasil_jabatan = mysqli_fetch_array($run_jabatan);
                 $jabatan = $hasil_jabatan['nama_jabatan'];
               }
               echo $jabatan ?>

             </td>

            <td><a href="kasto_edit_ag.php?id_admin_agency=<?= $user['id_admin_agency'] ?>" name="btn-edit"
                onclick="return confirm(&quot;Yakin Ingin Mengedit Data User?&quot;);">Edit</a> | <a
                href="kasto_hapus_ag.php?id_admin_agency=<?= $user['id_admin_agency'] ?>" name="btn-edit"
                onclick="return confirm(&quot;Yakin Ingin Menghapus User?&quot;);">Delete</a></td>
              </tr>
              <?php endforeach ?>
              </tbody>
              </table>
              </div>
