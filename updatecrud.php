<table>
<form action="<?=base_url().'index.php/belajar_crud/update'?>" method="POST">
	<tr>
		<td>NIM</td>
		<td>:</td>
		<td><input type="hidden" name="nim" value="<?=$r['NIM']?>"><?=$r['NIM']?></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama" value="<?=$r['Nama']?>"></td>
	</tr>
	<tr>
		<td>Fakultas</td>
		<td>:</td>
		<td><input type="text" name="fakultas" value="<?=$r['Fakultas']?>"></td>
	</tr>
	<tr>
		<td>Strata</td>
		<td>:</td>
		<td><input type="text" name="strata" value="<?=$r['Strata']?>"></td>
	</tr>
	<tr>
		<td>No Handphone</td>
		<td>:</td>
		<td><input type="text" name="no_hp" value="<?=$r['No_hp']?>"></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="submit" value="submit"></td>
	</tr>
</form>
</table>