<?php 
// koneksi database
include 'dbcon.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$tgl = $_POST['tgl'];
$beli = $_POST['beli'];
$motor = $_POST['motor'];

// menginput data ke database
mysqli_query($con,"insert into customer values('','$nama','$telp','$alamat', '$tgl', '$beli', '$motor')");
 
// mengalihkan halaman kembali ke index.php
header("location:customer.php");
 
?>