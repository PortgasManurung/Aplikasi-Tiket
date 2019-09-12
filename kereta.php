
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
#banner {background:url(images/1.jpg) 0 0 no-repeat;width:1500px;height:270px;padding:15px 15px 15px 15px;margin-left: 10px;left: 200px;}
#form_1 .input{
	width:150px;
}
</style>
<body id="page4">
<div class="body1">
	<div class="main">
<!-- header -->
		<header>
			<div class="wrapper">
				<h1>
				<img src="logo (2).png" class="logo">
					<a href="home.php" <img src="logo (2).png" class="logo"></a>
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
							<li id="menu_active"><a href="kereta.php">Kereta</a></li>
							<li><a href="reschedule.php">Reschedule</a></li>
							<li><a href="Akun.php">Akun</a></li>
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
			KERETA API<span>AMAN & NYAMAN</span><p>Nikmati Perjalanan Anda dengan Aman dan Nyaman serta dengan harga yang Murah</p>
		</div>
	</div>
</div>
<!-- / header -->
<div class="main">
<!-- content -->
	
<div class="coba">
	<section id="content">
		<article class="col1">
			<div class="pad_1">
				<h2>Pemesanan Kereta</h2>
				<form id="form_1" action="kereta.php" method="post">
					
					<div class="wrapper">
						Keberangkatan :<br>
						<select name="asal_kota">
						<ol>
							<option value="">---------------------Pilihan---------------------</option>
							<option>Bandung-Bandung</option>
							<option>Cimahi-Bandung</option>
							<option>Gambir-Jakarta</option>
							<option>Jatinegara-Jakarta</option>
							<option>Kiaracondong-Bandung</option>
							<option>Pasar Senen-Jakarta</option>
							
						</select>
					</div>
					<div class="wrapper">
						Tujuan:<br>
						<select name="tujuan_kota">
						<ol>
							<option value="">---------------------Pilihan---------------------</option>
							<option>Bandung-Bandung</option>
							<option>Cimahi-Bandung</option>
							<option>Gambir-Jakarta</option>
							<option>Jatinegara-Jakarta</option>
							<option>Kiaracondong-Bandung</option>
							<option>Pasar Senen-Jakarta</option>
							
						</select>
					</div>
					<div class="wrapper">
						Waktu Keberangkatan:
						<div class="wrapper">
							<div class="bg left"><input type="date" name="waktukeberangkatan" class="input input2" value="mm/dd/yyyy " onBlur="if(this.value=='') this.value='mm/dd/yyyy '" onFocus="if(this.value =='mm/dd/yyyy ' ) this.value=''"></div>
							
						</div>
					</div>
					<div class="wrapper">
						<p>Penumpang:</p>
						<select name="tipe">
						<option value="Manula">Manula</option>
						<option value="Dewasa">Dewasa</option>
						<option value="Balita">Balita</option>
						</select>
						<button type="submit" name="cari" class="button2" onClick="document.getElementById('form_1').submit()">CARI</button>
					</div>
				</form>
				</div>
				</div>
		</article>
		
	</section>
	<div align="right">
<table cellspacing='0'><link rel="stylesheet" type="text/css" href="style1.css">
		<thead>
			<tr><form action="beli.php" method="POST">
				<th>Nama Kereta</th>
				<th>No Kereta</th>
				<th>Keberangkatan</th>
				<th>Tujuan</th>
				<th>Tanggal</th>
				<th>Waktu Keberangkatan</th>
				<th>Waktu Sampai</th>
				<th>Harga</th>
				<th>Beli Tiket </th>
			</tr>
		</thead>
		
		
		<tbody>
			<?php 
			include 'koneksi.php';
			$data = mysqli_query($koneksi,"select * from kereta");
		while($d = mysqli_fetch_array($data)){
			?>

			<tr>
				<td><?php echo $d['nama_kereta']; ?></td>
				<td><?php echo $d['idkereta']; ?></td>
				<td><?php echo $d['keberangkatan'];?></td>
				<td><?php echo $d['tujuan'];?></td>
				<td><?php echo $d['tanggal'];?></td>
				<td><?php echo $d['waktu_keberangkatan'];?></td>
				<td><?php echo $d['waktu_tiba'];?></td>
				<td><?php echo $d['harga']?></td>
				<td><a href="beli.php">+ </a></td>
			</tr>
	<?php }
	?>
		</tbody>
	</table>
	</div>
	
<!-- / content -->
</div>
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