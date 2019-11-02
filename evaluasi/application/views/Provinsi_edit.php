<html>
<head>
<title>
Provinsi Edit
</title>
</head>
<body>
	<?php
		echo form_open('Provin/update');
		
		echo "<p>";
		echo "Kode Provinsi ";
		echo form_input('id_prov', $provinsi->id_prov);
		echo "</p>";
		
		echo "<p>";
		echo "Nama Provinsi ";
		echo form_input('name', $provinsi->name);
		echo "</p>";
		
		echo form_hidden('Id', $provinsi->id_prov);
		echo form_submit('submit', 'Simpan');
		echo form_close();
	?>
</body>
</html>