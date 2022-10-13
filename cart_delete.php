<?php 

include "koneksi.php";

$id = $_GET['id_keranjang'];

$sql = "DELETE FROM `Keranjang_2` WHERE id_keranjang = $id";

if ($koneksi->query($sql) === TRUE) {
    echo "berhasil";
    header("location:cart.php");
}else{
    echo "gagal";
    header("location:cart.php");
}

?>