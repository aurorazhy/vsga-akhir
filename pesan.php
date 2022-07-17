<?php include 'conn.php';
include 'header.php' ?>
<div class="mx-5 p-5">
   <h1 class="mb-5">Form Pemesanan</h1>
   <div class="input-group flex-nowrap pe-5 mt-4">
      <span class="input-group-text" id="addon-wrapping">Nama</span>
      <input type="text" class="form-control" placeholder="Nama Lengkap" aria-label="Username" aria-describedby="addon-wrapping">
   </div>
   <div class="input-group flex-nowrap pe-5 mt-4">
      <span class="input-group-text" id="addon-wrapping">Nomor identitas</span>
      <input type="number" class="form-control" placeholder="Nomor identitas" aria-label="Username" aria-describedby="addon-wrapping">
   </div>
   <div class="input-group flex-nowrap pe-5 mt-4">
      <span class="input-group-text" id="addon-wrapping">Nomor HP</span>
      <input type="number" class="form-control" placeholder="Nomor HP" aria-label="Username" aria-describedby="addon-wrapping">
   </div>
   <div class="input-group flex-nowrap pe-5 mt-4">
      <select class="form-select" aria-label="Default select example">
         <option selected>Tempat Wisata</option>
         <option value="1">One</option>
         <option value="2">Two</option>
         <option value="4">Three</option>
      </select>
   </div>
   <div class="input-group flex-nowrap pe-5 mt-4">
      <span class="input-group-text" id="addon-wrapping">Tanggal Kunjungan</span>
      <input type="date" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
   </div>
   <div class="input-group flex-nowrap pe-5 mt-4">
      <span class="input-group-text" id="addon-wrapping">Tiket Dewasa</span>
      <input type="number" class="form-control" placeholder="Tiket Dewasa" aria-label="Username" aria-describedby="addon-wrapping">
      <span class="input-group-text" id="addon-wrapping">Tiket Anak-anak</span>
      <input type="number" class="form-control" placeholder="Tiket Anak-anak" aria-label="Username" aria-describedby="addon-wrapping">
   </div>
   <div class="input-group flex-nowrap pe-5 mt-4">
      <span class="input-group-text" id="addon-wrapping">Harga per Tiket</span>
      <input type="number" class="form-control" placeholder="1" aria-label="Username" aria-describedby="addon-wrapping">
      <span class="input-group-text" id="addon-wrapping">Total Harga</span>
      <input type="number" class="form-control" placeholder="2" aria-label="Username" aria-describedby="addon-wrapping">
   </div>
   <a href="#" class="btn btn-danger">X</a>
   <a href="#" class="btn btn-danger">X</a>
   <a href="#" class="btn btn-danger">X</a>
</div>


<?php include 'footer.php' ?>
a