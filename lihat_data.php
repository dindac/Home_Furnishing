<?php
session_start();
require_once 'config.php';


// Mengelurkan seluruh data barang yang ada di Databae
$sql 			= "SELECT * FROM barang";
$query 			= $conn->query($sql);
$data_barang 	= $query->fetch_all(MYSQLI_ASSOC);

// Nomor untuk increment baris tabel
$no = 1;

require_once 'includes/header.php';
if (!isset($_GET['h'])) {
	require_once 'includes/rumah.php';	
} else if ($_GET['h'] == 'tambah') {
	require_once 'includes/'.$_GET['h'].'.php';	
} else if ($_GET['h'] == 'edit-barang') {
	require_once 'includes/'.$_GET['h'].'.php';	
} else if ($_GET['h'] == 'hapus') {
	
	$hapus = $conn->query("DELETE FROM barang WHERE id='".$_GET['id']."'");
	if ($hapus) {
		header('Location: lihat_data.php');
	} else {
		header('Location: lihat_data.php');
	}

}
require_once 'includes/footer.php';