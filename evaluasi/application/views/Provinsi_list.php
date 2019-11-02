	<table class="table table-hover table-stripped">
     <thead>
		<tr>
			<th> Kode </th>
			<th> Nama </th>
			<th> Action </th>
		</tr>
	</thead>
     <tbody>
	<?php 
		foreach($provinsiList as $provinsi)
		{
	?>		
		<tr>
			<td> <?=$provinsi->id_prov?> </td>
			<td> <?=$provinsi->name?> </td>
			<td> <a href="Provin/open/<?=$provinsi->id_prov?>">Edit</a>
				 <a href="Provin/delete/<?=$provinsi->id_prov?>" onclick="return confirm('Yakin akan menghapus data ini?')">Hapus</a>
			</td>
		</tr>
	<?php		
		}
	?>
	</table>
</tbody>
	</center>
</body>
</html>