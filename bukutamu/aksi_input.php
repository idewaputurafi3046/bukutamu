<?php 
    // koneksi database
    include 'koneksi.php';

    // menangkap data yang di kirim dari form
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nomer = $_POST['nomer'];

    // menginput data ke database
    mysqli_query($koneksi,"insert into absen values('','$nama','$alamat','$nomer')");

    // mengalihkan halaman kembali ke index.php
    header("location:index.php");

?>