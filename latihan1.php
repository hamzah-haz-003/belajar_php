<?php

// $_GET
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV
//VARIABEL GLOBAL
$murid = [
	[
	"nama" => "Lord Remdy", 
	"nomor" => "177013",
	"alamat" => "lubang Biawak",
	"skill" => "King Of Doujin",
	"foto" => "remdy.jpeg"
	],
	[
	"nama" => "Babang Hamjah", 
	"nomor" => "233489",
	"alamat" => "Kediaman Poseidon",
	"skill" => "meme hunters",
	"foto" => "hamjah.jpeg"
	
]
];

?>

<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
<h1>Daptar Murid</h1>
<ul>
<?php foreach( $murid as $mhs) : ?>
	<li>
		<a href="latian2.php?nama=<?= $mhs["nama"]; ?>&nomor=<?= $mhs["nomor"]; ?>&alamat=<?= $mhs["alamat"]; ?>&skill=<?= $mhs["skill"]; ?>"><?= $mhs["nama"]; ?></a>
			
	</li>
	
<?php endforeach; ?>

</body>
</html>

