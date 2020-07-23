<?php
class database{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "home_furnishing";
    
    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host,$this->username,$this->password,$this->database);
        if(mysqli_connect_error()){
            echo "Koneksi database gagal : " . mysqli_connect_error();
        }
    }
        function pelanggan()
        {
            $data = mysqli_query($this->koneksi,"select * from pelanggan");
            
            while($row = mysqli_fetch_array($data)){
                $hasil[] = $row;
            }
            return $hasil;
        }
    
        function tambah_data($nama_plngn, $nama_brng, $jumlah_brng, $alamat_plngn, $telepon)
        {
            mysqli_query($this->koneksi, "insert into pelanggan values (null,'$nama_plngn', '$nama_brng', '$jumlah_brng', '$alamat_plngn', '$telepon')");
            echo mysqli_error($this->koneksi);
        }
       
        function ambil_data_edit($id_plngn){
           $data = mysqli_query($this->koneksi,"select * from pelanggan where id_plngn = '$id_plngn'");
           while($row = mysqli_fetch_array($data)){
             $hasil[] = $row;
            }
            return $hasil;

           
        }
        function edit_data($id_plngn, $nama_brng, $jumlah_brng, $alamat_plngn, $telepon){
            $data= mysqli_query($this->koneksi,"UPDATE pelanggan set nama_brng ='$nama_brng', jumlah_brng='$jumlah_brng',  telepon='$telepon' where id_plngn = '$id_plngn'");
        }
        function hapus_data($id_plngn){
            $data = mysqli_query($this->koneksi,"DELETE FROM pelanggan  where id_plngn='$id_plngn'");
        }
    }
    ?>

