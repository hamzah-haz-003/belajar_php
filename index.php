<?php 
require 'function.php';


$result = mysqli_query($con, "SELECT * FROM murid");

//while($mhs = mysqli_fetch_assoc($result))
//var_dump($mhs);






 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

<h1>Daptar murid</h1>



<table border="1" cellpading="15" cellspacing="0">
<?php while( $row = mysqli_fetch_assoc($result)): ?>
<tr>
	<th>nama</th>
	<th>alamat</th>
	<th>Foto</th>
	<th>nomor</th>
	<th>hobi</th>
	<th>keahlian</th>
	<th>Jurursan</th>
</tr>

<tr>
	<td>Lord Remdy</td>
	<td>
		<a href="">ubah</a>
		<a href="">hapus</a>
	</td>
	<td><img src="img/<?php echo $row["foto"] ?>" width="50"></td>
		<td><?= $row["nomor"]; ?></td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["nomor"]; ?></td>
		<td><?= $row["jurusan"]; ?></td>

</tr>

<?php endwhile; ?>




</table>

</body>
</html>