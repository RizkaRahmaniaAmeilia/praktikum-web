<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Studi Kasus 2</title>
</head>

<body>

<html>
<head>
	<title>Penanganan Check Box dengan Preselecting</title>
</head>
<body>
	<h1>Daftar Hari</h1>
	<div id='daftar'>Daftar Hari </div>
	<em>Pilih hari:</em>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
		<input type="checkbox" name="hari[]" value="Senin" 
		<?php if (isset($_POST['hari'])) {

			foreach ($_POST['hari'] as $key => $value) {
				if ($value=='Senin') {
					echo "checked";
				}
		}
			
		} ?>
		>Senin<br>
		
		<input type="checkbox" name="hari[]" value="Selasa" 
		<?php if (isset($_POST['hari'])) {

			foreach ($_POST['hari'] as $key => $value) {
				if ($value=='Selasa') {
					echo "checked";
				}
		}
			
		} ?>
		>Selasa<br>
		
		<input type="checkbox" name="hari[]" value="Rabu"
		<?php if (isset($_POST['hari'])) {

			foreach ($_POST['hari'] as $key => $value) {
				if ($value=='Rabu') {
					echo "checked";
				}
		}
			
		} ?>
		>Rabu<br>
		
		<input type="checkbox" name="hari[]" value="Kamis"
		<?php if (isset($_POST['hari'])) {

			foreach ($_POST['hari'] as $key => $value) {
				if ($value=='Kamis') {
					echo "checked";
				}
		}
			
		} ?>
		>Kamis<br>
		
		<input type="checkbox" name="hari[]" value="Jumat"
		<?php if (isset($_POST['hari'])) {

			foreach ($_POST['hari'] as $key => $value) {
				if ($value=='Jumat') {
					echo "checked";
				}
		}
			
		} ?>
		>Jumat<br>
		
		<input type="checkbox" name="hari[]" value="Sabtu"
		<?php if (isset($_POST['hari'])) {

			foreach ($_POST['hari'] as $key => $value) {
				if ($value=='Sabtu') {
					echo "checked";
				}
		}
			
		} ?>
		>Sabtu<br>
		
		<input type="checkbox" name="hari[]" value="Minggu"
		<?php if (isset($_POST['hari'])) {

			foreach ($_POST['hari'] as $key => $value) {
				if ($value=='Minggu') {
					echo "checked";
				}
		}
			
		} ?>
		>Minggu<br>
		<input type="submit" value="OK">
	</form>
	<?php 
	if (isset($_POST['hari'])) {
		echo "<div id='pilihan'>Anda memilih hari: </div><br/>";
		echo "<ul>";
		foreach ($_POST['hari'] as $key => $value) {
			echo "
			<li>".$value."</li>
			";
		}

		echo "</ul>";
	}
	 ?>

</body>
</html>
