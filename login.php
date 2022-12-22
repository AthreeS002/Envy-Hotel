<?php
include 'koneksi.php';
session_start();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == 'thisisadmin'){
      $login = mysqli_query($koneksi, "SELECT * FROM admin where username = '$username' and password = '$password'");
      $cek = mysqli_num_rows($login);

        if ($cek > 0){
            
            $_SESSION['username'] = $username;
            header("location: admin/admin.php");
        }
        else {
            echo "<script>alert ('Username or Password is wrong!')</script>";
        }
    } else {
        $login = mysqli_query($koneksi, "SELECT * FROM registrasi where username = '$username' and password = '$password'");
        $cek = mysqli_num_rows($login);
        $item = mysqli_fetch_array($login);
        if ($cek > 0){
            $_SESSION['nin'] = $item['nin'];
            header("location: index.php");
            // $query = mysqli_query($koneksi, "SELECT * FROM registrasi where nin = '$nin'");
            // while ($item = mysqli_fetch_array($query)){
            // $_SESSION['nin'] = $item['nin'];
            // header("location: index.php");
        }
        else {
            echo "<script>alert ('Username or Password is wrong!')</script>";
        }
      }
    if (isset($_POST['remember'])){
        setcookie('username', $_POST['username'], strtotime('+1days'), '/');
        setcookie('password', $_POST['password'], strtotime('+1days'), '/');
    }

  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Login / Register</title>  
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
						<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="reservation.php">Reservation</a>
								<a class="dropdown-item" href="stuff.php">Stuff</a>
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
									<li class="nav-item active"><a class="nav-link" href="login.php">Login / Register</a></li> <?php } ?>
								


					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->


  <section class="vh-100 pt-5 pb-5" style="background-color: #9A616D;">
  <div class="container pt-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-90">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <!-- <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div> -->
            <div class="col-md-12 col-lg-12 d-flex align-items-center">
              <div class="card-body  text-black">
                <!-- COBA FORM BARU -->
                <center>
                <form class="" method = "post">
                  <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Login</h5>
                      <h6 class="card-subtitle text-muted">Sign into your account</h6>
                      <div class="card-text form-outline mb-4">
                        <input type="text" name="username" class="form-control form-control-lg" required/>
                        <label class="form-label">Username</label>
                      </div>
                      <div class="card-text form-outline mb-4">
                        <input type="password" name="password" class="form-control form-control-lg" required/>
                        <label class="form-label">Password</label>
                      </div>
                      <div class="mb-4">
                        <input type="checkbox" id="remember" />
                        <label for="remember">Remember </label>
                      </div>
                      <div class="pt-1 mb-4">
                        <button class="btn btn-dark btn-lg btn-block" type="submit" name="submit" value="Login">Login</button>
                      </div>
                        <p style="color: #393f81;">Don't have an account? <a href="registrasi.php"
                      style="color: #393f81;">Register here</a></p>
                    </div>
                  </div>
                </form>
                </center>

                <!-- START FORM -->
                <!-- <form action="" method = "post">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Logo</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                    <input type="text" name="username" class="form-control form-control-lg" required/>
                    <label class="form-label">Username</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="password" class="form-control form-control-lg" required/>
                    <label class="form-label">Password</label>
                  </div>


                  <div class="mb-4">
                    <input type="checkbox" id="remember" />
                    <label for="remember">Remember </label>
                    
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit" name="submit" value="Login">Login</button>
                  </div> -->

                  <!-- <a class="small text-muted" href="#!">Forgot password?</a> -->
                  <!-- <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="registrasi.php"
                      style="color: #393f81;">Register here</a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
                </form> -->

                <!-- END OF FORM -->

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<?php 
include 'footer.php'; 
?>
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


