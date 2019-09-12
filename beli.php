<!DOCTYPE html>
<html>
<head>
	<title>Beli Tiket</title>
</head>
<body>
 
	<h2>Beli Tiket Kereta</h2>
	<br/>
	<a href="home.php">KEMBALI</a>
	<br/>
	<br/>
		<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Nama Pembeli</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>No.Hp</td>
				<td><input type="text" name="notelp"></td>
			</tr>
			<tr>
				<td>E-Mail</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Jumlah Tiket</td>
				<td><input type="number" name="jumlah"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>