<html>
<head>
<title>
Kabupaten Edit
</title>
</head>
<body>
	<?php
		echo form_open('kota/update');
		
		echo "<p>";
		echo "Provinsi ";
		echo form_dropdown('id_prov', $dropdownProvinsi, $kota->id_prov, "");
		echo "</p>";
		
		echo "<p>";
		echo "Kode Kabupaten ";
		echo form_input('id_city', $kota->id_city);
		echo "</p>";
		
		echo "<p>";
		echo "Nama Kabupaten ";
		echo form_input('name', $kkota->name);
		echo "</p>";
		
		echo form_hidden('Id', $kota->id_city);
		echo form_submit('submit', 'Simpan');
		echo form_close();
	?>
</body>
</html>