<?php 
    include('config.php');
    $db = new Database();
    if(isset($_GET['id'])){
        $id_plngn = $_GET['id'];
        $data = $db->pelanggan($id_plngn);
        $id_plngn = $data[0]['id_plngn'];
        $db->hapus_data($id_plngn);
        header('Location: tampilkan_data.php');
    }
    else{
        header('Location: tampilkan_data.php');
    }
?>
