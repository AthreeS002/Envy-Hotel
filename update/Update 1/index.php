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
    <title>Envy Hotel</title>  
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
						<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
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
	
	<!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-center">
				<img src="images/pindah/home1.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> Envy Hotel</strong></h1>
							
							<p class="m-b-40">Let's see how you experience this world by seeing <br> 
								the extraordinary sights in our hotel</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="reservation.php">Reservation</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-center">
				<img src="images/pindah/home2.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> Envy Hotel</strong></h1>
							<p class="m-b-40">Let's see how you experience this world by seeing <br> 
								the extraordinary sights in our hotel</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="reservation.php">Reservation</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-center">
				<img src="images/pindah/home3.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> Envy Hotel</strong></h1>
							
							<p class="m-b-40">Let's see how you experience this world by seeing <br> 
								the extraordinary sights in our hotel</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="reservation.php">Reservation</a></p>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->
	
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="images/pindah/home1.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1>Welcome To <span>Envy Hotel</span></h1>
						<h4>Little Story</h4>
						<p>This hotel was founded and built by a single person. Founded by Ahmad 'Adli Ash-Shidiqqie from Sebelas Maret University with student number K3521004. And the founder hope that this hotel will remain luxurious and flatter visitors with their satisfaction with this hotel.</p>
						<!-- <p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. Sed aliquam metus lorem, a pellentesque tellus pretium a. Nulla placerat elit in justo vestibulum, et maximus sem pulvinar.</p> -->
						<a class="btn btn-lg btn-circle btn-outline-new-white" href="reservation.php">Reservation</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->
	
	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-left">
					<p class="lead ">
						" We shall never deny a guest even the most ridiculous requests. "
					</p>
					<span class="lead">Krusty Towers</span>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->
	
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
	
	<!-- Start Gallery -->
	<div class="gallery-box">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Gallery</h2>
						<p>Here's the gallery of our hotel. Enjoy the view.</p>
					</div>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="images/pindah/home1.jpg">
							<img class="img-fluid" src="images/pindah/home1.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/pindah/home2.jpg">
							<img class="img-fluid" src="images/pindah/home2.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/pindah/home3.jpg">
							<img class="img-fluid" src="images/pindah/home3.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="images/pindah/vip1.png">
							<img class="img-fluid" src="images/pindah/vip1.png" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/pindah/vip2.png">
							<img class="img-fluid" src="images/pindah/vip2.png" alt="Gallery Images">
						</a>
					</div> 
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/pindah/vip3.png">
							<img class="img-fluid" src="images/pindah/vip3.png" alt="Gallery Images">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Gallery -->
	
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