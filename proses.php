<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<link rel="stylesheet" href="formstyle.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Righteous&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">		

    <title>Thank You</title></title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-light">
				<div class="container-fluid">
				<a class="navbar-brand">Wonderbolt Express</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav" >
					<a class="nav-link active" aria-current="page" href="index.php">Home</a>
					<a class="nav-link" href="formpenerima.php">Submission Here</a>
					</div>
				</div>
				</div>
			</nav>


<?php 
$date = date("Y-m-d");
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$jarak = $_POST['ijarak'];
$total = $_POST['ototal'];

echo "<head><title>Data Penerima Express</title></head>";
$fp = fopen("datapenerima.txt", "a+");
fputs($fp, "$date | $nama | $alamat | $email | $jarak KM | Rp.$total\n");
fclose($fp);

?>

    <div class="gambar1 text-center" id="homes">
		<h1>Terima Kasih atas Submisinya</h1>
		<button type="button" class="btn btn-warning btn-lg"><a href="index.php"> <!> Home <!></a></button>
	</div>




     
</body>
</html>




