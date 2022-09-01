<?php

include "koneksi.php";

//menangkap data dari form
$nisn = $_POST['nisn'];
$tanggal = $_POST['tanggal'];
$namasiswa = $_POST['namasiswa'];
$kelas = $_POST['kelas'];
$keterangan = $_POST['keterangan'];

//menginput data ke database
mysqli_query($koneksi, "INSERT  INTO tbl_kehadiran VALUES('','$nisn','$tanggal','$kelas','$keterangan')");

//mengalihkan halaman kembali ke index.php
header("location:dashboard.php?page=kehadiran");


?>