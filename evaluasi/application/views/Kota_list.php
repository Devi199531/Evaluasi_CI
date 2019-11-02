	<table class="table table-hover table-stripped">
     <thead>
		<tr>
			<th> Kode </th>
			<th> Nama </th>
			<th> Provinsi </th>
			<th> Action </th>
		 </tr>
      </thead>
     <tbody>
	<?php 
		foreach($kotaList as $kota)
		{
	?>		
		<tr>
			<td> <?=$kota->id_city?> </td>
			<td> <?=$kota->nama?> </td>
			<td> <?=$kota->name?> </td>
			
			<td> <a href="kota/open/<?=$kota->id_city?>">Edit</a>
				 <a href="kota/delete/<?=$kota->id_city?>" onclick="return confirm('Yakin akan menghapus data ini?')">Hapus</a>
			</td>
		</tr>
	<?php		
		}
	?>
</tbody>
	</table>
	</center>
</body>
</html>