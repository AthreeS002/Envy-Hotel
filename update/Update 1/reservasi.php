<?php
  session_start();
  include 'koneksi.php';
  if(!isset($_SESSION['nin'])){
    header("Location: login.php");
    exit;
  }

  $result = mysqli_query($koneksi, "SELECT * FROM registrasi WHERE nin");

  while ($item = mysqli_fetch_array($result)){
    $nin = $item['nin'];
}
  $nama_kamar = $_POST['nama_kamar'];
  // $nik = $_POST['nik'];
  $checkin = $_POST['checkin'];
  $checkout = $_POST['checkout'];

  $kamar = mysqli_query($koneksi, "SELECT harga FROM kamar WHERE nama_kamar = '$nama_kamar'");
  $harga = mysqli_fetch_array($kamar);

  $cekin = new DateTime("$checkin");
  $cekout = new DateTime("$checkout");
  $sewa = $cekout->diff($cekin)->days;

  if($sewa <= 0){
	echo "<script>alert('Check In and Check Out can't on the same date!')
	document.location = 'reservation.php';</script>";
	// header('location: reservation.php');
  }
  $total = $harga['harga'] * $sewa;

  $tamu = mysqli_query($koneksi, "SELECT * FROM registrasi WHERE nin");
  $tamu = mysqli_num_rows($tamu);


  if (isset($_POST['book'])) {

	// $query = mysqli_query($koneksi, "SELECT * FROM transaksi where nama_kamar = '$nama_kamar' AND status != 'Unbooked'";); 
	// 	if(mysqli_num_rows($query) > 0){
	// 		echo 'error';
	// 	} else {
			
		
	$nin = $_SESSION['nin'];
		$query1 = "INSERT INTO transaksi (id_transaksi, nama_kamar, nin, checkin, checkout, harga, status) VALUES (NULL, '$nama_kamar', '$nin', '$checkin', '$checkout', '$total', 'Booked')";
		$query_run = mysqli_query($koneksi, $query1);

    $query2 = "UPDATE kamar SET status = 'Booked' WHERE nama_kamar = '$nama_kamar'";
    $query_run = mysqli_query($koneksi, $query2);

    $query3 = "UPDATE registrasi SET status = 'Booked' WHERE nin";
    $query_run = mysqli_query($koneksi, $query3);

    if ($query_run) {
      ?>
        <script language="javascript">
          alert("Booking Kamar Berhasil");
          document.location = 'index.php';
        </script>
    <?php //} 
		}
    // else {
    //   simpan_tamu($_POST);
    // }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Reservation</title>

  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
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

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

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
									<li class="nav-item"><a class="nav-link" href="login.php">Login / Register</a></li> <?php } ?>
								


					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header --><!-- Start header -->
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
					<h1>Let's Finish Your Reservation</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->

  <!-- Start Reservation -->
	<div class="reservation-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Complete Your Reservation</h2>
						<p>This is about what you want, about the price and what you choosed. <br> And then, we show you about your data to confirm that is you.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12">
					<div class="contact-block">
            <!-- COBA TAMPIL GAMBAR -->
            <center>
              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                  <?php 
                    $query = mysqli_query($koneksi, "SELECT * FROM kamar where nama_kamar = '$nama_kamar'");
                    while ($item = mysqli_fetch_array($query)){
                  ?>
                    <img src="<?php echo $item['foto'];?>" alt="" class="img-fluid">
                  <?php 
                    } 
                  ?>
                </div>
              </div>
            </center>
            <!-- AKHIR COBA TAMPIL GAMBAR -->
						<form role="form" method="post" action="">
							<div class="row pt-5">



								<div class="col-md-6">
									<h3>Your Book Data</h3>

									<div class="col-md-12">
										<div class="form-group">
                      <label>Room</label>
											<input id="nama_kamar" class="datepicker picker__input form-control" name="nama_kamar" value="<?= $nama_kamar; ?>" readonly>
										</div>                                 
									</div>

                  <div class="col-md-12">
										<div class="form-group">
                      <label>Price (Rp)</label>
											<input id="harga" class="datepicker picker__input form-control" name="harga" value="<?= $harga['harga']; ?>" readonly>
										</div>                                 
									</div>

                  <div class="col-md-12">
										<div class="form-group">
                      <label>Check In</label>
											<input id="checkin" class="datepicker picker__input form-control" name="checkin" value="<?= $checkin; ?>" readonly>
										</div>                                 
									</div>

                  <div class="col-md-12">
										<div class="form-group">
                      <label>Check Out</label>
											<input id="checkout" class="datepicker picker__input form-control" name="checkout" value="<?= $checkout; ?>" readonly>
										</div>                                 
									</div>

                  <div class="col-md-12">
										<div class="form-group">
                      <label>Long Stay</label>
											<input id="sewa" class="datepicker picker__input form-control" name="sewa" value="<?= $sewa; ?>" readonly>
										</div>                                 
									</div>

                  <div class="col-md-12">
										<div class="form-group">
                      <label>Total Price</label>
											<input id="total" class="datepicker picker__input form-control" name="total" value="<?= $total; ?>" readonly>
										</div>                                 
									</div>
									
                  
								</div>
								<div class="col-md-6">
									<h3>Your Details</h3>
                  <?php 
				  	$nin_reservasi = $_POST['nin_reservasi'];
                    $result = mysqli_query($koneksi, "SELECT * FROM registrasi WHERE nin = $nin_reservasi");

                    while ($item = mysqli_fetch_array($result)){
                      $nin = $item['nin'];
                    
                  ?>
									<div class="col-md-12">
										<div class="form-group">
                      <label for="nama">Fullname</label>
											<div class="form-control" name="nama"><?php echo $item['nama']; ?></div>

										</div>                                 
									</div>
                  <div class="col-md-12">
										<div class="form-group">
                      <label for="">Gender</label>
											<div class="form-control" name="gender"><?php echo $item['gender']; ?></div>
										</div> 
									</div>
									<div class="col-md-12">
										<div class="form-group">
                      <label for="email">Your Email</label>
											<div class="form-control" name="email"><?php echo $item['email']; ?></div>
										</div> 
									</div>
                  <div class="col-md-12">
										<div class="form-group">
                      <label for="">Phone Number</label>
											<div class="form-control" name="telepon"><?php echo $item['telepon']; ?></div>
										</div> 
									</div>
                  <div class="col-md-12">
										<div class="form-group">
                      <label for="">Address</label>
											<div class="form-control" name="alamat"><?php echo $item['alamat']; ?></div>
										</div> 
									</div>
                  <div class="col-md-12">
										<div class="form-group">
                      <label for="">NIN</label>
											<div class="form-control" name="nin"><?php echo $item['nin']; ?></div>
										</div> 
									</div>
                  <div class="col-md-12">
										<div class="form-group">
                      <label for="">Date of Birth</label>
											<div class="form-control" name="tanggallahir"><?php echo $item['tanggallahir']; ?></div>
										</div> 
									</div>

                  <?php
                    }
                  ?>
								</div>
								<div class="col-md-12">
									<div class="submit-button text-center">
										<button class="btn btn-common" name="book" id="submit" type="submit">Book Room</button>
										<div id="msgSubmit" class="h3 text-center hidden"></div> 
										<div class="clearfix"></div> 
									</div>
								</div>
							</div>            
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Reservation -->

  <!-- FOOTER -->
  <?php include 'footer.php'; ?>

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- bs-custom-file-input -->
  <script src="../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <!-- DataTables -->
  <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

  <!-- overlayScrollbars -->
  <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.js"></script>

  <!-- OPTIONAL SCRIPTS -->
  <script src="../dist/js/demo.js"></script>
  <!-- Select2 -->
  <script src="../plugins/select2/js/select2.full.min.js"></script>
  <!-- PAGE PLUGINS -->
  <!-- jQuery Mapael -->
  <script src="../plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
  <script src="../plugins/raphael/raphael.min.js"></script>
  <script src="../plugins/jquery-mapael/jquery.mapael.min.js"></script>
  <script src="../plugins/jquery-mapael/maps/usa_states.min.js"></script>
  <!-- ChartJS -->
  <script src="../plugins/chart.js/Chart.min.js"></script>

  <!-- page script -->
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
    });
  </script>

  <script>
    $(function() {
      //Initialize Select2 Elements
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      });
    });
  </script>

</body>

</html>