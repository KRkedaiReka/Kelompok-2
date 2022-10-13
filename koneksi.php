<?php



$servername = "localhost";

$username = "id19679768_kedaireka1";

$password = "+zh1)3hM*y]8bepQ";

$database = "id19679768_kedaireka";



// Create connection

$koneksi = new mysqli($servername, $username, $password, $database);



// Check connection

if ($koneksi->connect_error) {

    die("Connection failed: " . $koneksi->connect_error);

}

// echo "Connected successfully";

?>



