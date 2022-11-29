<?php
require_once "../../config/koneksi.php";

$nama_objek = $_POST['nama_objek'];
$alamat_objek = $_POST['alamat_objek'];
$deksripsi = $_POST['deksripsi'];
$harga = $_POST['harga'];
$gambar = $_POST['gambar'];
$longitude = $_POST['longitude'];
$latitude = $_POST['latitude'];

$query_insert = mysqli_query($koneksi, "INSERT INTO tb_objekwisata VALUES(NULL, '$nama_objek', '$alamat_objek', '$deksripsi', '$harga', '$gambar', '$longitude', '$latitude')");

if($query_insert){
    echo json_encode($query_insert);
}else{
    echo "failed";
}
?>