<html>
	<body>
		<script>window.alert('Sukses Mengupdate Data');</script>
	<?php 
		echo anchor('pegawai/update/'.$this->uri->segment(3), 'Update Data Lagi');
		echo "</br>";
		echo anchor('pegawai', 'Kembali Ke Awal');
	 ?>
	</body>
</html>
