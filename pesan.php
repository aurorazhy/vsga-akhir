<?php include 'etc/conn.php';
include 'etc/header.php' ?>
<form action="proses/receipt.php" method="POST" name="awal">
   <div class="mx-5 p-5">
      <h1 class="mb-5">Form Pemesanan Tiket</h1>

      <div class="input-group flex-nowrap pe-5 mt-4">
         <span class="input-group-text" id="addon-wrapping" style="width: 10rem;">Nama</span>
         <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
      </div>

      <div class="input-group flex-nowrap pe-5 mt-4">
         <span class="input-group-text" id="addon-wrapping" style="width: 10rem;">Nomor identitas</span>
         <input type="number" name="noidentitas" class="form-control" placeholder="Nomor identitas">
      </div>

      <div class="input-group flex-nowrap pe-5 mt-4">
         <span class="input-group-text" id="addon-wrapping" style="width: 10rem;">Nomor HP</span>
         <input type="number" name="nohp" class="form-control" placeholder="Nomor HP">
      </div>

      <div class="input-group flex-nowrap pe-5 mt-4">
         <select class="form-select" name="wisata" aria-label="Default select example" onChange="setharga()">
            <option selected>Tempat Wisata</option>
            <?php $data = mysqli_query($con, "SELECT * FROM tempat");
            while ($t = mysqli_fetch_array($data)) { ?>
               <option value="<?= $t['harga'] ?>"><?= $t['nama'] ?></option>
            <?php } ?>
         </select>
      </div>

      <div class="input-group flex-nowrap pe-5 mt-4">
         <span class="input-group-text" id="addon-wrapping" style="width: 10rem;">Tanggal Kunjungan</span>
         <input type="date" name="tanggal" class="form-control" placeholder="Username">
      </div>

      <div class="input-group flex-nowrap pe-5 mt-4">
         <span class="input-group-text" id="addon-wrapping" style="width: 10rem;">Tiket Dewasa</span>
         <input type="number" name="dewasa" id="dewasa" class="form-control" value="0">
         <span class="input-group-text" id="addon-wrapping" style="width: 10rem;">Tiket Anak-anak</span>
         <input type="number" name="anak" id="anak" class="form-control" value="0">
      </div>

      <div class="input-group flex-nowrap pe-5 mt-4">
         <span class="input-group-text" id="addon-wrapping" style="width: 10rem;">Harga per Tiket</span>
         <input type="number" id="harga" class="form-control" disabled>
         <span class="input-group-text" id="addon-wrapping" style="width: 10rem;">Total Harga</span>
         <input type="number" name="total" id="total" class="form-control" disabled>
      </div>

      <div class="input-group flex-nowrap pe-5 mt-4">
         <ul class="list-group">
            <li class="list-group-item " style="width: auto;">
               <input type="checkbox" required> Saya dan/atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan
            </li>
         </ul>
      </div>

      <div class="d-flex justify-content-center">
         <button type="button" onclick="jumlah()" class="btn my-5 mx-2 btn-lg btn-secondary">Hitung total</button>
         <button type="submit" class="btn my-5 mx-2 btn-lg btn-success">Pesan Tiket</button>
         <button type="reset" class="btn my-5 mx-2 btn-lg btn-danger">Batal</button>
      </div>
</form>
<script type="text/javascript">
   function setharga() {
      var s = document.awal.wisata.selectedIndex;
      var chosen = document.awal.wisata.options[s].value;
      document.getElementById("harga").value = chosen;
   }

   function jumlah() {
      hrg = document.getElementById("harga").value;
      anak = document.getElementById("anak").value;
      dewasa = document.getElementById("dewasa").value;
      hrgDewasa = hrg * dewasa;
      hrgAnak = hrg * anak;
      hrgAnakDiskon = hrgAnak * 50 / 100;
      hrgTotal = hrgDewasa + hrgAnakDiskon;
      document.getElementById("total").value = hrgTotal;
   }
</script>

<?php include 'etc/footer.php' ?>