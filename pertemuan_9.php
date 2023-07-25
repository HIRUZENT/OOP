<?php 

$conn = mysqli_connect("localhost", "root", "", "datamaha");
$hasil = mysqli_query($conn, "SELECT * FROM mahasiswa");
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DATA MAHASISWA</title>
</head>
<body>
<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No.</th>
		<th>Gambar</th>
		<th>Nama</th>
		<th>NISN</th>
		<th>Email</th>
		<th>Jurusan</th>
	</tr>
	<tr><?php $i = 1; ?>
	<?php while ($row = mysqli_fetch_assoc($hasil)): ?>
		<td><?php echo $i; ?></td>
		<td><img src="<?php echo $row["gambar"]; ?>"></td>
		<td><?php echo $row["nama"]; ?></td>
		<td><?php echo $row["nisn"]; ?></td>
		<td><?php echo $row["email"]; ?></td>
		<td><?php echo $row["jurusan"]; ?></td>
	</tr>
	<?php $i++; ?>
<?php endwhile ?>
</table>
</body>
</html>