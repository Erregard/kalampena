<?php include('server.php'); include_once('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>KalamPena │ Formulir Siswa</title>
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
<body>

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
									<li class="active"><a href="daftar.html">Daftar</a></li>
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
								<li>Formulir Siswa</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!--Formulir-->
	<div class="konten">
		<h2 class="judul">Formulir Pendaftaran Siswa</h1>
		<p class="isi">Mohon agar nama siswa di bawah ini dapat didaftar sebagai siswa bimbingan belajar pada <strong>Kalam Pena Private Centre</strong> dan kami sebagai orang tua bersedia untuk memenuhi ketentuan yang berlaku</p>
		<form action=" " method="post">
			<div class="grup">
				<p>
					<label>Nama Siswa:</label>
					<br>
					<input type="text" pattern="^[a-zA-Z ]+" name="nama" placeholder="Ketik nama lengkap siswa" required>
				</p>
				<p>
					<label>Nama Orang Tua:</label>
					<br>
					<input type="text" pattern="^[a-zA-Z ]+" name="nm_ortu" placeholder="Ketik nama orang tua" required>
				</p>
				<p>
					<label>Pekerjaan Orang Tua:</label>
					<br>
					<input type="text" pattern="^[a-zA-Z ]+" name="kerja" placeholder="Ketik pekerjaan orang tua" required>
				</p>
				<p>
					<label>Pendidikan Bapak:</label>
					<label><input type="radio" name="pend_bpk" value="SMA"/> SMA</label>
					<label><input type="radio" name="pend_bpk" value="D3"/> D3</label>
					<label><input type="radio" name="pend_bpk" value="D4/S1"/> D4/S1</label>
					<label><input type="radio" name="pend_bpk" value="S2"/> S2</label>
					<label><input type="radio" name="pend_bpk" value="S3"/> S3</label>
				</p>
				<p>
					<label>Pendidikan Ibu:</label>
					<label><input type="radio" name="pend_ibu" value="SMA"/> SMA</label>
					<label><input type="radio" name="pend_ibu" value="D3"/> D3</label>
					<label><input type="radio" name="pend_ibu" value="D4/S1"/> D4/S1</label>
					<label><input type="radio" name="pend_ibu" value="S2"/> S2</label>
					<label><input type="radio" name="pend_ibu" value="S3"/> S3</label>
				</p>
				<p>
					<label>Alamat Rumah:</label>
					<br>
					<textarea name="alamat" placeholder="Ketik alamat rumah" required></textarea>
				</p>
				<p>
					<label>Kelurahan:</label>
					<input type="text" pattern="^[a-zA-Z ]+" name="kelurahan" placeholder="Ketik kelurahan" required>
				</p>
				<p>
					<label>Kecamatan:</label>
					<input type="text" pattern="^[a-zA-Z ]+" name="kecamatan" placeholder="Ketik kecamatan" required>
				</p>
				<p>
					<label>Kabupaten/Kota:</label>
					<input type="text" pattern="^[a-zA-Z ]+" name="kab" placeholder="Ketik kabupaten atau kota" required>
				</p>
				<p>
					<label>Kode Pos: </label>
					<br>
					<input type="text" pattern="[0-9]+" min="5" max="5" name="kodepos" placeholder="Ketik kode pos" required>
				</p>
				<p>
					<label>No. HP:</label>
					<br>
					<input type="text" pattern="[0-9]+" min="10" max="13" name="nohp" placeholder="Ketik nomor handphone"required>
				</p>
				<p>
					<label>Email:</label>
					<br>
					<input type="Email" name="email" placeholder="Ketik alamat email"required
				</p>
				<p>
					<label>Tingkat Satuan Pendidikan:</label>
					<select name="pendidikan">
						<option value="SD_1">SD Kelas 1</option>
						<option value="SD_2">SD Kelas 2</option>
						<option value="SD_3">SD Kelas 3</option>
						<option value="SD_4">SD Kelas 4</option>
						<option value="SD_5">SD Kelas 5</option>
						<option value="SD_6">SD Kelas 6</option>
						<option value="SMP_1">SMP Kelas 1</option>
						<option value="SMP_2">SMP Kelas 2</option>
						<option value="SMP_3">SMP Kelas 3</option>
						<option value="SMA_1">SMA Kelas 1</option>
						<option value="SMA_2">SMA Kelas 2</option>
						<option value="SMA_3">SMA Kelas 3</option>
					</select>
				</p>
				<p>
					<label>Nama Sekolah:</label>
					<br>
					<input type="text" name="nm_sekolah" placeholder="Ketik nama sekolah" required>
				</p>
				<p>
					<label>Harapan orang tua siswa yang akan disampaikan:</label>
					<br>
					<textarea name="harapan" placeholder="Ketik harapan orang tua" required></textarea>
				</p>
				<p>
					<input type="submit" name="daftar" value="DAFTAR" />
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