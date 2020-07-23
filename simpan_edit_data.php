<?php
    include('config.php');
    $koneksi = new Database();
    $koneksi->edit_data($_POST['id_plngn'],$_POST['nama_brng'],$_POST['jumlah_brng'], $_POST['alamat_plngn'], $_POST['telepon']);
    header('location:tampilkan_data.php');
?>
