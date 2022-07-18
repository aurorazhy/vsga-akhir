<?php
include 'etc/conn.php';

$nama = $_POST['nama'];
$noid = $_POST['noidentitas'];
$nohp = $_POST['nohp'];
$tempat = $_POST['wisata'];
$tanggal = $_POST['tanggal'];
$dewasa = $_POST['dewasa'];
$anak = $_POST['anak'];

$hrgdew = $tempat * $dewasa;
$hrgan = $tempat * $anak;
$hrgann = $hrgan * 50 / 100;
$total = $hrgdew + $hrgann;

mysqli_query($con, "INSERT INTO customer VALUES('','$nama','$noid','$nohp','$tempat','$tanggal','$dewasa','$anak','$total')");

header('location: index.php');
