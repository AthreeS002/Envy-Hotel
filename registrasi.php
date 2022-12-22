
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/style_login.css"> -->
    <style>
      .regis{
        background-color:orange;
      }
      .badan{
        padding-top: 15px;
        padding-bottom: 15px;
      }
    </style>
</head>
<body>
  <!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img src="images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
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
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
  
  <main>
    
  <div class="about-section-box">
		<div class="container badan">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="images/about-img.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
            <div class="card">
            <form action="data_regis.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <h5 class="card-title">Registration</h5>
                    <hr>
                    <table id="tabel-id" class="display" style="width:100%">
                        <thead>
                          <tr>
                            <td width="120">Username</td>
                            <td><input type="text" name="username" required></td>
                          </tr>

                          <tr>
                            <td width="120">Email</td>
                            <td><input type="text" name="email" required></td>
                          </tr>

                          <tr>
                            <td width="120">Fullname</td>
                            <td><input type="text" name="nama" required></td>
                          </tr>

                          <tr>
                            <td width="120">National Identity Number</td>
                            <td><input type="number" name="nin" required></td>
                          </tr>
                          
                          <tr>
                            <td width="120">Password</td>
                            <td><input type="password" name="password" required></td>
                          </tr>
                          
                          <tr>
                            <td width="120">Ulangi Password</td>
                            <td><input type="password" name="password2" required></td>
                          </tr>

                          <tr>
                            <td>Date of Birth</td>
                            <td><input type="date" max= "<?= date("Y-m-d") ?>" name="tanggallahir" required></td>
                          </tr>

                          <tr>            
                            <td>Gender</td>
                            <td>
                              <input type="radio" id="perempuan" name="gender" value="Perempuan" required>
                                <label for="perempuan">Perempuan</label><br>
                              <input type="radio" id="css" name="gender" value="Laki-laki" required>
                                <label for="Laki-laki">Laki-laki</label><br>
                            </td>

                          </tr>
                          
                          <tr>
                            <td>Address</td>
                            <td><input type="text" name="alamat" required></td>
                          </tr>
                          
                          <tr>
                            <td>Phone Number</td>
                            <td><input type="number" name="telepon" required></td>
                          </tr>
                                  
                          <tr>
                            <td>Photo: </td>
                            <td><input type="file" name="foto" accept="image/jpg, image/png" ></td>
                            </tr>
                          
                          <tr>
                            <td></td>
                            <td><input type="submit" name="submit" value="Submit"></td>
                          </tr>
                          
                    </table>
                            
                </div>
            </form>
				  </div>
			  </div>
		  </div>
	  </div>
  </div>
  </main>

</body>
</html>