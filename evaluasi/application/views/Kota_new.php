<form action="<?php echo base_url('/kota/addNew') ?> " method="post">
	<?php
		echo form_open('kota/create');
		
		echo "<p>";
		echo "Provinsi ";
		echo form_dropdown('id_prov', $dropdownProvinsi, "", "");
		echo "</p>";
		
		echo "<p>";
		echo "Kode Kota ";
		echo form_input('id_city', '');
		echo "</p>";
		
		echo "<p>";
		echo "Nama Kota ";
		echo form_input('nama', '');
		echo "</p>";
		
		echo form_submit('submit', 'Simpan');
		echo form_close();
	?>
</form>