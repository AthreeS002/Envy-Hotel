<?php
session_start();
include 'koneksi.php';

if (isset($_POST['logout'])){
    session_destroy();
    foreach ($_COOKIE as $key => $value) {
        setcookie($key, '', time() - 999999999999, '/');
    }
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Your Profile</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
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
						<li class="nav-item"><a class="nav-link" href="menu.php">Room</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="reservation.php">Reservation</a>
								<a class="dropdown-item" href="gallery.php">Gallery</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>

							<?php
								if(isset($_SESSION['nin'])){
							?>
								<li class="nav-item active"><a class="nav-link" href="profile.php">Profile</a></li> 
							
							<?php } else {
									?>
									<li class="nav-item active"><a class="nav-link" href="login.php">Login / Register</a></li> <?php } ?>
								


					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->


    <!-- PROFILE -->
    <?php
    if(isset($_SESSION['nin'])){
        
        ?>
    <div class="about-section-box">
      <div class="container badan py-5">
      <?php
        $nin = $_SESSION['nin'];
        $query = mysqli_query($koneksi, "SELECT * FROM registrasi where nin = '$nin'");
        while ($item = mysqli_fetch_array($query)){
          $status = $item['status'];
      ?>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="<?php echo $item['foto'];?>" alt="" class="img-fluid">
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 text-center">
            <div class="inner-column">
              <div class="card">
              <!-- <form action="data_regis.php" method="post" enctype="multipart/form-data"> -->
                  <div class="card-body">
                      <h5 class="card-title">Your Information</h5>
                      <hr>
                      
                        <form action="" method="POST">
                          <table id="tabel-id" class="display" style="width:80%">
                          
                              <thead>
                                <tr>
                                  <td width="120">Username</td>
                                  <td>:</td>
                                  <td><?php echo $item['username'];?> </td>
                                </tr>

                                <tr>
                                  <td width="120">Email</td>
                                  <td>:</td>
                                  <td><?php echo $item['email'];?> </td>
                                </tr>

                                <tr>
                                  <td width="120">Fullname</td>
                                  <td>:</td>
                                  <td><?php echo $item['nama'];?> </td>
                                </tr>

                                <tr>
                                  <td width="120">NIN</td>
                                  <td>:</td>
                                  <td><?php echo $item['nin'];?> </td>
                                </tr>
                                
                                <tr>
                                  <td width="120">Password</td>
                                  <td>:</td>
                                  <td>************</td>
                                </tr>

                                <tr>
                                  <td>Date of Birth</td>
                                  <td>:</td>
                                  <td><?php echo $item['tanggallahir'];?> </td>
                                </tr>

                                <tr>            
                                  <td>Gender</td>
                                  <td>:</td>
                                  <td><?php echo $item['gender'];?> </td>

                                </tr>
                                
                                <tr>
                                  <td>Address</td>
                                  <td>:</td>
                                  <td><?php echo $item['alamat'];?> </td>
                                </tr>
                                
                                <tr>
                                  <td>Phone Number</td>
                                  <td>:</td>
                                  <td><?php echo $item['telepon'];?> </td>
                                </tr>
                                <tr>
                                  <td>Status</td>
                                  <td>:</td>
                                  <td><?php echo $item['status'];?></td>
                                </tr>
                                        

                                
                                <tr>
                                  <td><a href="edit.php?id=<?= $item['nin'];?>" class="btn btn-warning my-2">Edit</a></td>  
                                  <td><button class="m-3 btn btn-danger" name="logout" value="logout">Log out</button></td>
                                  
                                  <!-- <?php
                                    if ($status == 'Booked') {
                                      ?>
                                      <td><button class="m-3 btn btn-primary" name="checkin" value="checkin">Check In</button></td>
                                      <?php 
                                    } if($status == 'Checked In') {
                                      ?>
                                      <td><button class="m-3 btn btn-primary" name="checkout" value="checkout">Check Out</button></td>
                                    
                                    <?php } ?>
                                  
                                </tr>
                                <?php } ?> -->
                          </table>
                        </form>
                          
                  </div>
              <!-- </form> -->

              <?php
              }
              else {
                  echo "Error";
              }
              ?>
				  </div>
			  </div>
		  </div>
	  </div>
            </div>
  </div>
    <!-- END OF PROFILE -->
    
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
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>