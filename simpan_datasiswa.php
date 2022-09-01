<?php

include "koneksi.php";

//menangkap data dari form
$nisn = $_POST['nisn'];
$namasiswa = $_POST['namasiswa'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$nohp = $_POST['nohp'];

//menginput data ke database
mysqli_query($koneksi, "INSERT  INTO tbl_siswaa VALUES('','$nisn','$namasiswa','$jk','$alamat','$agama','$nohp')");

//mengalihkan halaman kembali ke index.php
header("location:dashboard.php?page=datasiswa");


?>