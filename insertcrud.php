<table>
<form action="<?=base_url().'index.php/belajar_crud/insert'?>" method="POST">
	<tr>
		<td>NIM</td>
		<td>:</td>
		<td><input type="text" name="nim"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Fakultas</td>
		<td>:</td>
		<td><input type="text" name="fakultas"></td>
	</tr>
	<tr>
		<td>Strata</td>
		<td>:</td>
		<td><input type="text" name="strata"></td>
	</tr>
	<tr>
		<td>No Handphone</td>
		<td>:</td>
		<td><input type="text" name="no_hp"></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="submit" value="submit"></td>
	</tr>
</form>
</table>