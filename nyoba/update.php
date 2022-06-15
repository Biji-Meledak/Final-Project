<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$satuan = $_POST['satuan'];
$jumlah = $_POST['jumlah'];

// update data ke database
mysqli_query($koneksi,"update barang set nama='$nama', satuan='$satuan', jumlah='$jumlah' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>