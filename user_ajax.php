<?php
  include("koneksi.php");
  function query($query){
    global $con;
    $result = mysqli_query($con, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
      $rows[] = $row;
    }
    return $rows;
  }
  
$jabatan = $_GET["jabatan"];

$query = "SELECT * FROM user
          WHERE akses = $jabatan
          ";
$kumpulanUser = query($query);


// var_dump($mahasiswa);


?>
<table class="table table-hover table-bordered text-center">
  <thead style="background-color:lightgrey">
    <tr>
      <th rowspan="2" class="text-center"><b>Nama</b></th>
      <th rowspan="2" class="text-center"><b>Username</b></th>
      <th rowspan="2" class="text-center"><b>Akses</b></th>
      <th rowspan="2" class="text-center"><b>STO</b></th>
      <th rowspan="2" class="text-center"><b>Action</b></th>
    </tr>
    </tr>
  </thead>
  <tbody>
    <?php foreach($kumpulanUser as $user): ?>
    <tr>
      <td><?= $user['nama'] ?></td>
      <td><?= $user['username'] ?></td>
      <?php
        if($user['akses'] == 1){
          $jabatan = 'Admin Agency';
        } elseif($user['akses'] == 2){
          $jabatan = 'Supervisor';
        }elseif($user['akses'] == 3){
          $jabatan = 'Salesforce';
        }elseif($user['akses'] == 4){
          $jabatan = 'Inputer';
        }elseif($user['akses'] == 5){
          $jabatan = 'Teknisi';
        }elseif($user['akses'] == 6){
          $jabatan = 'TL';
        }elseif($user['akses'] == 7){
          $jabatan = 'WOC';
        }elseif($user['akses'] == 8){
          $jabatan = 'Manager';
        }elseif($user['akses'] == 9){
          $jabatan = 'PIC Witel';
        } elseif($user['akses'] == 10){
          $jabatan = 'Ka Sto';
        }
      ?>
      <td><?= $jabatan ?></td>
     
     <?php
      $id_sto = $user['id_sto'];
      $kumpulanArea = query("SELECT * FROM sto WHERE id_sto = $id_sto");
      $area = $kumpulanArea[0]['area'];

      ?>
      <td><?= $area ?></td>
      <td><a href="manager_edit_user.php?id=<?= $user['id'] ?>" name="btn-edit"
          onclick="return confirm(&quot;Yakin Ingin Mengedit Data?&quot;);">Edit</a> | <a
          href="manager_hapus_user.php?id=<?= $user['id'] ?>" name="btn-edit"
          onclick="return confirm(&quot;Yakin Ingin Menghapus Data?&quot;);">Delete</a></td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>