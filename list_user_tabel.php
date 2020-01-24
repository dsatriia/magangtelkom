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

  function cari($keyword){
    $query = "SELECT * FROM user
              WHERE
              nama LIKE '%$keyword%' OR
              username LIKE '%$keyword%'          
              ";
              
              
    return query($query);
  }
    

  $kumpulanUser = query("SELECT id, nama, username, akses, id_sto FROM user");

  
  if (isset($_POST['cari'])) {
    $kumpulanUser = cari($_POST["kata-kunci"]);
  }
  

  
  
?>

<form action="" method="post">
  <div class="form-group">
      <input name="kata-kunci" class="form-control border-input" type="text" placeholder="Masukkan kata kunci pencarian...">
      <button class="btn btn-primary" name="cari" type="submit">Cari</button>
  </div>
      
</form>
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






<!-- <div class="content">
  <div class="container-fluid">


    <ul class="nav">
      <li <?php // if(isset($page) && $page == 1): echo "class='active'"; endif ?>>
        <div class="header">
          <a href="list_ag_tampil.php">
            <button type="submit" class="btn btn-default" style="font-size:14pt; width: 250px"><b>Admin
                Agency</b></button>
          </a>
        </div>
      </li>
      <li <?php // if(isset($page) && $page == 2): echo "class='active'"; endif ?>>
        <div class="header">
          <a href="list_spv_tampil.php">
            <button type="submit" class="btn btn-default"
              style="font-size:14pt; width: 250px"><b>Supervisor</b></button>
          </a>
        </div>
      </li>
      <li <?php //if(isset($page) && $page == 3): echo "class='active'"; endif ?>>
        <div class="header">
          <a href="list_sf_tampil.php">
            <button type="submit" class="btn btn-default" style="font-size:14pt; width: 250px"><b>Sales
                Force</b></button>
          </a>
        </div>
      </li>
      <li <?php //if(isset($page) && $page == 4): echo "class='active'"; endif ?>>
        <div class="header">
          <a href="list_inputer_tampil.php">
            <button type="submit" class="btn btn-default" style="font-size:14pt; width: 250px"><b>Inputer</b></button>
          </a>
        </div>
      </li>
      <li <?php //if(isset($page) && $page == 5): echo "class='active'"; endif ?>>
        <div class="header">
          <a href="list_teknisi_tampil.php">
            <button type="submit" class="btn btn-default" style="font-size:14pt; width: 250px"><b>Teknisi</b></button>
          </a>
        </div>
      </li>
      <li <?php //if(isset($page) && $page == 6): echo "class='active'"; endif ?>>
        <div class="header">
          <a href="list_tl_tampil.php">
            <button type="submit" class="btn btn-default" style="font-size:14pt; width: 250px"><b>TL</b></button>
          </a>
        </div>
      </li>
      <li <?php //// if(isset($page) && $page == 7): echo "class='active'"; endif ?>>
        <div class="header">
          <a href="list_woc_tampil.php">
            <button type="submit" class="btn btn-default" style="font-size:14pt; width: 250px"><b>WOC</b></button>
          </a>
        </div>
      </li>
      <li <?php // if(isset($page) && $page == 8): echo "class='active'"; endif ?>>
        <div class="header">
          <a href="list_manager_tampil.php">
            <button type="submit" class="btn btn-default" style="font-size:14pt; width: 250px"><b>Manager</b></button>
          </a>
        </div>
      </li>
      <li <?php // if(isset($page) && $page == 9): echo "class='active'"; endif ?>>
        <div class="header">
          <a href="list_picwitel_tampil.php">
            <button type="submit" class="btn btn-default" style="font-size:14pt; width: 250px"><b>PIC Witel</b></button>
          </a>
        </div>
      </li>
      <li <?php // if(isset($page) && $page == 10): echo "class='active'"; endif ?>>
        <div class="header">
          <a href="list_kasto_tampil.php">
            <button type="submit" class="btn btn-default" style="font-size:14pt; width: 250px"><b>Ka STO</b></button>
          </a>
        </div>
      </li>
    </ul>
  </div>
</div> -->