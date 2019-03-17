<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

	<!DOCTYPE html>
	<html lang="zxx" class="no-js">

		<body>
			<header id="header" id="home">
		    <div class="container">
		    	<div class="row align-items-center justify-content-between d-flex">
				    <div id="logo">
				      <a href="<?php echo site_url();?>"><img src="<?php echo base_url('asset/img/logo-labti.png'); ?>" width="50px"/></a>
				    </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu align-items-center justify-content-between d-flex">
			          <li class="menu-active"><a href="<?php echo site_url();?>">Beranda</a></li>
				        <!-- <li class="menu-has-children"><a href="#">Praktikum</a>
				          <ul>
				         		<li><a href="">Tata Tertib</a></li>
				 	          <li><a href="#">Jadwal</a></li>
					          <li><a href="#">Modul</a></li>
				          	<li><a href="#">Pelayanan</a></li>
				          </ul>
				        </li> -->
<!-- 				        <li><a href="#">Berita</a></li> -->
				        <li><a href="<?php echo site_url('tatatertib');?>">Tata Tertib</a></li>
				        <li><a href="<?php echo site_url('jadwal');?>">Jadwal</a></li>
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
							<a href="<?php echo site_url('profil');?>" class="primary-btn header-btn text-uppercase">Kenalan yuk</a>
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
							<img class="img-fluid" src="<?php echo base_url('asset/img/o1.png'); ?>" alt="">
							<h4>Laboratorium Dasar</h4>
							<p>Menyelenggarakan mata praktikum pemrograman desktop dan simulasi bagi mahasiswa tingkat satu jurusan Teknik Informatika.</p>
						</div>
						<div class="single-feature col-lg-4 text-center single-fact">
							<img class="img-fluid" src="<?php echo base_url('asset/img/o4.png'); ?>" alt="">
							<h4>Laboratorium Menengah</h4>
							<p>Mengadakan pembelajaran mengenai praktikum analisis, pemodelan, pemrograman basis data, animasi, game, jaringan, dan kecedasan buatan.</p>
						</div>
						<div class="single-feature col-lg-4 text-center single-fact">
							<img class="img-fluid" src="<?php echo base_url('asset/img/o6.png'); ?>" alt="">
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
	