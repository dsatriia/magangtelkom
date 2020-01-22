<table class="table table-hover table-bordered">
    <thead style="background-color:lightgrey" >
      <th rowspan="2" class="text-center"><b>Username</b></th>
      <th rowspan="2" class="text-center"><b>Password</b></th>
      <th rowspan="2" class="text-center"><b>Nama</b></th>
      <th rowspan="2" class="text-center"><b>Agency</b></th>
      <th rowspan="2" class="text-center"><b>Action</b></th>
    </thead>
<tbody>
<?php
include("koneksi.php");
   // $id_kasto = $_SESSION['id_supervisor'];
    $query = "SELECT * FROM supervisor";
    $hasil = mysqli_query($con,$query);
    while ($data = mysqli_fetch_array($hasil)){
    echo "<tr>"; ?>
            <td><?php echo $data['username'] ?></td>
            <td><?php echo $data['password'] ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php
              if ($data['id_agency'] == 0){
                $agency = 'Belum Ada Admin Agency';
              } else {
                $id_agency = $data['id_agency'];
                $query_agency = "SELECT nama FROM agency WHERE id_agency = $id_agency";
                $run_agency = mysqli_query($con, $query_agency);
                $hasil_agency = mysqli_fetch_array($run_agency);
                $agency = $hasil_agency['nama'];
              }
              echo $agency ?>

            </td>


            <td><a href="list_spv_hapus.php?id_supervisor=<?php echo $data['id_supervisor'] ?>" name="btn-delete" onClick='return confirm("Yakin Ingin Menghapus User?");'>Hapus</a></td>
           <?php /* <td><a href="ag_hapus.php?id_ag=<?php echo $data['id_ag'] ?>" name="btn-hapus" onClick='return confirm("Yakin ingin menghapus data?");'>Hapus</a></td> */ ?>
<?php echo "</tr>";
       }
?>
</tbody>
</table>
