<?php
    include('config.php');
    $db = new Database();
    if(isset($_GET['id'])){
        $id_plngn = $_GET['id'];
        $hasil = $db->ambil_data_edit($id_plngn);
    }
    else{
        header('location:tampilkan_data.php');
    }
    
    // print_r($hasil);
    // ;
    ?>

<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
</head>
<body>
    <form action="simpan_edit_data.php" method="POST">
    <input type="hidden" name="id_plngn" placeholder="" value="<?php echo $hasil[0]['id_plngn']; ?>" />
        <fieldset>
        <legend>Checkout</legend>

        <p>
            <label>Nama Barang</label>
            <input type="text" name="nama_brng" placeholder="" value="<?php echo $hasil[0]['nama_brng']; ?>"/>
        </p>
        <p>
            <label>Jumlah Barang</label>
            <input type="text" name="jumlah_brng" placeholder="" value="<?php echo $hasil[0]['jumlah_brng']; ?>"/>
        </p>
       
        
        <p>
            <label>Telepon:</label>
            <input type="text" name="telepon" placeholder="" value="<?php echo $hasil[0]['telepon']; ?>" />
        </p>
        <p>
            <input type="submit" name="submit" value="save" />
        </p>
        </fieldset>
    </form>
</body>
</html>