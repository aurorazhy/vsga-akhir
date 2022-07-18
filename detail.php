<?php include 'etc/conn.php';
include 'etc/header.php';
$id = $_GET['id']; ?>
<div class="d-flex flex-row my-5">
   <div class="d-flex flex-column my-5">
      <div class="col-12">
         <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
               <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
               <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
               <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
               <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <?php $data = mysqli_query($con, "SELECT * FROM tempat WHERE id = '$id'");
            while ($t = mysqli_fetch_array($data)) { ?>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <img src="images/<?= $t['gambar1'] ?>" class="d-block w-100" alt="...">
                     <div class="carousel-caption d-none d-md-block">
                        <p class="fs-6">Rp <?= $t['harga'] ?>/orang</p>
                     </div>
                  </div>
               <?php } ?>
               <div class="carousel-item">
                  <img src="a.png" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                     <h5>Rp 250.000/orang</h5>
                  </div>
               </div>
               <div class="carousel-item">
                  <img src="a.png" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                     <h5>Rp 250.000/orang</h5>
                  </div>
               </div>
               </div>
               <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
               </button>
               <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
               </button>
         </div>
         <div class="text">
            <?php $data = mysqli_query($con, "SELECT * FROM tempat WHERE id = '$id'");
            while ($t = mysqli_fetch_array($data)) { ?>
               <h3 class="my-1"><?= $t['nama'] ?></h3>
               <div>
                  <i class="fas fa-map-marker-alt float-start pe-2"></i>
                  <h6 style="max-width: 50rem;" class="my-2"><?= $t['lokasi'] ?></h6>
               </div>
               <p class="my-3"><?= $t['deskripsi'] ?></p>
         </div>
      </div>
   </div>
   <div class="d-flex flex-column my-5 ms-5 ps-3">
      <iframe width="750" height="400" src="<?= $t['video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <h3 class="my-2"><?= $t['nama'] ?></h3>
      <p class="my-2">
      <ul>
         <li>Pengunjung dewasa dikenakan harga tiket normal</li>
         <li>Pengunjung anak-anak memperoleh potongan harga 50%</li>
         <li>Kriteria anak-anak adalah yang berusia di bawah 12 tahun</li>
      </ul>
      </p>
   <?php } ?>

   <div class="mt-5 d-flex justify-content-end">
      <a href="pesan.php" class="btn btn-secondary">Pesan</a>
   </div>
   </div>
</div>
<?php include 'etc/footer.php' ?>
a