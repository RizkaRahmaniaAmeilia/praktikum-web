<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Tugas Aritmatika</title>
</head>

<body>
<h1>Aritmatika</h1>
<form method="post">
<table>
	<tr>
		<td align="center"><b>Angka 1<b></td>
		<td><b>Operator</b></td>
		<td align="center"><b>Angka 2<b></td>
	</tr>
	<tr>
		<td><input type="number" name="angka1" value="<?php 
echo isset($_POST['angka1']) ? $_POST['angka1'] : '' ; ?>" required placeholder= "Masukkan Angka"/></td>
		<td align="center"><select name="operator">
		<option></option>
		<option value ="+"<?php if (isset($_POST['operator']) && $_POST['operator']=='+') {
				echo "selected";
			} ?>>+</option>
		<option value ="-"<?php if (isset($_POST['operator']) && $_POST['operator']=='-') {
				echo "selected";
			} ?>>-</option>
		<option value ="*"<?php if (isset($_POST['operator']) && $_POST['operator']=='*') {
				echo "selected";
			} ?>>*</option>
		<option value ="/"<?php if (isset($_POST['operator']) && $_POST['operator']=='/') {
				echo "selected";
			} ?>>/</option>
		</select></td>
		<td><input type="number" name="angka2" value="<?php
echo isset($_POST['angka1']) ? $_POST['angka2'] : '' ; ?>" required placeholder= "Masukkan Angka"/></td>
		<?php
			if(isset($_POST['angka1']) or isset($_POST['angka2']) ){
			$angka1 = $_POST['angka1'];
			$angka2 = $_POST['angka2'];
			}else{
			$angka1 = "0";
			$angka2 = "0";
			}
			if(isset($_POST['operator'])){
			$operator =$_POST['operator'];
			}else{
			$operator ="";
			}
			switch($operator){
			case "+":
				$hasil = $_POST["angka1"] + $_POST["angka2"];
			break;
			case "-":
				$hasil = $_POST["angka1"] - $_POST["angka2"];
			break;
			case "*":
				$hasil = $_POST["angka1"] * $_POST["angka2"];
			break;
			case "/":
				$hasil = $_POST["angka1"] / $_POST["angka2"];
			break;
			}
		?>
		
		<td><input type="submit" name="Aritmatika" value="Hitung"></td>
		<td><input type="text" name="hasil"  value="<?=$hasil;?>"></td>
	</tr>

</table>
</form>


</body>
</html>
