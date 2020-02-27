<?php
include("koneksi.php");
$id = $_SESSION['id'];

function query($query){
  global $con;

  $hasil = mysqli_query($con, $query);
  $rows=[];

  while ($row = mysqli_fetch_assoc($hasil)){
      $rows[] = $row;
  }

  return $rows;
}
$pelanggan = query("SELECT * FROM data_pelanggan WHERE id_admin_agency=$id");

// $kumpulanSto = query("SELECT * FROM sto");

?>
 <!-- tempat dropown sto yg sebelumnya -->

<table class="table table-hover table-bordered text-center">
  <thead style="background-color:lightgrey">
    <th rowspan="2" class="text-center"><b>Track ID</b></th>
    <th rowspan="2" class="text-center"><b>Nama Pelanggan</b></th>
    <th rowspan="2" class="text-center"><b>Status Validasi</b></th>
    </thead>
<tbody>

<?php foreach($pelanggan as $p):?>
  <tr>
  <td><?php echo $p['track_id'] ?></td>
  <td><?php echo $p['nama_pelanggan'] ?></td>
  <td><?php echo $p['status_validasi'] ?></td>
</tr>
    <?php endforeach ?>
  </tbody>
</table>
</div>
<!-- <script src="assets/js/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // var keyword = document.getElementById('keyword');
  // keyword.addEventListener('keyup', function(){
  //   alert('oke');
  // });

  // event ketika keyword ditulis
  $('#sto').on('change',function(){
    $.get('sf_ajax.php?sto=' + $('#sto').val(), function(data){
      // $.get('dashboard_sf_ajax.php?sto=' + $('#sto').val(), function(data){
      $('#container').html(data);
      console.log('haloo');
    });
  });
});

</script> -->
