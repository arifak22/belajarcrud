<a href="<?=base_url().'index.php/belajar_crud/insert'?>">Tambah Data</a>
<table border="1">
	<tr>
		<th>no</th>
		<th>NIM</th>
		<th>Nama</th>
		<th>Falkutas</th>
		<th>Strata</th>
		<th>No HP</th>
		<th>Aksi</th>
	</tr>
	<?php
	$no=1;
	foreach($data as $r) {
		?>
	<tr>
		<td><?php echo $no ?></td>
		<td><?php echo $r['NIM'] ?></td>
		<td><?php echo $r['Nama'] ?></td>
		<td><?php echo $r['Fakultas'] ?></td>
		<td><?php echo $r['Strata'] ?></td>
		<td><?php echo $r['No_hp'] ?></td>
		<td><a href="<?=base_url().'index.php/belajar_crud/update/'.$r['NIM']?>">Ubah</a> || <a href="<?=base_url().'index.php/belajar_crud/delete/'.$r['NIM']?>">Hapus</a></td>
	</tr>
	<?php
		$no++;
		}
	?>
</table>
