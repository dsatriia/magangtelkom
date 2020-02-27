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
$pelanggan = query("SELECT * FROM data_pelanggan WHERE id_admin_agency=$id AND kategori_progress_psb='OK'");
?>
<p>&emsp;Progress PSB OK</p>
<table class="table table-hover table-bordered text-center">
  <thead style="background-color:lightgrey">
    <th rowspan="2" class="text-center"><b>Track ID</b></th>
    <th rowspan="2" class="text-center"><b>Nama Pelanggan</b></th>
    <th rowspan="2" class="text-center"><b>No SC</b></th>
    </thead>
<tbody>

<?php
foreach($pelanggan as $p){
echo "<tr>"; ?>
  <td><?php echo $p['track_id'] ?></td>
  <td><?php echo $p['nama_pelanggan'] ?></td>
  <td><?php echo $p['no_sc'] ?></td>
<?php echo "</tr>";
       }
?>
</tbody>
</table>
