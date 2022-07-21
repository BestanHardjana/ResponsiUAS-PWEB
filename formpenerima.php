<html>
	<head>
		<title>Data Penerima Paket</title>
		<link rel="stylesheet" href="style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<link rel="stylesheet" href="formstyle.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Righteous&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">		

	</head>

	<body>
        <SCRIPT language="JavaScript">
            function hitungjarak(){
                var jarak = parseFloat(document.form1.ijarak.value);
                var total =0.0; 
                if (jarak>=1){
                    total =jarak*5000;
                }else{
                    total =5000;
                }
                    document.form1.ototal.value=eval(total);
            }
        </SCRIPT>

			<nav class="navbar navbar-expand-lg bg-light">
				<div class="container-fluid">
				<a class="navbar-brand">Wonderbolt Express</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav" >
					<a class="nav-link active" aria-current="page" href="index.php">Home</a>
					<a class="nav-link" href="#">Submission Here</a>
					</div>
				</div>
				</div>
			</nav>
			
			<div class="form-area">
				<div align="center"><strong><font size="5" face="Courier New, Courier, mono">Data Penerima, Wonderbolt Express</font></strong></div>
				<br>
				<form class="formE" name="form1" method="post" action="proses.php">
					<p> Nama Lengkap: </p>
					<input type="text" name="nama" id="nama">
					<p> Alamat Tujuan: </p>
					<input type="text" name="alamat" id="alamat">
					<p> E-Mail: </p>
					<input type="text" name="email" id="email">
					<p> Estimasi Jarak Pengirim: </p>
					<input type="text" name="ijarak" id="ijarak" placeholder="Per-KM = 5000">
					<p> Total: </p>
					<input type="text" name="ototal" id="ototal">
					<br>
					<input type="submit" name="submit" value="Kirim"><input type="reset" name="submit2" value="Reset">
					<input type="button" value="Cek Estimasi" onclick="hitungjarak()">
				</form>
			</div>
	</body>
</html>