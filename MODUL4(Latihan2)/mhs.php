<html>
<style>
	table, th, td {
		border: 1px solid black;
	}
</style>
<body>
	<table style="width:60%">
		<tr>
			<td><b>NIM</b></td>
			<td><?php echo $_POST["nim"]; ?></td>
		</tr>
		<tr>
			<td><b>NAMA</b></td>
			<td><?php echo $_POST["nama"]; ?></td>
		</tr>
		<tr>
			<td><b>JENIS KELAMIN</b></td>
			<td><?php echo $_POST["jk"]; ?></td>
		</tr>
		<tr>
			<td><b>ALAMAT</b></td>
			<td><?php echo $_POST["alamat"]; ?></td>
		</tr>
		<tr>
			<td><b>PROGRAM STUDI</b></td>
			<td><?php echo $_POST["ps"]; ?></td>
		</tr>
		<tr>
			<td><b>BAHASA PEMROGRAMAN YANG DIKUASAI</b></td>
			<td><?php if (isset($_POST["cek"])) {
				$cek = $_POST["cek"];
				echo"";
				for ($i = 0; $i < count($cek); $i++) {
					echo $cek[$i]."<br>";
				}
			} ?></td>
		</tr>
	</table>
</body>
</html>