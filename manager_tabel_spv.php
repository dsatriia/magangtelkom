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


  function cari($keyword){
    // $id = $_SESSION['id'];
    $query = "SELECT * FROM supervisor
              WHERE id_supervisor != 0 AND (
              nama LIKE '%$keyword%' OR
              username LIKE '%$keyword%' OR
              tanggal_aktif LIKE '%$keyword%')";


    return query($query);
  }


  // $kumpulanUser = query("SELECT * FROM supervisor WHERE id_supervisor != 0 ORDER BY id_agency");
  $kumpulanUser = query("SELECT * FROM supervisor WHERE id_supervisor != 0");


  if (isset($_POST['cari'])) {
    $kumpulanUser = cari($_POST["kata-kunci"]);
  }
$kumpulanAgency = query("SELECT * FROM agency");
$kumpulanAdminAgency = query("SELECT * FROM admin_agency");



?>

<div id="container">
<br>
<table class="table table-hover table-bordered text-center">
    <thead style="background-color:lightgrey" >
      <th rowspan="2" class="text-center"><b>Nama</b></th>
      <th rowspan="2" class="text-center"><b>Kode</b></th>
      <th rowspan="2" class="text-center"><b>Email</b></th>
      <th rowspan="2" class="text-center"><b>Telpon</b></th>
      <th rowspan="2" class="text-center"><b>HP</b></th>
      <th rowspan="2" class="text-center"><b>Agency</b></th>
      <th rowspan="2" class="text-center"><b>Admin Agency</b></th>
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
          <td><?php

            if ($user['id_admin_agency'] == 0){
              $admin_agency= 'Tidak Ada';
            } else {
              $id_admin_agency = $user['id_admin_agency'];
              $query_admin_agency = "SELECT nama FROM admin_agency WHERE id_admin_agency = $id_admin_agency";
              $run_admin_agency = mysqli_query($con, $query_admin_agency);
              $hasil_admin_agency = mysqli_fetch_array($run_admin_agency);
              $admin_agency = $hasil_admin_agency['nama'];
            }
            echo $admin_agency ?>

          </td>
            <td><?php echo $user['regional'] ?></td>
            <td><?php echo $user['witel'] ?></td>
            <td><?php echo $user['datel'] ?></td>
            <td><?php echo $user['tanggal_aktif'] ?></td>


             <td><?php

               if ($user['akses'] == 0){
                 $akses= 'Tidak Ada';
               } else {
                 $akses = $user['akses'];
                 $query_jabatan = "SELECT nama_jabatan FROM jabatan WHERE id_jabatan = $akses";
                 $run_jabatan = mysqli_query($con, $query_jabatan);
                 $hasil_jabatan = mysqli_fetch_array($run_jabatan);
                 $jabatan = $hasil_jabatan['nama_jabatan'];
               }
               echo $jabatan ?>

             </td>

            <td><a href="manager_edit_spv.php?id_supervisor=<?= $user['id_supervisor'] ?>" name="btn-edit"
                onclick="return confirm(&quot;Yakin Ingin Mengedit Data User?&quot;);">Edit</a> | <a
                href="manager_hapus_spv.php?id_supervisor=<?= $user['id_supervisor'] ?>" name="btn-edit"
                onclick="return confirm(&quot;Yakin Ingin Menghapus User?&quot;);">Delete</a></td>
              </tr>
              <?php endforeach ?>
              </tbody>
              </table>
              </div>
              <script src="assets/js/jquery.min.js"></script>
              <script>
              $(document).ready(function(){
              // var keyword = document.getElementById('keyword');
              // keyword.addEventListener('keyup', function(){
              //   alert('oke');
              // });

              // event ketika keyword ditulis
              $('#agency').on('change',function(){
              $.get('user_ajax_manager_spv.php?agency=' + $('#agency').val(), function(data){
                $('#container').html(data);
                console.log('haloo');
              });
              });
              });

              </script>
