<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/style1.css">">
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
#banner {background:url(images/2.jpg) 0 0 no-repeat;width:999px;height:290px;padding:100px 0 0 60px}

</style>
<body id="page3">

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
							<li id="menu_active"><a href="reschedule.php">Reschedule</a></li>
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
			MUDAH<span>TERPERCAYA</span><p>Nikmati kemudahan dalam mereschedule pesanan anda.</p>
		</div>
	</div>
</div>
<!-- / header -->

<div class="main">
<!-- content -->
	<section id="content">
	
		<article class="col1">
			<div class="pad_1">
			
				<h2>Reschedule Tiket</h2>
				<form id="form_1" action="" method="post">
					
					<div class="wrapper">
						No Pesawat Anda:
						<div class="bg"><input type="text" name="idpesawat" class="input input1" value="" onBlur="if(this.value=='') this.value='Enter City or Airport Code'" onFocus="if(this.value =='Enter City or Airport Code' ) this.value=''"></div>
					</div>
					
						<button type="submit" name="reschedule"><a href="#" class="button2" onClick="document.getElementById('form_1').submit()">Reschedule</a></button>
					
				</form>
				
	
	</section>
	<table cellspacing='0'><link rel="stylesheet" type="text/css" href="style1.css">
		<thead>
			<tr>
				<th>Nama Pesawat</th>
				<th>No Pesawat</th>
				<th>Keberangkatan</th>
				<th>Tujuan</th>
				<th>Tanggal</th>
				<th>Waktu Keberangkatan</th>
				<th>Waktu Sampai</th>
				<th>Harga</th>
			</tr>
		</thead>
		
	<?php
	include'koneksi.php';
	$data = mysqli_query($koneksi,"select * from reschedule");
		while($d = mysqli_fetch_array($data)){
		?>
	<tr>
	<form action="" method="POST">
				<td><?php echo $nama_pesawat; ?></td>
				<td><button type="submit" name="hapus" value="<?php echo $idpesawat; ?>"><?php echo $idpesawat; ?></button></td>
				<td><?php echo $d['keberangkatan']; ?></td>
				<td><?php echo $d['tujuan']; ?></td>
				<td><?php echo $d['tanggal']; ?></td>
				<td><?php echo $d['waktu_keberangkatan']; ?></td>
				<td><?php echo $d['waktu_tiba'];?></td>
				<td><?php echo $d['harga']; ?></td>
				</form>
	</tr>
			<?php
		 }
		 
?>
		
		
</table>		
<!-- / content -->
</div>
<div align="right">


		<tbody>
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

<?php
if(isset($_POST['hapus'])){
	$id=$_POST['hapus'];
	$sql = "DELETE FROM beli WHERE id_kereta='$id'";

if ($conn->query($sql) === TRUE) {
    header("location:pesawat.php");
}
}
?>
