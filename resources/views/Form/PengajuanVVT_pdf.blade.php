

<!DOCTYPE html>
<html>
<head>
	<title>Tanda Bukti Terima</title>
	<link rel="icon" href="./assets/img/logo.png">
	<style type="text/css">
		body{
			font-family: Arial;
		}

		@media print{
			.no-print{
				display: none;
			}
		}

		table{
			border-collapse: collapse;
		}
	</style>
</head>
<body>
<table border="6" cellpadding="80" cellspacing="0" width="100%">
<tr>
	<td>
	<table width="100%">
		<?php
		?>
		<tr>
			<td colspan="3">
				<center>
				<img src="assets/img/logo.png" width="150px">
				<h3>Kankemenag Kota Batu</h3>
                <h3>Tanda Terima Layanan Online</h3>
                <h3>Surat  Masuk</h3>
				<p>https://batukota.kemenag.go.id</p>
				<hr>
				<br>
				<p>Terimakasih atas ajuan anda, detail ajuan sebagai berikut:</p>
				<p>Nama: {{$pengajuan_vvt['nama']}} </p>
                <p>Whatsapp: {{$pengajuan_vvt['whatsapp']}} </p>
                <p>Email: {{$pengajuan_vvt['email']}} </p>
				<p>Jenis Layanan: Pengajuan Visa Tinggal Terbatas</p>
				<br>
				<h3>Berikut adalah Kode Tracking Status Pengajuan Surat Anda:</h3>
				<h3>{{$pengajuan_vvt['id']}}</h3>
				</center>
			</td>
		</tr>
		<tr>
			<td></td>
			<td width="500px">
				<p>Hormat Kami,
				<br/>
				<br/>
				<br/>
				<p><b>Kankemenag Kota Batu</b></p>
			</td>
		</tr>
	</table>
	</td>
</tr>
</table>
<br>

</body>
</html>

<?php
?>