<?php
    require_once 'dbkoneksi.php';

    $sqljenis = "SELECT * FROM kartu";
    $rowjenis = $conn->prepare($sqljenis);
    $rowjenis->execute();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Form Input Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"><a href="view_vendor.php">Home</a></li>
        </ol>
    </nav>

    <h1>Form Input Data</h1>
	<form method="post" action="view_vendor.php">
		<label for="nomor">Nomor:</label>
		<input type="text" id="nomor" name="nomor"><br><br>
		
		<label for="nama">Nama Perusahaan:</label>
		<input type="text" id="nama" name="nama"><br><br>

        <label for="kota">Kota:</label>
		<input type="text" id="kota" name="kota"><br><br>

        <label for="kontak">Kontak:</label>
		<input type="text" id="kontak" name="kontak"><br><br>

        </select>

        <br><br>
		
		<input class="btn btn-primary" type="submit" value="Simpan" name="submit">
	</form>
</body>
</html>