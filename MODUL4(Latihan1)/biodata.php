<html>
<style>
	table, th, td {
		border: 1px solid black;
	}
</style>
<body>
	<table style="width:50%">
		<tr>
			<td><b>NIM</b></td>
			<td><?php echo $_POST["nim"]; ?></td>
		</tr>
		<tr>
			<td><b>Nama</b></td>
			<td><?php echo $_POST["nama"]; ?></td>
		</tr>
		<tr>
			<td><b>Jenis Kelamin</b></td>
			<td><?php echo $_POST["jk"]; ?></td>
		</tr>
		<tr>
			<td><b>Program Studi</b></td>
			<td><?php echo $_POST["ps"]; ?></td>
		</tr>
	</table>
</body>
</html>