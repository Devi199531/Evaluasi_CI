<html>
<head>
<title>
Provinsi New
</title>
</head>
<body>
	<?php
		echo form_open('Provin/create');
		
		echo "<p>";
		echo "Kode Provinsi ";
		echo form_input('id_prov', '');
		echo "</p>";
		
		echo "<p>";
		echo "Nama Provinsi ";
		echo form_input('name', '');
		echo "</p>";
		
		echo form_submit('submit', 'Simpan');
		echo form_close();
	?>
</body>
</html>