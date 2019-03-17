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
<!-- 				    		<li><a href="#">Berita</a></li> -->
				        <li><a href="<?php echo site_url('tatatertib');?>">Tata Tertib</a></li>
				        <li><a href="<?php echo site_url('jadwal');?>">Jadwal</a></li>
				        <li><a href="#">Masuk</a></li>
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
			</header><!-- #header -->

			<!-- Start Content Area -->
			<section class="sample-text-area">
				<div class="container">
<!-- 					<div class="text-center">
						<h1>Jadwal Praktikum</h1>
						<h3 class="text-heading">Laboratorium Teknik Informatika</h3>
						<p class="section-title">berlaku mulai 18 Maret 2019</p>
					</div> -->
					<div class="">
						<img class="img-fluid col-lg-12" src="https://ti-dasar.lab.gunadarma.ac.id/wp-content/uploads/2009/12/STUKTUR-ORGANISASI-1024x791.jpg">
					</div>
				</div>
			</section>
			<!-- End Content Area -->