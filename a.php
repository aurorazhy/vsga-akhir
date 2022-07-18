<?php include 'etc/conn.php'; ?>

<form action="aa.php" method="post" enctype="multipart/form-data">
   <input type="text" name="name">
   <input type="number" name="harga">
   <input type="text" name="deskripsi">
   <input type="text" name="lokasi">
   <input type="text" name="video">
   <input type="file" name="img1">
   <input type="file" name="img2">
   <input type="file" name="img3">
   <input type="file" name="img4">

   <button type="submit" name="upload">POST</button>
</form>