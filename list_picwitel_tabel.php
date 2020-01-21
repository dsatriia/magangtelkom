<table class="table table-hover table-bordered">
    <thead style="background-color:lightgrey" >
      <th rowspan="2" class="text-center"><b>Username</b></th>
      <th rowspan="2" class="text-center"><b>Password</b></th>
      <th rowspan="2" class="text-center"><b>Nama</b></th>
      <th rowspan="2" class="text-center"><b>Action</b></th>
    </thead>
<tbody>
<?php
include("koneksi.php");
   // $id_picwitel = $_SESSION['id_picwitel'];
    $query = "SELECT * FROM picwitel";
    $hasil = mysqli_query($con,$query);
    while ($data = mysqli_fetch_array($hasil)){
    echo "<tr>"; ?>
            <td><?php echo $data['username'] ?></td>
            <td><?php echo $data['password'] ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><a href="list_picwitel_hapus.php?id_picwitel=<?php echo $data['id_picwitel'] ?>" name="btn-delete" onClick='return confirm("Yakin Ingin Menghapus User?");'>Hapus</a></td>
           <?php /* <td><a href="ag_hapus.php?id_ag=<?php echo $data['id_ag'] ?>" name="btn-hapus" onClick='return confirm("Yakin ingin menghapus data?");'>Hapus</a></td> */ ?>
<?php echo "</tr>";
       }
?>
</tbody>
</table>
