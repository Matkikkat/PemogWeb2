<!DOCTYPE html>
<html>
<head>
	<title>Membuat Kalkulator Sederhana Dengan PHP</title>
</head>
<body>
	<?php 
		if(isset($_GET['hitung']))
		{
			$bil1=$_GET['bil1'];
			$bil2=$_GET['bil2'];
			$operasi=$_GET['operasi'];

			switch ($operasi) 
			{
				case 'tambah':
					echo $hasil = $bil1+$bil2;
				break;
				case 'kurang':
					echo $hasil = $bil1-$bil2;
				break;
				case 'kali':
					echo $hasil = $bil1*$bil2;
				break;
				case 'bagi':
					echo $hasil = $bil1/$bil2;
				break;			
			}
		}
	?>
	<h2 class="judul">KALKULATOR</h2>
	<form action="testing.php" method="get">		
		<input type="text" name="bil1" placeholder="nomer 1">
		<select class="opt" name="operasi">
			<option value="tambah">+</option>
			<option value="kurang">-</option>
			<option value="kali">x</option>
			<option value="bagi">/</option>
		</select>
    	<input type="text" name="bil2" placeholder="nomer 2">
		<button type="hitung" name="hitung"> hasil</button>
		</form>
		<br>
    	<!-- <button type="submit" name="hitung" value="submit">hasil</button> -->
    	<p>Hasilnya:</p>
</body>
</html>