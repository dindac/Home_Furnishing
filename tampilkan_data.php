<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
</head>

<?php 
include 'config.php';
$db = new Database();
?>
<body bgcolor="#F4FFE4">
<nav id="navbar-example2" class="navbar navbar-transparent bg-dark">
  <a class="navbar-brand" href="index.html">HOME</a>
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link" href="rumah.php">Kembali</a>
    </li>
  </ul>
</nav>

<table width="645" height="200" border="1" align="center" cellpadding="2" cellspacing="2">
	<tr>
		<th>No</th>
        <th>Nama</th>
		<th>Nama Barang</th>
		<th>Jumlah Barang</th>
		
		<th>Telepon</th>
	</tr>
	<?php	
		$no = 1;
		foreach($db->pelanggan() as $x){
            ?>
            <tr>
				<td><?php echo $no++; ?></td>
				
				<td><?php echo $x['nama_plngn']; ?></td>
				<td><?php echo $x['nama_brng']; ?></td>
				<td><?php echo $x['jumlah_brng']; ?></td>
               
				<td><?php echo $x['telepon']; ?></td>
				
				
                <td><a href="edit_data.php?id=<?php echo $x['id_plngn']; ?>">Edit </a></td>
                <td><a href="hapus_data.php?id=<?php echo $x['id_plngn']; ?>">Hapus </a></td>
            </tr>
	
	<?php 
		}
	?>
</table>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
        crossorigin="anonymous"></script>
    <script src="dist/js/bootstrap.min.js"></script>
</body>