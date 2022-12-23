<?php
	session_start(); 
	include 'koneksi.php';
	// $id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Envy Hotel - About</title>  
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
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
						<li class="nav-item active"><a class="nav-link" href="about.php">About</a></li>
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
	
	<!-- Start header -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>About Us</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End header -->
	
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<img src="images/pindah/home1.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-lg-6 col-md-6 text-center">
					<div class="inner-column">
						<h1>Welcome To <span>Yamifood Restaurant</span></h1>
						<h4>Little Story</h4>
						<p>This hotel was founded and built by a single person. Founded by Ahmad 'Adli Ash-Shidiqqie from Sebelas Maret University with student number K3521004. And the founder hope that this hotel will remain luxurious and flatter visitors with their satisfaction with this hotel.</p>
						<!-- <p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. Sed aliquam metus lorem, a pellentesque tellus pretium a. Nulla placerat elit in justo vestibulum, et maximus sem pulvinar.</p> -->
						<a class="btn btn-lg btn-circle btn-outline-new-white" href="reservation.php">Reservation</a>
					</div>
				</div>
				<!-- <div class="col-md-12">
					<div class="inner-pt">
						<p>Sed tincidunt, neque at egestas imperdiet, nulla sapien blandit nunc, sit amet pulvinar orci nibh ut massa. Proin nec lectus sed nunc placerat semper. Duis hendrerit elit nec sapien porttitor, ut pretium ipsum feugiat. Aenean volutpat porta nisi in gravida. Curabitur pulvinar ligula sed facilisis bibendum. Nullam vitae nulla elit. </p>
						<p>Integer purus velit, eleifend eu magna volutpat, porttitor blandit lectus. Aenean risus odio, efficitur quis erat eget, mattis tristique arcu. Fusce in ante enim. Integer consectetur elit nec laoreet rutrum. Mauris porta turpis nec tellus accumsan pellentesque. Morbi non quam tempus, convallis urna in, cursus mauris. </p>
					</div>
				</div> -->
			</div>
		</div>
	</div>
	<!-- End About -->
	
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Room List</h2>
						<p>Rooms that can fulfill the desire of a beautiful life</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="special-menu text-center">
						<div class="button-group filter-button-group">
							<button class="active" data-filter="*">All</button>
							<button data-filter=".budget">Budget</button>
							<button data-filter=".standard">Standard</button>
							<button data-filter=".vip">VIP</button>
						</div>
					</div>
				</div>
			</div>
				
			<div class="row special-list">
				<div class="col-lg-4 col-md-6 special-grid budget">
					<div class="gallery-single fix">
						<img src="images/pindah/budget1.png" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Budget Room 1</h4>
							<p>Adjust to your taste.</p>
							<h5> Rp 300.000</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid budget">
					<div class="gallery-single fix">
						<img src="images/pindah/budget2.png" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Budget Room 2</h4>
							<p>Adjust to your taste.</p>
							<h5> Rp 400.000</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid budget">
					<div class="gallery-single fix">
						<img src="images/pindah/budget3.png" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Budget Room 3</h4>
							<p>Adjust to your taste.</p>
							<h5> Rp 500.000</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid standard">
					<div class="gallery-single fix">
						<img src="images/pindah/standard1.png" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Standard Room ngko1</h4>
							<p>Our most popular room.</p>
							<h5> Rp 597.000</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid standard">
					<div class="gallery-single fix">
						<img src="images/pindah/standard2.png" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Standard Room 2</h4>
							<p>Our most popular room.</p>
							<h5> Rp 630.000</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid standard">
					<div class="gallery-single fix">
						<img src="images/pindah/standard3.png" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Standard Room 3</h4>
							<p>Our most popular room.</p>
							<h5> Rp 670.000</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid vip">
					<div class="gallery-single fix">
						<img src="images/pindah/vip1.png" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>VIP 1</h4>
							<p>You must be royal people. Let us show you how royal our hotel as well.</p>
							<h5> Rp 789.000</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid vip">
					<div class="gallery-single fix">
						<img src="images/pindah/vip2.png" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>VIP 2</h4>
							<p>You must be royal people. Let us show you how royal our hotel as well.</p>
							<h5> Rp 890.000</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid vip">
					<div class="gallery-single fix">
						<img src="images/pindah/vip3.png" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>VIP 3</h4>
							<p>You must be royal people. Let us show you how royal our hotel as well.</p>
							<h5> Rp 987.000</h5>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- End Menu -->
	
	<!-- Start Footer -->
	<?php include 'footer.php' ?>
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
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>