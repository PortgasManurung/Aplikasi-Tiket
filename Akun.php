<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/style1.css">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script> 
<script type="text/javascript" src="js/Myriad_Pro_italic_600.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_italic_400.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
	<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<style>
#banner {background:url(images/1.jpg) 0 0 no-repeat;width:999px;height:290px;padding:100px 0 0 60px}

</style>
<body id="page5">
<div class="body1">
	<div class="main">
<!-- header -->
		<header>
		<div class="wrapper">
				<h1>
				<img src="logo (2).png" class="logo">
					<a href="home.php" <img src="logo (2).png" class="logo"> </a>
				</h1>
				<div class="right">
					<nav>
						<ul id="top_nav">
							<li><a href="home.php"><img src="images/img1.gif" alt=""></a></li>
							<li><a href="Akun.php"><img src="images/img2.gif" alt=""></a></li>
						</ul>
					</nav>
					<nav>
						<ul id="menu">
							<li><a href="home.php">Home</a></li>
							<li><a href="pesawat.php">Pesawat</a></li>
							<li ><a href="kereta.php">Kereta</a></li>
							<li><a href="reschedule.php">Reschedule</a></li>
							<li id="menu_active"><a href="Akun.php">Akun</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
	</div>
</div>
<div class="main">
	<div id="banner">
		<div class="text1">
			Seribu Tiket<p>Cari tiket pesawat dan kereta api ?kunjungi Seribu Tiket</p>
		</div>
	</div>
</div>
<!-- / header -->
<div class="main">
<!-- content -->
	<section id="content">
		<article class="col1">
			<div class="pad_1">
				<h2>Kontak Kami</h2>
				<span class="cols">
					Negara:<br>
					Kota:<br>
					Telephone:<br>
					Email:
				</span>
				INA<br>
				Bandung<br>
				+62 81377016704<br>
				<a href="mailto:">seributiket@gmail.com</a>
				

				<a href="logout.php" class="button1" onClick="document.getElementById('ContactForm').submit()">Log out</a>
				
			</div>
		</article>
		<article class="col2 pad_left1">
			<h2>PROFILE</h2>
			
			<form id="ContactForm" action="">
				<div>
					<div class="wrapper">
					<?php
					include 'koneksi.php';
					$data = mysqli_query($koneksi,"select * from akun");
		while($d = mysqli_fetch_array($data)){
			?>
						
						Nama : <?php echo $d['Nama']; ?><br />
					</div>
					<div class="wrapper">
						
						E-mail: <?php echo $d['E-mail']; ?> <br />
					</div>
					<div class="wrapper">
						
						No.Telp: <?php echo $d['No.Telp'] ?><br />
					</div>
					<div class="wrapper">
						
						Tanggal Lahir: <?php echo $d['Tanggal Lahir'] ?><br />
					</div>
					
					<?php
		}
		?>
					
					</div>
					
					
				</div>
			</form>
		</article>
	</section>
<!-- / content -->
</div>
<div class="body2">
	<div class="main">
<!-- footer -->
		<footer>
			Copyright<br>
			<a href="home.php" target="_blank" rel="nofollow">Seribu Tiket</a>
		</footer>
<!-- / footer -->
	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>

<?php  ?>