<?php

include 'etc/conn.php';
// Initialize message variable
$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {
   // Get image name
   $img1 = $_FILES['img1']['name'];
   $img2 = $_FILES['img2']['name'];
   $img3 = $_FILES['img3']['name'];
   $img4 = $_FILES['img4']['name'];
   // Get text
   $nama = mysqli_real_escape_string($con, $_POST['name']);
   $harga = mysqli_real_escape_string($con, $_POST['harga']);
   $deskripsi = mysqli_real_escape_string($con, $_POST['deskripsi']);
   $lokasi = mysqli_real_escape_string($con, $_POST['lokasi']);
   $video = mysqli_real_escape_string($con, $_POST['video']);

   // image file directory
   $target1 = "images/" . basename($img1);
   $target2 = "images/" . basename($img2);
   $target3 = "images/" . basename($img3);
   $target4 = "images/" . basename($img4);

   $sql = "INSERT INTO tempat VALUES ('','$nama','$harga','$deskripsi','$lokasi','$video','$img1','$img2','$img3','$img4')";
   // execute query
   mysqli_query($con, $sql);

   if (move_uploaded_file($_FILES['img1']['tmp_name'], $target1)) {
      if (move_uploaded_file($_FILES['img2']['tmp_name'], $target2)) {
         if (move_uploaded_file($_FILES['img3']['tmp_name'], $target3)) {
            if (move_uploaded_file($_FILES['img4']['tmp_name'], $target4)) {
               $msg = "Image uploaded successfully";
               header("location: a.php");
            }
         }
      }
   } else {
      $msg = "Failed to upload image";
   }
}
