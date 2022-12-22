<?php
include("koneksi.php");
// include('header.php');

$id = $_GET['id'];

if (isset($_POST['update'])) {
    $nin = $_POST['nin'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    // $nin = $item['nin'];
    $password = $_POST['password'];
    $tanggallahir = $_POST['tanggallahir'];
    $gender = $_POST['gender'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $status = $_POST['status'];
    // $foto = $item['foto'];
    
    $result = mysqli_query($koneksi, "UPDATE registrasi SET username='$username', email='$email', nama = '$nama', password='$password', tanggallahir='$tanggallahir', alamat='$alamat', telepon='$telepon' WHERE nin = $nin");

    if ($result){
        echo "<script>alert('berhasil')</script>";
        header("location: profile.php");
    }
}
// $result = mysqli_query($koneksi, "SELECT * FROM registrasi WHERE nin=$id");

// while ($item = mysqli_fetch_array($result)){
// if (isset($_POST['update'])){
//     $username = $_POST['username'];
//     $email = $_POST['email'];
//     $nama = $_POST['nama'];
//     $nin = $item['nin'];
//     $password = $_POST['password'];
//     $tanggallahir = $_POST['tanggallahir'];
//     $gender = $_POST['gender'];
//     $alamat = $_POST['alamat'];
//     $telepon = $_POST['telepon'];
//     $status = $item['status'];
//     $foto = $item['foto'];
    
//     $result = mysqli_query($koneksi, "UPDATE registrasi SET username='$username', email='$email', nama='$nama', nin=NULL,password='$password', tanggallahir='$tanggallahir', gender='$gender', alamat='$alamat', telepon='$telepon', foto='$foto', status='$status' WHERE nin=$id ");

//     if ($result){
//         header("location: profile.php");
//     } else {
//         echo "serror";
//     }
// }
//}
$result = mysqli_query($koneksi, "SELECT * FROM registrasi WHERE nin=$id");

while ($item = mysqli_fetch_array($result)){
    $username = $item['username'];
    $email = $item['email'];
    $nama = $item['nama'];
    $password = $item['password'];
    // $password2 = $item['password2'];
    $tanggallahir = $item['tanggallahir'];
    $gender = $item['gender'];
    $alamat = $item['alamat'];
    $telepon = $item['telepon'];
    // $foto = $item['foto'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit akun</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
	<!-- Pickadate CSS -->
    <link rel="stylesheet" href="css/classic.css">    
	<link rel="stylesheet" href="css/classic.date.css">    
	<link rel="stylesheet" href="css/classic.time.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>

    <!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img src="images/pindah/coba/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
						<li class="nav-item active dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Reservation</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="reservation.php">Reservation</a>
								<a class="dropdown-item" href="gallery.php">Gallery</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="blog.php">blog</a>
								<a class="dropdown-item" href="blog-details.php">blog Single</a>
							</div>
						</li>

						<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>

							<?php
								if(isset($_SESSION['nin'])){
							?>
								<li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li> 
							
							<?php } else {
									?>
									<li class="nav-item"><a class="nav-link" href="login.php">Login / Register</a></li> <?php } ?>
								


					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
    <!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Edit your data</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
    
        <table class="m-2" width="50%">
        <form action="" method="post">
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="<?= $username ?>"></td>
            </tr>

            <tr>
                <td>Name</td>
                <td><input type="text" name="nama" value="<?= $nama ?>"></td>
            </tr>

            <tr>
                <td>Email</td>
                <td><input type="email" name="email" value="<?= $email ?>"></td>
            </tr>

            <tr>
                <td>Phone Number</td>
                <td><input type="number" name="telepon" value="<?= $telepon ?>"></td>
            </tr>

            <tr>
                <td>Address</td>
                <td><input type="text" name="alamat" value="<?= $alamat ?>"></td>
            </tr>

            <tr>

                <td>Date of Birth</td>
                <td><input type="date" max= "<?= date("Y-m-d") ?>" name="tanggallahir" value="<?= $tanggallahir ?>" required></td>
            </tr>

            <tr>
                <td>Password</td>
                <td><input type="password" name="password" value="<?= $password ?>"></td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="hidden" name="nin" value="<?= $id ?>" >
                    <input type="submit" name="update" class="btn btn-warning mt-2" value="Update">
                </td>
                
            </tr>
            <tr>
                <td></td>
                <td>
                <a href="profile.php" class="btn btn-danger mt-2">Kembali</a>
                </td>
            </tr>
            </form>
        </table>
<?php include 'footer.php'; ?>
<!-- ALL JS FILES -->
<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/picker.js"></script>
	<script src="js/picker.date.js"></script>
	<script src="js/picker.time.js"></script>
	<script src="js/legacy.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>