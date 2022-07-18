<?php include 'etc/conn.php';
include 'etc/header.php'; ?>

<div class="mt=5 pt-5">
   <h1>Daftar Pesan</h1>
   <table class="table table-light table-striped table-hover mt-5 pt-5">
      <thead>
         <tr class="table-info">
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">No Identitas</th>
            <th scope="col">No HP</th>
            <th scope="col">Tempat Wisata</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Tiket Dewasa</th>
            <th scope="col">Tiket Anak-anak</th>
            <th scope="col">Total Harga</th>
            <th scope="col"></th>
         </tr>
      </thead>
      <?php
      $no = 1;
      $data = mysqli_query($con, "SELECT * FROM customer INNER JOIN tempat ON customer.tempat = tempat.harga");
      while ($c = mysqli_fetch_array($data)) { ?>
         <tbody>
            <tr>
               <th scope="row"><?= $no++ ?></th>
               <td><?= $c['namacus'] ?></td>
               <td><?= $c['no_identitas'] ?></td>
               <td><?= $c['no_hp'] ?></td>
               <td><?= $c['nama'] ?></td>
               <td><?= $c['tanggal'] ?></td>
               <td><?= $c['dewasa'] ?></td>
               <td><?= $c['anak'] ?></td>
               <td><?= $c['total'] ?></td>
               <td><a href="hapuscus.php?idh=<?= $c['idcus'] ?>" class="btn btn-danger"><i class="fas fa-times"></i></a></td>
            </tr>
         </tbody>
      <?php } ?>
   </table>
</div>

<?php include 'etc/footer.php' ?>
a