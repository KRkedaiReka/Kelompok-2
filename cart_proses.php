<?php 

include "koneksi.php";

$id_user = '1';
$jumlah_produk = '1';
$id_produk = @$_GET['id_produk'];

$sql_produk = "SELECT * FROM Produk_2 where id_produk = '$id_produk'";
$sql = "SELECT p.*, k.* 
        FROM Produk_2 p 
        JOIN Keranjang_2 k 
        ON p.id_produk = k.id_produk 
        WHERE k.id_produk = '$id_produk'";
        
$result = $koneksi->query($sql);
$result_produk = $koneksi->query($sql_produk);

$keranjang = $result->fetch_assoc();
$produk = $result_produk->fetch_assoc();
        
if($result->num_rows > 0){
    //update
    $id_keranjang = $keranjang["id_keranjang"];
    $jumlah_produk = $keranjang["jumlah_produk"];
    $update_jumlah_produk = $jumlah_produk+1;
    $harga = $keranjang["harga_produk"];
    $harga_total = $keranjang["total"];
    $harga_total_update = $harga*$update_jumlah_produk;
    
    
    $query="UPDATE Keranjang_2 SET 
		jumlah_produk='".$update_jumlah_produk."', 
		total='".$harga_total_update."'
		WHERE id_keranjang='".$id_keranjang."'";
}
else{
    //insert
    $harga = $produk["harga_produk"];
    echo $id_user;
    echo"<br>";
    echo $jumlah_produk;
    echo"<br>";
    echo $harga;
    // exit();
    // $query = "INSERT INTO `Keranjang_2` (`id_user`, `jumlah_produk`, `id_produk`, `total` ) VALUES ('$id_user', '$jumlah_produk', '$id_produk', '$harga', '$harga' )";
    $query = "INSERT INTO `Keranjang_2` ( `id_user`, `jumlah_produk`, `id_produk`, `total`) VALUES ('1', '1', '$id_produk', '$harga')";
}



if (mysqli_query($koneksi, $query)) {
    ob_start();
	header("Location:cart.php");
	ob_end_flush();
}else{
	echo "gagal";
}

 ?>