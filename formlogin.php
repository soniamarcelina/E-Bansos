<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E-Bansos | Login</title>
	<link rel="stylesheet" href="http://localhost/eBansos/css/login.css">
	<link rel="shortcut icon" href="http://localhost/laundry/_assets/img/logo/favv.png" type="image/x-icon">
	<!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: brown">
      <div class="container">
        <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="..." /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
            <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
            <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
            <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
            <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>

	<div class="box">
		<div class="box-content">
			<div class="col box__left">
                <h4>Sistem E-Bansos</h4>
				<!-- <div class="logo">
					<img src="http://localhost/laundry/_assets/img/logo/logo1.png" alt="">
				</div> -->
				<div class="box__left-title">
					<h3>Silahkan Masukan Username & Password</h3>
				</div>

				<div class="box__left-form">
					<form action="login-proses.php" method="post">
						<div class="box__left-form-group">
							<div class="input-form">
								<input type="text" name="username" placeholder="Username" required autocomplete="off">
							</div>
						</div>

						<div class="box__left-form-group">
							<div class="input-form">
								<input type="password" name="password" placeholder="Password" required autocomplete="off">
							</div>
						</div>

						<div class="box__left-form-group">
							<button type="submit" name="login" id="login" class="btn-login mt-1">Login</button>
						</div>
					</form>
				</div>
			</div>

			<div class="col box__right">
				<div class="box__right-content">
					<!-- <div class="text__right">
						<h2>SISTEM E-BANSOS KABUPATEN KARAWANG</h2>
					</div> -->

                    <img src="awal.jpg" class="img-fluid" alt="image">

					<!-- <img src=" http://localhost/laundry/_assets/img/orang.png" alt="" class="box-img-orang"> -->

				</div>
			</div>
		</div>
	</div>
</div>
		<footer class="py-5 bg-black">
            <div class="container px-5"><p class="m-0 text-center text-white small">Copyright &copy; Your Website 2021</p></div>
		</footer>

	<!-- <div class="copyright">
		<p><b>Copyright &copy; 2021 |  Kelompok 9 - UAS PBW</b> </p>
	</div> -->

</body>
</html>