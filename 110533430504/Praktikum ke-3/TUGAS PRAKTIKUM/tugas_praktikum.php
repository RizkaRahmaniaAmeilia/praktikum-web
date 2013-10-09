<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Tugas Praktikum</title>
</head>

<html>
<head>
	<title>FORM LOGIN</title>
</head>

<style type="text/css">

*{font-family: Times New Roman;
margin: auto;
padding:0;

}

#container{
	margin:  20px auto;
	width: 30%;
	height: auto;
	padding: 10px;
	border: 1px black
}

.textinput{
width: 100%;
height: 40px;
margin: 5px auto;
}

.button{
	width: 100%;
	padding:7px;
	background-color: #FF0000;
	border: none;
	color: #FFFFFF;
	font-weight: 900;

}

.btn:hover{
	cursor: pointer;

}

a{
	font-size: 20px;
	color: red;
}

.textinput{
	background-color: #FFFFFF; 
	border: inset 2px #000000;
}
</style>
<script>

function cekhuruf(huruf){
				cek = /^[A-Za-z]{1,}$/;
				return cek.test(huruf);
			}

function validateForm()
{
var username=document.forms["myForm"]["username"].value;
var pass=document.forms["myForm"]["pass"].value;

if ((username==null || username=="")||(pass==null|| pass==""))
  {
  alert("Username dan Password harus diisi!");
   document.getElementById("username").focus();
  return false;
  }
  
  if(cekhuruf(username)=== false ||cekhuruf(pass)===false)
  {
  	alert("Username dan password harus berupa huruf!");
  	 document.getElementById("username").focus();
  	return false;
  }


 
  return true;
}
</script>
<body>
<div id="container">
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="myForm" onSubmit="return validateForm()">
		<input type="text" name="username" class="textinput" id="username" />
		<input type="password" name="pass" class="textinput" id="pass"/>
		<input type="submit" name="submit" value="login" class="button"/>		
	</form>
</div>

<?php 
if (isset($_POST['submit'])) {
	if ((isset($_POST['username'])&&$_POST['username']=='rizka')&&(isset($_POST['pass'])&&$_POST['pass']=='rizka')) {
		echo "<center>Welcome, ". $_POST['username']."</center>";
	}
	else{
		echo "<script>alert('Username atau password salah')</script>";
	}
}
 ?>

</body>
</html>
