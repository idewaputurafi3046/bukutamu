<!DOCTYPE html>
<html>
<head>
	<title>Tambah Absen</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

    <div class="judul">		
		<h2>Buku Tamu Pak Asep</h2>
	</div>
	<br/>
    <button type="button" class="tombol" onclick="window.location.href='index.php'" style="background: red;">Kembali</button>
	<br/>
	<br/>
	<h3>Isi buku tamu</h3>
	<form method="post" action="aksi_input.php">
		<table>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Nomer</td>
				<td><input type="text" name="nomer"></td>
			</tr>
			<tr>
				<td></td>
				<td></br><button type="submit" class="tombol">Simpan</button>
			</tr>		
		</table>
	</form>
</body>
</html>