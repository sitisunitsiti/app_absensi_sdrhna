<?php

include "koneksi.php";

//menangkap data dari form
$namasekolah = $_POST['namasekolah'];
$alamat = $_POST['alamat'];
$notelp = $_POST['notelp'];
$email = $_POST['email'];


//menginput data ke database
mysqli_query($koneksi, "INSERT  INTO tbl_sekolah VALUES('','$namasekolah','$alamat','$notelp','$email')");

//mengalihkan halaman kembali ke index.php
header("location:dashboard.php?page=datasekolah");


?>