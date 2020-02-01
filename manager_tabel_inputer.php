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
    $query = "SELECT * FROM detail_picwitel
              WHERE akses = 4 AND (
              nama LIKE '%$keyword%' OR
              username LIKE '%$keyword%' OR
              tanggal_aktif LIKE '%$keyword%')";

    return query($query);
  }

  // $kumpulanUser = query("SELECT * FROM detail_picwitel WHERE id_picwitel != 0 ORDER BY id_agency");
  $kumpulanUser = query("SELECT * FROM detail_picwitel WHERE akses = 4");

  if (isset($_POST['cari'])) {
    $kumpulanUser = cari($_POST["kata-kunci"]);
  }
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
      <th rowspan="2" class="text-center"><b>Regional</b></th>
      <th rowspan="2" class="text-center"><b>Witel</b></th>
      <th rowspan="2" class="text-center"><b>Datel</b></th>
      <th rowspan="2" class="text-center"><b>Tanggal Aktif</b></th>
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
            <td><?php echo $user['regional'] ?></td>
            <td><?php echo $user['witel'] ?></td>
            <td><?php echo $user['datel'] ?></td>
            <td><?php echo $user['tanggal_aktif'] ?></td>

            <td><a href="manager_edit_inputer.php?id_picwitel=<?= $user['id_picwitel'] ?>" name="btn-edit"
                onclick="return confirm(&quot;Yakin Ingin Mengedit Data User?&quot;);">Edit</a> | <a
                href="manager_hapus_inputer.php?id_picwitel=<?= $user['id_picwitel'] ?>" name="btn-edit"
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
                $('#jabatan').on('change',function(){
                  $.get('user_ajax_manager_inputer.php?jabatan=' + $('#jabatan').val(), function(data){
                    $('#container').html(data);
                    console.log('haloo');
                  });
                });
              });

              </script>
