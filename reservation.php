<?php
session_start();
include 'koneksi.php';

$query = mysqli_query($koneksi, "SELECT * FROM registrasi where nin");
while ($item = mysqli_fetch_array($query)){
	$nin = $item['nin'];
	$status = $item['status'];
}
?>


<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
<meta charset="utf-8">
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Envy Hotel - Reservation</title>  
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
						<li class="nav-item"><a class="nav-link" href="menu.php">Room</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
						<li class="nav-item active dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Reservation</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="reservation.php">Reservation</a>
								<a class="dropdown-item" href="gallery.php">Gallery</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>

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
					<h1>Reservation</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Reservation -->
	<div class="reservation-box">
		<div class="container">
		<?php
			if(isset($_SESSION['nin'])){								
			$nin = $_SESSION['nin'];
			$trans = mysqli_query($koneksi, "SELECT * FROM transaksi where nin = '$nin'");
			while ($item2 = mysqli_fetch_array($trans)){
				$transaksi_checkout = $item2['id_transaksi'];
			}
			$query = mysqli_query($koneksi, "SELECT * FROM registrasi where nin = '$nin'");
			while ($item = mysqli_fetch_array($query)){
				$status = $item['status'];
		?>
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Reservation</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div>

			<?php
				if ($status == 'Booked'){
					?>
						<div class="row">
							<div class="col-lg-12">
								<div class="inner-column text-center">
									<h1>You have <span>Already</span> Booked </h1> <br>
									<a class="btn btn-lg btn-circle btn-primary" href="checkin_req.php?id=<?= $item['nin'];?>">Check In</a>
									<a class="btn btn-lg btn-circle btn-danger" href="cancel_req.php?id=<?= $item['nin'];?>">Cancel</a>
								</div>
							</div>
						</div>
			<?php
				} elseif ($status == 'Req Checkin') {
			?>
					<div class="row">
							<div class="col-lg-12">
								<div class="inner-column text-center">
									<h1>Wait for <span>Acception</span> from admin </h1> <br>
								</div>
							</div>
					</div>
			<?php
				} elseif ($status == 'Checkin') {		
			?>
				<div class="row">
					<div class="col-lg-12">
						<div class="inner-column text-center">
							<h2>You have <span>Already</span> Checked In </h2> <br>
							<p>Wanna check out right now?</p>
								<a class="btn btn-lg btn-circle btn-danger" href="checkout.php?id=<?=$transaksi_checkout;?>&nin=<?=$item['nin'];?>">Check Out</a>
						</div>
					</div>
				</div>
			<?php
				} else {
			?>


					
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12">
					<div class="contact-block">
						<form role="form" method="post" action="reservasi.php">
							<div class="row">
								<div class="col-md-12">
								
									<h3>Book a table</h3>


									<div class="col-md-12">
									<label>Select Your Room</label>
										<select required class="form-control select2" name="nama_kamar" style="width: 100%;">
											<option value="">-- Pilih Kamar --</option>

											<?php
											$kamar = mysqli_query($koneksi, "SELECT * FROM kamar WHERE status='Unbooked'");

											while ($row = mysqli_fetch_array($kamar)) :
											?>
											<option value="<?= $row['nama_kamar']; ?>"><?= $row['nama_kamar']; ?> - Rp. <?= $row['harga']; ?></option>
											<?php endwhile; ?>

										</select>                              
									</div>

									<div class="col-md-12">
										<div class="form-group">
											<label for="checkin">Check In</label>
											<input type="date" min="<?= date("Y-m-d") ?>" name="checkin" class="form-control" id="checkin" placeholder="Check In Date" required>
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>

									<div class="col-md-12">
										<div class="form-group">
											<label for="checkout">Check Out</label>
											<input type="date" min="<?= date("Y-m-d") ?>" name="checkout" class="form-control" id="checkout" placeholder="Check Out Date" required>
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>

									

								</div>
								
								<div class="col-md-12">
									<div class="submit-button text-center">
										<input type="hidden" name='nin_reservasi' value='<?= $_SESSION['nin']?>'>
										<button class="btn btn-common" id="submit" type="submit">Book Room</button>
										<div id="msgSubmit" class="h3 text-center hidden"></div> 
										<div class="clearfix"></div> 
										<button type="reset" name="reset" class="btn btn-danger">Reset</button>
                      
									</div>
								</div>
							</div>            
						</form>
						<?php } ?>
					</div>
				</div>
			</div>
			<?php
			}
            }
            else {
                ?>
					<div class="row">
					<div class="col-lg-12">
						<div class="inner-column text-center">
								<h1>Please Do <span>Login</span> First</h1> <br>
								<a class="btn btn-lg btn-circle btn-outline-new-white" href="login.php">Login</a>
							</div>
						</div>
					</div>
				<?php
            }
			
            ?>
		</div>
	</div>
	<!-- End Reservation -->
	
	<!-- Start Customer Reviews -->
	<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Customer Reviews</h2>
						<p>And here are visitors who have stayed at our hotel.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">
							<div class="carousel-item text-center active">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/profile-1.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Paul Mitchel</strong></h5>
								<h6 class="text-dark m-0">Web Developer</h6>
								<p class="m-0 pt-3">This place so amazing. I wanna visit Envy Hotel again soon!</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/profile-3.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Steve Fonsi</strong></h5>
								<h6 class="text-dark m-0">Web Designer</h6>
								<p class="m-0 pt-3">I wish this hotel gonna be more royal than this! I'm satisfied!</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/profile-7.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Daniel vebar</strong></h5>
								<h6 class="text-dark m-0">Seo Analyst</h6>
								<p class="m-0 pt-3">Nothing better place from this! You have to try visit this hotel too!</p>
							</div>
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Customer Reviews -->
	
	<?php include 'footer.php'; ?>
	<!-- End Footer -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

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