<?php include 'etc/conn.php';
include 'etc/header.php' ?>
<form action="pesanact.php" method="POST" name="awal">
   <div class="mx-5 p-5">
      <h1 class="mb-5">Form Pemesanan</h1>

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
         <input type="number" name="dewasa" id="dewasa" class="form-control" placeholder="Tiket Dewasa">
         <span class="input-group-text" id="addon-wrapping" style="width: 10rem;">Tiket Anak-anak</span>
         <input type="number" name="anak" id="anak" class="form-control" placeholder="Tiket Anak-anak">
      </div>

      <div class="input-group flex-nowrap pe-5 mt-4">
         <span class="input-group-text" id="addon-wrapping" style="width: 10rem;">Harga per Tiket</span>
         <input type="number" id="harga" class="form-control" disabled>
         <span class="input-group-text" id="addon-wrapping" style="width: 10rem;">Total Harga</span>
         <input type="number" name="total" id="total" class="form-control" disabled>
      </div>

      <button type="button" onclick="jumlah()" class="btn btn-danger">Hitung total</button>
      <button type="submit" class="btn btn-danger">Pesan Tiket</button>
      <button type="reset" href="#" class="btn btn-danger">Batal</button>
   </div>
</form>
<script type="text/javascript">
   function jumlah() {
      hrg = document.getElementById("harga").value;
      an = document.getElementById("anak").value;
      dew = document.getElementById("dewasa").value;
      hrgdew = hrg * dew;
      hrgan = hrg * an;
      hrgann = hrgan * 50 / 100;
      hrgsemua = hrgdew + hrgann;
      document.getElementById("total").value = hrgsemua;
   }

   function setharga() {
      var w = document.awal.wisata.selectedIndex;
      var url_add = document.awal.wisata.options[w].value;
      document.getElementById("harga").value = url_add;
   }
</script>

<?php include 'etc/footer.php' ?>
a