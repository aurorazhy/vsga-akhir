<?php include 'etc/conn.php';
include 'etc/header.php' ?>
<div class="d-flex flex-row my-5">
   <div class="d-flex flex-column my-5">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
         <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
         </div>
         <div class="carousel-inner">
            <div class="carousel-item active">
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
         <h3 class="my-2">judul</h3>
         <p class="my-2">deskripsi </p>
      </div>
   </div>
   <div class="d-flex flex-column my-5 ms-5 ps-3">
      <iframe width="750" height="400" src="https://www.youtube.com/embed/BXpjwL1jxQ8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <h3 class="my-2">judul</h3>
      <p class="my-2">deskripsi </p>
      <div class="mt-5 pt-5 d-flex justify-content-end">
         <a href="#" class="btn btn-info">Pesan</a>
      </div>
   </div>
</div>
<?php include 'etc/footer.php' ?>
a