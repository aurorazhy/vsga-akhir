<?php
include '../etc/conn.php';

$nama = $_POST['nama'];
$noid = $_POST['noidentitas'];
$nohp = $_POST['nohp'];
$hargaTempat = $_POST['wisata'];
$tanggal = $_POST['tanggal'];
$dewasa = $_POST['dewasa'];
$anak = $_POST['anak'];

$hrgDewasa = $hargaTempat * $dewasa;
$hrgAnak = $hargaTempat * $anak;
$hrgAnakDiskon = $hrgAnak * 50 / 100;
$totalHarga = $hrgDewasa + $hrgAnakDiskon;

mysqli_query($con, "INSERT INTO customer VALUES('','$nama','$noid','$nohp','$hargaTempat','$tanggal','$dewasa','$anak','$totalHarga')");

include '../etc/header.php' ?>
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
<div class="mx-auto pt-5 my-5" style="width: 30rem;">
   <div class="card my-5 p-3">
      <div class="card-body">
         <p class="fs-4 font-monospace text-center m-0">°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°</p>
         <p class="fs-4 font-monospace text-center m-0 ">RECEIPT</p>
         <p class="fs-4 font-monospace text-center m-0 mt-2 mb-4">°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°</p>
         <form action="">
            <table>
               <tr>
                  <td>Nama</td>
                  <td class="divider"> : </td>
                  <td><?= $nama ?></td>
               </tr>
               <tr>
                  <td>No Identitas</td>
                  <td class="divider"> : </td>
                  <td><?= $noid ?></td>
               </tr>
               <tr>
                  <td>No HP</td>
                  <td class="divider"> : </td>
                  <td><?= $nohp ?></td>
               </tr>
               <tr>
                  <td>Tempat</td>
                  <td class="divider"> : </td>
                  <?php $data = mysqli_query($con, "SELECT nama FROM tempat WHERE harga = $hargaTempat");
                  while ($t = mysqli_fetch_array($data)) { ?>
                     <td><?= $t['nama'] ?></td>
                  <?php } ?>
               </tr>
               <tr>
                  <td>Tanggal</td>
                  <td class="divider"> : </td>
                  <td><?= $tanggal ?></td>
               </tr>
               <tr>
                  <td>Tiket Dewasa</td>
                  <td class="divider"> : </td>
                  <td><?= $dewasa ?></td>
               </tr>
               <tr>
                  <td>Tiket Anak-anak</td>
                  <td class="divider"> : </td>
                  <td><?= $anak ?></td>
               </tr>
               <tr>
                  <td>Total</td>
                  <td class="divider"> : </td>
                  <td><?= $totalHarga ?></td>
               </tr>
            </table>
         </form>
      </div>
   </div>
   <center>
      <a href="../index.php" class="btn btn-secondary px-4">Selesai</a>
   </center>
</div>

<?php include '../etc/footer.php' ?>