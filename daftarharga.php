<?php include 'etc/conn.php';
include 'etc/header.php' ?>

<div class="mt=5 pt-5">
   <h1>Daftar Harga</h1>
   <table class="table table-light table-striped table-hover mt-5 pt-5">
      <thead>
         <tr class="table-info">
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Lokasi</th>
            <th scope="col">Harga</th>
            <th scope="col"></th>
         </tr>
      </thead>
      <?php
      $no = 1;
      $data = mysqli_query($con, "SELECT * FROM tempat");
      while ($t = mysqli_fetch_array($data)) { ?>
         <tbody>
            <tr>
               <th scope="row"><?= $no++ ?></th>
               <td><?= $t['nama'] ?></td>
               <td><?= $t['lokasi'] ?></td>
               <td><?= $t['harga'] ?></td>
               <td><a href="hapustmpt.php?idt=<?= $t['id'] ?>" class="btn btn-danger"><i class="fas fa-times"></i></a></td>
            </tr>
         </tbody>
      <?php } ?>
   </table>
</div>
<?php include 'etc/footer.php' ?>
a