<!DOCTYPE html>
<html>
<head>
	<title>Buku tamu</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="judul">		
		<h2>Buku Tamu Pak Asep</h2>
	</div>
	<br/>

	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<button type="button" class="tombol" onclick="window.location.href='input.php'">Absen</button>

	<h3>Data Tamu</h3>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Nomer</th>		
		</tr>
		<?php 
			include 'koneksi.php';
			$no = 1;
			$data = mysqli_query($koneksi,"select * from absen");
			while($isi = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $isi['nama']; ?></td>
			<td><?php echo $isi['alamat']; ?></td>
			<td><?php echo $isi['nomer']; ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>