<?php include('serverguru.php'); include_once('serverguru.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>KalamPena │ Formulir Guru</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/courses.css">
<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
<link rel="icon" type="image/png" href="images/favicon-01.png" />
</head>
<body onload="myFunction()">

<div class="super_container">

	<!-- Header -->

	<header class="header">
			
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									<li><div class="question">Hubungi kami</div></li>
									<li>
										<img src="images/wa.png" style="height: 20px; margin-top: -3px;">
										<div style="font-size: 17px">+62812-9366-4939</div>
									</li>
									<li>
										<img src="images/gm.png" style="height: 20px; margin-top: -3px">
										<div style="font-size: 17px">kalampena99mulia@gmail.com</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>

	<!-- Header Content -->
	<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="index.php">
									<div class="logo_text"><img src="images/favicon-01.png" style="height: 75px; margin-top: -6px;">Kalam<span>Pena</span></div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li><a href="index.php">Home</a></li>
									<li><a href="layanan.php">Layanan</a></li>
									<li><a href="artikel.html">Artikel</a></li>
									<li  class="active"><a href="daftar.html">Daftar</a></li>
									<li><a href="about.html">About</a></li>
								</ul>
								<div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>

								<!-- Hamburger -->
								
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>			
		</div>			
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.php">Home</a></li>
				<li class="menu_mm"><a href="layanan.php">Layanan</a></li>
				<li class="menu_mm"><a href="daftar.html">Daftar</a></li>
				<li class="menu_mm"><a href="about.html">About</a></li>
			</ul>
		</nav>
	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="daftar.html">Daftar</a></li>
								<li>Formulir Guru</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!--Formulir-->
	<div class="konten">
		<h2 class="judul">Formulir Pendaftaran Guru</h1>
		<form action="serverguru.php" method="post" enctype="multipart/form-data">
			<div class="grup">
				<p>
					<label>Nama Lengkap:</label>
					<br>
					<input type="text" pattern="^[a-zA-Z ]+" name="namaguru" placeholder="Ketik nama lengkap anda" required>
				</p>
				<p>
					<label>Alamat Asal atau Daerah:</label>
					<br>
					<textarea name="alamatguru" placeholder="Ketik alamat tempat tinggal asal beserta nomor rumah, RT dan RW" required></textarea>
				</p>
				<p>
					<label>Kelurahan:</label>
					<input type="text" pattern="^[a-zA-Z ]+" name="kelurahanguru" placeholder="Ketik kelurahan" required>
				</p>
				<p>
					<label>Kecamatan:</label>
					<input type="text" pattern="^[a-zA-Z ]+" name="kecamatanguru" placeholder="Ketik kecamatan" required>
				</p>
				<p>
					<label>Kabupaten/Kota:</label>
					<input type="text" pattern="^[a-zA-Z ]+" name="kabkotaguru" placeholder="Ketik kabupaten atau kota" required>
				</p>
				<p>
					<label>Provinsi:</label>
					<input type="text" pattern="^[a-zA-Z ]+" name="provinsiguru" placeholder="Ketik provinsi"required>
				</p>
				<p>
					<label>Alamat Sekarang:</label>
					<br>
					<textarea name="alamatskrg" placeholder="Ketik alamat tempat tinggal sekarang beserta nomor rumah, RT dan RW" required></textarea>
				</p>
				<p>
					<label>Kelurahan:</label>
					<input type="text" pattern="^[a-zA-Z ]+" name="kelurahanskrg" placeholder="Ketik kelurahan" required>
				</p>
				<p>
					<label>Kecamatan:</label>
					<input type="text" pattern="^[a-zA-Z ]+" name="kecamatanskrg" placeholder="Ketik kecamatan"required>
				</p>
				<p>
					<label>Kabupaten/Kota:</label>
					<input type="text" pattern="^[a-zA-Z ]+" name="kabkotaskrg" placeholder="Ketik kabupaten atau kota" required>
				</p>
				<p>
					<label>Provinsi:</label>
					<input type="text" pattern="^[A-Za-z ]+" name="provinsiskrg" placeholder="Ketik provinsi" required>
				</p>
				<p>
					<label>No. HP:</label>
					<br>
					<input type="text" pattern="[0-9]+" min="10" max="13" name="nohpguru" placeholder="Ketik nomor handphone" required>
				</p>
				<p>
					<label>Email:</label>
					<br>
					<input type="Email" name="emailguru" placeholder="Ketik alamat email" required>
				</p>
				<p>
					<label>Pendidikan:</label>
					<label><input type="radio" name="pendidikanguru" value="Mahasiswa" checked="checked" /> Mahasiswa </label>
					<label><input type="radio" name="pendidikanguru" value="S1"/> S1</label>
				</p>
				<p>

					<label>Pengalaman menjadi guru privat:</label>
					<div class="pengalaman">
					<input type="number" min="0" name="angkapengalaman" placeholder="0" required>
					</div>
					<select name="pengalaman">
						<option value="bulan">bulan</option>
						<option value="tahun">tahun</option>
					</select>					
				</p>
				<p>
					<label>Jenjang sekolah yang akan diajar:</label>
					<br>
					<input type="checkbox" name="jenjang[]" value="SD"><label>SD</label>
					<input type="checkbox" name="jenjang[]" value="SMP"><label>SMP</label>
					<input type="checkbox" name="jenjang[]" value="SMA"><label>SMA</label>
					<input type="checkbox" name="jenjang[]" value="Umum"><label>Umum</label>
				</p>
				<p>
					<label>Bidang studi yang akan diajar:</label>
					<br>
					<label><input type="checkbox" name="bidangstudi[]" value="Matematika"> Matematika</label>
					<label><input type="checkbox" name="bidangstudi[]" value="IPS"> IPS</label>
					<label><input type="checkbox" name="bidangstudi[]" value="IPA"> IPA</label>
					<label><input type="checkbox" name="bidangstudi[]" value="binggris"> Bahasa Inggris</label>
					<label><input type="checkbox" name="bidangstudi[]" value="Fisika"> Fisika</label>
					<label><input type="checkbox" name="bidangstudi[]" value="Kimia"> Kimia</label>
					<label><input type="checkbox" name="bidangstudi[]" value="Biologi"> Biologi</label>
					<label><input type="checkbox" name="bidangstudi[]" value="Ekonomi"> Ekonomi</label>
				</p>
				<p>
					<label>Upload foto KTP/KTM:</label>
					<input type="file" name="fotoktp" accept="image/*" required>
				</p>
				<p>
				<input type="submit" name="submit" Value="DAFTAR"/>
				</p>
			</div>
		</form>		
	</div>

<!-- Footer -->

	<footer class="footer">
		<div class="footer_background" style="background-image:url(images/footer_background.png)"></div>
		<div class="container">
			<div class="row footer_row">
				<div class="col">
					<div class="footer_content">
						<div class="row">

							<div class="col-lg-3 footer_col">
					
								<!-- Footer About -->
								<div class="footer_section footer_about">
									<div class="footer_logo_container">
										<a href="#">
											<div class="footer_logo_text">Kalam<span>Pena</span></div>
										</a>
									</div>
									<div class="footer_about_text">
										<p><strong>Kalam Pena Private Centre</strong></p>
										<p>Prestasi, Akhlak Mulia dan Terpuji</p>
									</div>
									<div class="footer_social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col">
					
								<!-- Footer Contact -->
								<div class="footer_section footer_contact">
									<div class="footer_title">Contact</div>
									<div class="footer_contact_info">
										<ul>
											<li>Email: kalampena99mulia@gmail.com</li>
											<li>Phone: +62812-9366-4939</li>
											<li>Perumahan Puri Serpong 2 Blok C1 No. 17, Babakan, Setu, Tangerang Selatan 15345</li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-6 footer_col">
					
								<!-- Footer links -->
								<div class="footer_section footer_links">
									<div class="footer_title">CV. Hanif Mulia Grup</div>
									<div class="footer_links_container">
										<ul>
											<li>Nomor Induk Berusaha</li>
										</ul>
										<ul>
											<li>9120100131158</li>
										</ul>
									</div>
								</div>
								
							</div>

						</div>
					</div>
				</div>
			</div>

			
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="js/courses.js"></script>
</body>
</html>