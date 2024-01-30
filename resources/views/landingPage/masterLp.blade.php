<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Desa Bonde</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="{{ asset('backend/assets/img/favicon.png') }}">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{ asset('backend/assets/css/all.min.css') }}">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{ asset('backend/assets/bootstrap/css/bootstrap.min.css') }}">
	<!-- owl carousel -->
	<link rel="stylesheet" href="{{ asset('backend/assets/css/owl.carousel.css') }}">
	<!-- magnific popup -->
	<link rel="stylesheet" href="{{ asset('backend/assets/css/magnific-popup.css') }}">
	<!-- animate css -->
	<link rel="stylesheet" href="{{ asset('backend/assets/css/animate.css') }}">
	<!-- mean menu css -->
	<link rel="stylesheet" href="{{ asset('backend/assets/css/meanmenu.min.css') }}">
	<!-- main style -->
	<link rel="stylesheet" href="{{ asset('backend/assets/css/main.css') }}">
	<!-- responsive -->
	<link rel="stylesheet" href="{{ asset('backend/assets/css/responsive.css') }}">
	{{-- custom --}}
	<link rel="stylesheet" href="{{ asset('backend/assets/css/lp_custom.css') }}">
	

</head>
<body>
	
	<!--PreLoader-->
    {{-- <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div> --}}
    <!--PreLoader Ends-->
	
	<!-- header -->
    @include('landingPage.partial.header')
	<!-- end header -->
	
	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search area -->

	<!-- hero area -->
	<div class="hero-area hero-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">SISTEM INFORMASI</p>
							<h1>PEMERINTAH DESA BONDE</h1>
                            <p class="subtitle">KECAMATAN PAMBOANG, KABUPATEN MAJENE <br>PROVINSI SULAWESI BARAT</p>
							<div class="hero-btns">
								<a href="contact.html" class="bordered-btn">Contact Us</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->

	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-users"></i>
						</div>
						<div class="content">
							<h3>2.626</h3>
							<p>Jumlah Penduduk</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-map-marked-alt"></i>
						</div>
						<div class="content">
							<h3>1,15 Km2</h3>
							<p>Luas Wilayah</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-sync"></i>
						</div>
						<div class="content">
							<h3>Refund</h3>
							<p>Get refund within 3 days!</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->

	@yield('contentlp')


	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="assets/img/company-logos/1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/4.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/5.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->

	<!-- footer -->
    @include('landingPage.partial.footer')
	<!-- end footer -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; {{ date('Y') }} - Pemerintah Desa Bonde.<br>
						By - KKN Reguler USB XXII
					</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="{{ asset('backend/assets/js/jquery-1.11.3.min.js') }}"></script>
	<!-- bootstrap -->
	<script src="{{ asset('backend/assets/bootstrap/js/bootstrap.min.js') }}"></script>
	<!-- count down -->
	<script src="{{ asset('backend/assets/js/jquery.countdown.js') }}"></script>
	<!-- isotope -->
	<script src="{{ asset('backend/assets/js/jquery.isotope-3.0.6.min.js') }}"></script>
	<!-- waypoints -->
	<script src="{{ asset('backend/assets/js/waypoints.js') }}"></script>
	<!-- owl carousel -->
	<script src="{{ asset('backend/assets/js/owl.carousel.min.js') }}"></script>
	<!-- magnific popup -->
	<script src="{{ asset('backend/assets/js/jquery.magnific-popup.min.js') }}"></script>
	<!-- mean menu -->
	<script src="{{ asset('backend/assets/js/jquery.meanmenu.min.js') }}"></script>
	<!-- sticker js -->
	<script src="{{ asset('backend/assets/js/sticker.js') }}"></script>
	<!-- main js -->
	<script src="{{ asset('backend/assets/js/main.js') }}"></script>

</body>
</html>