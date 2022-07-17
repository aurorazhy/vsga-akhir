<?php

$con = mysqli_connect("localhost","root","","wisata");

if(mysqli_connect_errno()){
    die("tidak terkoneksi".mysqli_connect_error());
}
