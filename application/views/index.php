<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
		<head>
			<!-- Mobile Specific Meta -->
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<!-- Favicon-->
			<link rel="shortcut icon" href="<?php echo base_url('asset/img/logo-labti.png'); ?>">
			<!-- Author Meta -->
			<meta name="author" content="codepixer">
			<!-- Meta Description -->
			<meta name="description" content="">
			<!-- Meta Keyword -->
			<meta name="keywords" content="">
			<!-- meta character set -->
			<meta charset="UTF-8">
			<!-- Site Title -->
			<title>Labti Universitas Gunadarma</title>

			<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="<?php echo base_url('asset/css/linearicons.css'); ?>">
			<link rel="stylesheet" href="<?php echo base_url('asset/css/font-awesome.min.css'); ?>">
			<link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.css'); ?>">
			<link rel="stylesheet" href="<?php echo base_url('asset/css/magnific-popup.css'); ?>">
			<link rel="stylesheet" href="<?php echo base_url('asset/css/nice-select.css'); ?>">
			<link rel="stylesheet" href="<?php echo base_url('asset/css/animate.min.css'); ?>">
			<link rel="stylesheet" href="<?php echo base_url('asset/css/owl.carousel.css'); ?>">
			<link rel="stylesheet" href="<?php echo base_url('asset/css/main.css'); ?>">
		</head>

		<body>
			<header id="header" id="home">
		    <div class="container">
		    	<div class="row align-items-center justify-content-between d-flex">
				    <div id="logo">
				      <a href="index.html"><img src="<?php echo base_url('asset/img/logo-labti.png'); ?>" width="50px"/></a>
				    </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu align-items-center justify-content-between d-flex">
			          <li class="menu-active"><a href="index.html">Beranda</a></li>
				        <li class="menu-has-children"><a href="#">Praktikum</a>
				          <ul>
				         		<li><a href="tata-tertib.html">Tata Tertib</a></li>
				 	          <li><a href="#">Jadwal</a></li>
					          <li><a href="#">Modul</a></li>
				          	<li><a href="pelayanan.html">Pelayanan</a></li>
				          </ul>
				        </li>
				        <li><a href="berita.html">Berita</a></li>
				        <li><a href="#">Masuk</a></li>
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
			</header><!-- #header -->

			<!-- Start profil -->
			<section class="banner-area relative">
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-start">
						<div class="banner-content col-lg-5 text-left">
							<br><br><br><br>
							<h4 class="text-uppercase">Laboratorium</h4>
							<h1>Teknik Informatika</h1>
							<p>
								Laboratorium penunjang kegiatan perkuliahan mahasiswa jurusan Teknik Informatika Universitas Gunadarma.
							</p>
							<a href="#selengkapnya" class="primary-btn header-btn text-uppercase">Kenalan yuk</a>
						</div>	
						<div class="col-lg-7 about-right">					
							<img class="main img-fluid" src="<?php echo base_url('asset/img/labti.png'); ?>">
						</div>											
					</div>
				</div>
			</section>
			<!-- End profil -->

			<!-- Start lab --> 
			<section class="feature-area section-gap">
				<div class="container">
					<div class="row">
						<div class="single-feature col-lg-4 text-center single-fact">
							<img class="img-fluid" src="<?php echo base_url('asset/img/f1.png'); ?>" alt="">
							<h4>Laboratorium Dasar</h4>
							<p>Menyelenggarakan mata praktikum pemrograman desktop dan simulasi bagi mahasiswa tingkat satu jurusan Teknik Informatika.</p>
						</div>
						<div class="single-feature col-lg-4 text-center single-fact">
							<img class="img-fluid" src="<?php echo base_url('asset/img/f2.png'); ?>" alt="">
							<h4>Laboratorium Menengah</h4>
							<p>Mengadakan pembelajaran mengenai praktikum analisis, pemodelan, pemrograman basis data, animasi, game, jaringan, dan kecedasan buatan.</p>
						</div>
						<div class="single-feature col-lg-4 text-center single-fact">
							<img class="img-fluid" src="<?php echo base_url('asset/img/f3.png'); ?>" alt="">
							<h4>Laboratorium Lanjut</h4>
							<p>Memberikan materi praktikum pemrograman website dan jaringan guna mendukung kegiatan ilmiah tugas akhir maupun lainnya.</p>
						</div>											
					</div>
				</div>	
			</section>
			<!-- End lab -->

			<!-- Start about Area -->
			<section class="about-area">
				<div class="container">
					<div class="row justify-content-start align-items-center">
						<div class="col-lg-7 about-right">
							<img class="main img-fluid" src="<?php echo base_url('asset/img/kompres.png'); ?>">
						</div>
						<div class="col-lg-5 about-right">
							<h1>
								Apa itu<br> KOMPRES 4.0 ?
							</h1>
							<p class="mt-30">
								Kompetisi Prestasi hadir sebagai wadah untuk mahasiswa Universias Gunadarma dalam menyalurkan kreativitas dibidang teknologi informasi dengan semangat kompetitif.
							</p>
							<button class="primary-btn mt-20 text-uppercase">Lihat Detail<span class="lnr lnr-arrow-right"></button>
						</div>
					</div>
				</div>	
			</section>
			<!-- End about Area -->

			<!-- Start oprec -->
			<section class="about-area">
				<div class="container">
					<div class="row justify-content-start align-items-center section-gap">
						<div class="col-lg-5 about-right">
							<h1>
								Giliranmu,<br>jadi Asisten!
							</h1>
							<p class="mt-30">
								Dapatkan kesempatan mengembangkan diri yang lebih asyik lagi bersama kami, ayo daftarkan dirimu sebagai calas Laboratorium Teknik Informatika sakarang.
							</p>
							<button class="primary-btn mt-20 text-uppercase">Daftar Calas<span class="lnr lnr-arrow-right"></button>
						</div>
						<div class="col-lg-7 about-right">
							<img class="main img-fluid" src="<?php echo base_url('asset/img/calas.png'); ?>">
						</div>
					</div>
				</div>	
			</section>
			<!-- End oprec -->

			<!-- Start blog --> 
			<!-- <section class="feature-area" id="">
				<div class="container">
					<div class="row" style="padding-bottom:25px;">
						<div class="single-feature col-lg-3"">
							<div class="berita">
								<img class="img-fluid col-lg-12" src="<?php echo base_url('asset/img/b1.jpg'); ?>" alt="" style="padding: 0px;">
								<h4>Jadwal Praktikum ATA 2018/2019</h4>
								<p>Menyelenggarakan mata praktikum pemrograman desktop dan simulasi bagi mahasiswa tingkat satu jurusan Teknik Informatika.</p>
								<a href="#" class="link">Selengkapnya</a>
							</div>
						</div>
						<div class="single-feature col-lg-3"">
							<div class="berita">
								<img class="img-fluid col-lg-12" src="<?php echo base_url('asset/img/b1.jpg'); ?>" alt="" style="padding: 0px;">
								<h4>Jadwal Praktikum ATA 2018/2019</h4>
								<p>Menyelenggarakan mata praktikum pemrograman desktop dan simulasi bagi mahasiswa tingkat satu jurusan Teknik Informatika.</p>
								<a href="#" class="link">Selengkapnya</a>
							</div>
						</div>			
						<div class="single-feature col-lg-3"">
							<div class="berita">
								<img class="img-fluid col-lg-12" src="<?php echo base_url('asset/img/b1.jpg'); ?>" alt="" style="padding: 0px;">
								<h4>Jadwal Praktikum ATA 2018/2019</h4>
								<p>Menyelenggarakan mata praktikum pemrograman desktop dan simulasi bagi mahasiswa tingkat satu jurusan Teknik Informatika.</p>
								<a href="#" class="link">Selengkapnya</a>
							</div>
						</div>		
						<div class="single-feature col-lg-3"">
							<div class="berita">
								<img class="img-fluid col-lg-12" src="<?php echo base_url('asset/img/b1.jpg'); ?>" alt="" style="padding: 0px;">
								<h4>Jadwal Praktikum ATA 2018/2019</h4>
								<p>Menyelenggarakan mata praktikum pemrograman desktop dan simulasi bagi mahasiswa tingkat satu jurusan Teknik Informatika.</p>
								<a href="#" class="link">Selengkapnya</a>
							</div>
						</div>											
					</div>
					<div class="row col-lg-12">
						<button class="primary-btn mt-20 text-uppercase circle text-uppercase">Berita lainnya<span class="lnr lnr-arrow-right"></button>
					</div>
				</div>	
			</section> -->
			<!-- End blog -->
		
			<!-- Start footer Area -->		
			<footer class="footer-area section-gap text-white" style="background-image: url('<?php echo base_url('asset/img/2.png'); ?>');">
				<div class="container">
					<div class="row">
						<div class="single-feature col-lg-6 text-center">
							<h4 class="text-white">Depok</h4>
							<ul>
								<li>E535 Universitas Gunadarma</li>
								<li>Jl. Akses UI, Kelapa Dua, Cimanggis, Depok</li>
								<li>halo@ti.lab.gunadarma.ac.id</li>
							</ul>
						</div>
						<div class="single-feature col-lg-6 text-center">
							<h4 class="text-white">Kalimalang</h4>
							<ul>
								<li>J1222 Universitas Gunadarma</li>
								<li>Jl. KH. Noer Ali, Kalimalang, Jakasampurna, Bekasi</li>
								<li>halo@ti.lab.gunadarma.ac.id</li>
							</ul>
						</div>							
					</div>
				</div>
				<div class="container">
					<div class="footer-bottom text-center">
            <p class="footer-text m-0">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
						<div class="footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-medium"></i></a>
						</div>
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->

			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>		
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>

			<script src="<?php echo base_url('asset/js/vendor/jquery-2.2.4.min.js'); ?>"></script>
			<script src="<?php echo base_url('asset/js/vendor/bootstrap.min.js'); ?>"></script>
			<script src="<?php echo base_url('asset/js/easing.min.js'); ?>"></script>
			<script src="<?php echo base_url('asset/js/hoverIntent.js'); ?>"></script>
			<script src="<?php echo base_url('asset/js/superfish.min.js'); ?>"></script>
			<script src="<?php echo base_url('asset/js/jquery.ajaxchimp.min.js'); ?>"></script>
			<script src="<?php echo base_url('asset/js/jquery.magnific-popup.min.js'); ?>"></script>
			<script src="<?php echo base_url('asset/js/owl.carousel.min.js'); ?>"></script>
			<script src="<?php echo base_url('asset/js/jquery.sticky.js'); ?>"></script>
			<script src="<?php echo base_url('asset/js/jquery.nice-select.min.js'); ?>"></script>
			<script src="<?php echo base_url('asset/js/waypoints.min.js'); ?>"></script>	
			<script src="<?php echo base_url('asset/js/jquery.counterup.min.js'); ?>"></script>	
			<script src="<?php echo base_url('asset/js/parallax.min.js'); ?>"></script>	
			<script src="<?php echo base_url('asset/js/mail-script.js'); ?>"></script>	
			<script src="<?php echo base_url('asset/js/main.js'); ?>"></script>			

		</body>
	</html>



