<?php include '../etc/conn.php';
include '../etc/header.php'; ?>
<style>
   table {
      border: 0px;
   }

   .divider {
      width: 5rem;

   }

   td {
      width: 30rem;
      height: 2rem;
   }
</style>
<form action="print.php" method="post">
   <div class="mx-auto pt-5 my-5" style="width: 30rem;">
      <div class="card my-5 p-3">
         <div class="card-body">
            <p class="fs-4 font-monospace text-center m-0">°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°</p>
            <p class="fs-4 font-monospace text-center m-0 ">RECEIPT</p>
            <p class="fs-4 font-monospace text-center m-0 mt-2 mb-4">°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°</p>

            <?php
            $id = $_GET['idh'];
            $cus = mysqli_query($con, "SELECT * FROM customer INNER JOIN tempat ON tempat = harga WHERE idcus = $id");
            while ($c = mysqli_fetch_array($cus)) { ?>
               <table>
                  <tr>
                     <td>Nama</td>
                     <td class="divider"> : </td>
                     <td><input type="hidden" name="id" value="<?= $id ?>"><?= $c['namacus'] ?></td>
                  </tr>
                  <tr>
                     <td>No Identitas</td>
                     <td class="divider"> : </td>
                     <td><?= $c['no_identitas'] ?></td>
                  </tr>
                  <tr>
                     <td>No HP</td>
                     <td class="divider"> : </td>
                     <td><?= $c['no_hp'] ?></td>
                  </tr>
                  <tr>
                     <td>Tempat</td>
                     <td class="divider"> : </td>
                     <td><?= $c['nama'] ?></td>
                  </tr>
                  <tr>
                     <td>Tanggal</td>
                     <td class="divider"> : </td>
                     <td><?= $c['tanggal'] ?></td>
                  </tr>
                  <tr>
                     <td>Tiket Dewasa</td>
                     <td class="divider"> : </td>
                     <td><?= $c['dewasa'] ?></td>
                  </tr>
                  <tr>
                     <td>Tiket Anak-anak</td>
                     <td class="divider"> : </td>
                     <td><?= $c['anak'] ?></td>
                  </tr>
                  <tr>
                     <td>Total</td>
                     <td class="divider"> : </td>
                     <td><?= $c['total'] ?></td>
                  </tr>
               </table>
            <?php } ?>
         </div>
      </div>
      <center>
         <a href="../index.php" class="btn btn-secondary px-4">Selesai</a>
         <button type="submit" class="btn btn-dark px-4"><i class="fas fa-print"></i>
      </center>
   </div>
</form>

<?php include '../etc/footer.php' ?>