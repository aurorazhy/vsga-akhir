<?php

include 'etc/conn.php';

$id = $_GET['idh'];

mysqli_query($con, "DELETE FROM customer WHERE idcus='$id'");

header("location:histori.php");
