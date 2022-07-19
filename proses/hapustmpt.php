<?php

include '../etc/conn.php';

$idt = $_GET['idt'];

mysqli_query($con, "DELETE FROM tempat WHERE id='$idt'");

header("location:../daftarharga.php");
