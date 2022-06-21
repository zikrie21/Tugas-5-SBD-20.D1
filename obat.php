<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
    <title>Obat</title>
	<style>
        table {
            color: black;
			background-color: #F5F5F5;
		}
        table,tr,td {
            border: 1px solid black;
			margin: auto;
			padding: 12px;
		}
        thead {
            background-color: #1f5faa;
			color: white;
			font-weight: bold;
        }
    </style>
</head>
<body>
<div id="container">
        <header>
            <h1 align="center">Data Obat</h1>
        </header>
		<nav>
            <a href="index.php">Home</a>
            <a href="pasien.php">Pasien</a>
            <a href="obat.php"class="active">Obat</a>
            <a href="dokter.php">Dokter</a>
            <a href="berobat.php">Berobat</a>
			<a href="resep.php">Resep</a>
			<a href="user.php">Users</a>
        </nav>
	<div id="hero">
	<h2 align="center">Tabel Obat</h2>
	<br>
    <table class="table">
        <thead>
            <tr>
                <td>No</td>
				<td>Id Obat</td>
                <td>Nama Obat</td>               
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($conn, 'SELECT * FROM obat');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
				<td><?php echo $data['id_obat'] ?></td>
                <td><?php echo $data['nama_obat'] ?></td>
            </tr>
        <?php } ?>
    </table>
	</div>
    <footer>
		<p>&copy; 2022 - Universitas Pelita Bangsa</p>
	</footer>
</div>
</body>
</html>