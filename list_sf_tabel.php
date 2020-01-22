<table class="table table-hover table-bordered">
    <thead style="background-color:lightgrey" >
      <th rowspan="2" class="text-center"><b>Username</b></th>
      <th rowspan="2" class="text-center"><b>Password</b></th>
      <th rowspan="2" class="text-center"><b>Nama</b></th>
      <th rowspan="2" class="text-center"><b>Supervisor</b></th>
      <th rowspan="2" class="text-center"><b>Action</b></th>
    </thead>
<tbody>
<?php
include("koneksi.php");
   // $id_kasto = $_SESSION['id_salesforce'];
    $query = "SELECT * FROM salesforce";
    $hasil = mysqli_query($con,$query);
    while ($data = mysqli_fetch_array($hasil)){
    echo "<tr>"; ?>
            <td><?php echo $data['username'] ?></td>
            <td><?php echo $data['password'] ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php
              if ($data['id_supervisor'] == 0){
                $supervisor = 'Belum Ada Supervisor';
              } else {
                $id_supervisor = $data['id_supervisor'];
                $query_supervisor = "SELECT nama FROM supervisor WHERE id_supervisor = $id_supervisor";
                $run_supervisor = mysqli_query($con, $query_supervisor);
                $hasil_supervisor = mysqli_fetch_array($run_supervisor);
                $supervisor = $hasil_supervisor['nama'];
              }
              echo $supervisor ?>

            </td>


            <td><a href="list_sf_hapus.php?id_salesforce=<?php echo $data['id_salesforce'] ?>" name="btn-delete" onClick='return confirm("Yakin Ingin Menghapus User?");'>Hapus</a></td>
           <?php /* <td><a href="ag_hapus.php?id_ag=<?php echo $data['id_ag'] ?>" name="btn-hapus" onClick='return confirm("Yakin ingin menghapus data?");'>Hapus</a></td> */ ?>
<?php echo "</tr>";
       }
?>
</tbody>
</table>
