<?php 

include "koneksi.php";

$id_user = '1';
$jumlah_produk = '1';
$id_produk = @$_GET['id_produk'];

$sql_produk = "SELECT * FROM User_2 where id_user = '1'";
        
$result_produk = $koneksi->query($sql_produk);

$user = $result_produk->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="shortcut icon" href="favicon.png">
    <link href="css/profile.css" rel="stylesheet">
</head>
<body>
<div class="card">
    <div class="card-body">
        <div class="d-flex flex-column align-items-center text-center">
            <!--<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">-->
                <img src="<?php echo $user["foto_user"]; ?>" alt="Admin" class="rounded-circle" width="150">
                <div class="mt-3">
                    <h1>Account Name</h1>
                </div>
        </div>
    </div>
</div>
<div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h2 class="mb-0">Username</h2>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $user["nama_user"]; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h2 class="mb-0">Email</h2>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $user["email"]; ?>
                    </div>
                  </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                      <h2 class="mb-0">Password</h2>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?php echo $user["password"]; ?>
                    </div>
                  </div>
                <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <!--<a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>-->
                    </div>
                  </div>
                </div>
              </div>
<?php 
include "koneksi.php";
$result = mysqli_query ($koneksi, "SELECT * FROM ")
?>
</body>
</html>