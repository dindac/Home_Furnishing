<?php 
    include('config.php');
    $koneksi = new Database();
    $koneksi->tambah_data($_POST['nama_plngn'], $_POST['nama_brng'],$_POST['jumlah_brng'],
        $_POST['alamat_plngn'],$_POST['telepon']);
    header('location:tampilkan_data.php');
?>
