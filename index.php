<?php include 'etc/conn.php';
include 'etc/header.php' ?>

<div class="row row-cols-3">
   <?php $data = mysqli_query($con, "SELECT * FROM tempat");
   while ($t = mysqli_fetch_array($data)) { ?>
      <div class="col">
         <div class="card me-5 mt-5" style="height: 35rem;">
            <iframe class="p-3" height="240" src="<?= $t['video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body">
               <h4 class="card-title"><?= $t['nama'] ?></h4>
               <h6 class="card-title"><?php
                                       if ($t['harga'] == '0') {
                                          echo "Tidak dipunggut biaya";
                                       } else {
                                          echo "RP" . $t['harga'] . "/orang";
                                       }; ?>
               </h6>
               <p class="card-text"><?= $t['deskripsi'] ?></p>
            </div>
            <div class="col-4 m-3"><a href="detail.php?id=<?= $t['id'] ?>" class="btn btn-secondary">Lihat Detail</a></div>
         </div>
      </div>
   <?php } ?>
</div>

<?php include 'etc/footer.php' ?>
a