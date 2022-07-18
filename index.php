<?php include 'etc/conn.php';
include 'etc/header.php' ?>
<a href="#" style="width: 5rem;" class="btn btn-info"><i class="fa-solid fa-plus"></i></a>

<div class="row row-cols-3">
   <?php $data = mysqli_query($con, "SELECT * FROM tempat");
   while ($t = mysqli_fetch_array($data)) { ?>
      <div class="col">
         <div class="card me-5 mt-5" style="height: 35rem;">
            <iframe class="p-3" height="240" src="<?= $t['video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body">
               <h4 class="card-title"><?= $t['nama'] ?></h4>
               <h6 class="card-title">Rp <?= $t['harga'] ?>/orang </h6>
               <p class="card-text"><?= $t['deskripsi'] ?></p>
            </div>
            <div class="col-4 m-3"><a href="detail.php?id=<?= $t['id'] ?>" class="btn btn-secondary">Lihat Detail</a></div>
         </div>
      </div>
   <?php } ?>
</div>


<div>
   <form name="myform">
      <select name="wisata" onChange="nav()">
         <option value="10">aaa</option>
         <option value="20">bbb</option>
         <option value="30">ccc</option>
      </select>
   </form>

   harga <input type="text" value="10" id="hrg"><br>
   anak : <input type="number" id="an">
   dewasa : <input type="number" id="dew">

   <input type="button" onclick="multiplyBy()" value="jumlah">

   <span id="result"></span>

   <script type="text/javascript">
      function multiplyBy() {
         hrg = document.getElementById("hrg").value;
         num1 = document.getElementById("an").value;
         num2 = document.getElementById("dew").value;
         hrgdew = hrg * num2;
         hrgan = hrg * num1;
         hrgann = hrgan * 50 / 100;
         hrgsemua = hrgdew + hrgann;
         document.getElementById("result").innerHTML = hrgsemua;
      }

      function nav() {
         var w = document.myform.wisata.selectedIndex;
         var url_add = document.myform.wisata.options[w].value;
         document.getElementById("hrg").value = url_add;
      }
   </script>
</div>
<?php include 'etc/footer.php' ?>
a