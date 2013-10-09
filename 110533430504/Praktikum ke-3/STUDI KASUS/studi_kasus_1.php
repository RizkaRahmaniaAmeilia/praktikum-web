<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Studi Kasus 1</title>
</head>

<body>

<html>
<head>
	<title>Penanganan Seleksi dengan Menambahkan Preselecting</title>
</head>
<body>
	<h2>States of the United State of America</h2>
	<strong>State:</strong><br>
	<em>Silakan pilih salah satu negara bagian:</em>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
		<select name="state">
			<option value="Alabama" 
			<?php if (isset($_POST['state']) && $_POST['state']=='Alabama') {
				echo "selected";
			} ?>
			>Alabama</option>
			
			<option value="Alaska" <?php if (isset($_POST['state'])&&$_POST['state']=='Alaska') {
				echo "selected";
			} ?>>Alaska</option>
			
			<option value="Arizona" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='Arizona') {
				echo "selected";
			} ?>
			>Arizona</option>
			
			<option value="Arkansas" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='Arkansas') {
				echo "selected";
			} ?>
			>Arkansas</option>
			
			<option value="California" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='California') {
				echo "selected";
			} ?>
			>California</option>
			
			<option value="Colorado" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='Colorado') {
				echo "selected";
			} ?>
			>Colorado</option>
			
			<option value="Connecticut" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='Connecticut') {
				echo "selected";
			} ?>
			>Connecticut</option>
			
			<option value="Delaware" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='Delaware') {
				echo "selected";
			} ?>
			>Delaware</option>
			
			<option value="Florida" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='Florida') {
				echo "selected";
			} ?>
			>Florida</option>
			
			<option value="Georgia" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='Georgia') {
				echo "selected";
			} ?>
			>Georgia</option>
			
			<option value="Hawai" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='Hawai') {
				echo "selected";
			} ?>
			>Hawai</option>
			
			<option value="Idaho" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='Idaho') {
				echo "selected";
			} ?>
			>Idaho</option>
			
			<option value="Illinois" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='Illinois') {
				echo "selected";
			} ?>
			>Illinois</option>
			
			<option value="Indiana" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='Indiana') {
				echo "selected";
			} ?>
			>Indiana</option>
			
			<option value="Iowa" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='Iowa') {
				echo "selected";
			} ?>
			>Iowa</option>
			
			<option value="Kansas" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='Kansas') {
				echo "selected";
			} ?>
			>Kansas</option>
			
			<option value="Kentucky" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='Kentucky') {
				echo "selected";
			} ?>
			>Kentucky</option>
			
			<option value="Louisiana" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='Louisiana') {
				echo "selected";
			} ?>
			>Louisiana</option>
			
			<option value="Maine" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='Maine') {
				echo "selected";
			} ?>
			>Maine</option>
			
			<option value="Maryland" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='Maryland') {
				echo "selected";
			} ?>
			>Maryland</option>
			
			<option value="Massachusetts" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='Massachusetts') {
				echo "selected";
			} ?>
			>Massachusetts</option>
			
			<option value="Michigan" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='Michigan') {
				echo "selected";
			} ?>
			>Michigan</option>
			
			<option value="Minnesota" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='Minnesota') {
				echo "selected";
			} ?>
			>Minnesota</option>
			
			<option value="Minnesota" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='Minnesota') {
				echo "selected";
			} ?>
			>Minnesota</option>
			
			<option value="Missouri" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='Missouri') {
				echo "selected";
			} ?>
			>Missouri</option>
			
			<option value="Montana" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='Montana') {
				echo "selected";
			} ?>
			>Montana</option>
			
			<option value="Nebraska" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='Nebraska') {
				echo "selected";
			} ?>
			>Nebraska</option>
			
			<option value="Nevada" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='Nevada') {
				echo "selected";
			} ?>
			>Nevada</option>
			
			<option value="New Hampshire" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='New Hampshire') {
				echo "selected";
			} ?>
			>New Hampshire</option>
			
			<option value="New Jersey" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='New Jersey') {
				echo "selected";
			} ?>
			>New Jersey</option>
			
			<option value="New Mexico" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='New Mexico') {
				echo "selected";
			} ?>
			>New Mexico</option>
			
			<option value="New York" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='New York') {
				echo "selected";
			} ?>
			>New York</option>
			
			<option value="North Carolina" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='North Carolina') {
				echo "selected";
			} ?>
			>North Carolina</option>
			
			<option value="North Dakota" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='North Dakota') {
				echo "selected";
			} ?>
			>North Dakota</option>
			
			<option value="Ohio" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='Ohio') {
				echo "selected";
			} ?>
			>Ohio</option>
			
			<option value="Oklahoma" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='Oklahoma') {
				echo "selected";
			} ?>
			>Oklahoma</option>
			
			<option value="Oregon" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='Oregon') {
				echo "selected";
			} ?>
			>Oregon</option>
			
			<option value="Pennsylvania" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='Pennsylvania') {
				echo "selected";
			} ?>
			>Pennsylvania</option>
			
			<option value="Rhode Island" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='Rhode Island') {
				echo "selected";
			} ?>
			>Rhode Island</option>
			
			<option value="South Carolina" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='South Carolina') {
				echo "selected";
			} ?>
			>South Carolina</option>
			
			<option value="South Dakota" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='South Dakota') {
				echo "selected";
			} ?>
			>South Dakota</option>
			
			<option value="Tennessee" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='Tennessee') {
				echo "selected";
			} ?>
			>Tennessee</option>
			
			<option value="Texas" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='Texas') {
				echo "selected";
			} ?>
			>Texas</option>
			
			<option value="Utah" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='Utah') {
				echo "selected";
			} ?>
			>Utah</option>
			
			<option value="Vermont" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='Vermont') {
				echo "selected";
			} ?>
			>Vermont</option>
			
			<option value="Virginia" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='Virginia') {
				echo "selected";
			} ?>
			>Virginia</option>
			
			<option value="Washington" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='Washington') {
				echo "selected";
			} ?>
			>Washington</option>
			
			<option value="West Virginia" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='West Virginia') {
				echo "selected";
			} ?>
			>West Virginia</option>
			
			<option value="Wisconsin" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='Wisconsin') {
				echo "selected";
			} ?>
			>Wisconsin</option>
			
			<option value="Wyoming" 
			<?php if (isset($_POST['state'])&&$_POST['state']=='Wyoming') {
				echo "selected";
			} ?>
			>Wyoming</option>
			
		</select>
		<br>
		<input type="submit" value="OK">
	</form>
	<?php 
	if (isset($_POST['state'])) {
		switch ($_POST['state']) {
			case 'Alabama':
				echo "<div id='bagian'>Alabama</div>";
				break;
			case 'Alaska':
				echo "<div id='bagian'>Alaska</div>";
				break;
			case 'Arizona':
				echo "<div id='bagian'>Arizona</div>";
				break;
			case 'Arkansas':
				echo "<div id='bagian'>Arkansas</div>";
				break;
			case 'California':
				echo "<div id='bagian'>California</div>";
				break;
			case 'Colorado':
				echo "<div id='bagian'>Colorado</div>";
				break;	
			case 'Connecticut':
				echo "<div id='bagian'>Connecticut</div>";
				break;
			case 'Delaware':
				echo "<div id='bagian'>Delaware</div>";
				break;
			case 'Florida':
				echo "<div id='bagian'>Florida</div>";
				break;
			case 'Georgia':
				echo "<div id='bagian'>Georgia</div>";
				break;
			case 'Hawai':
				echo "<div id='bagian'>Hawai</div>";
				break;
			case 'Idaho':
				echo "<div id='bagian'>Idaho</div>";
				break;
			case 'Illinois':
				echo "<div id='bagian'>Illinois</div>";
				break;
			case 'Indiana':
				echo "<div id='bagian'>Indiana</div>";
				break;
			case 'Iowa':
				echo "<div id='bagian'>Iowa</div>";
				break;
			case 'Kansas':
				echo "<div id='bagian'>Kansas</div>";
				break;
			case 'Kentucky':
				echo "<div id='bagian'>Kentucky</div>";
				break;
			case 'Louisiana':
				echo "<div id='bagian'>Louisiana</div>";
				break;
			case 'Maine':
				echo "<div id='bagian'>Maine</div>";
				break;
			case 'Maryland':
				echo "<div id='bagian'>Maryland</div>";
				break;
			case 'Massachusetts':
				echo "<div id='bagian'>Massachusetts</div>";
				break;
			case 'Michigan':
				echo "<div id='bagian'>Michigan</div>";
				break;
			case 'Minnesota':
				echo "<div id='bagian'>Minnesota</div>";
				break;
			case 'Mississippi':
				echo "<div id='bagian'>Mississippi</div>";
				break;
			case 'Missouri':
				echo "<div id='bagian'>Missouri</div>";
				break;
			case 'Montana':
				echo "<div id='bagian'>Montana</div>";
				break;
			case 'Nebraska':
				echo "<div id='bagian'>Nebraska</div>";
				break;
			case 'Nevada':
				echo "<div id='bagian'>Nevada</div>";
				break;
			case 'New Hampshire':
				echo "<div id='bagian'>New Hampshire</div>";
				break;
			case 'New Jersey':
				echo "<div id='bagian'>New Jersey</div>";
				break;
			case 'New Mexico':
				echo "<div id='bagian'>New Mexico</div>";
				break;
			case 'New York':
				echo "<div id='bagian'>New York</div>";
				break;
			case 'North Carolina':
				echo "<div id='bagian'>North Carolina</div>";
				break;
			case 'North Dakota':
				echo "<div id='bagian'>North Dakota</div>";
				break;
			case 'Ohio':
				echo "<div id='bagian'>Ohio</div>";
				break;
			case 'Oklahoma':
				echo "<div id='bagian'>Oklahoma</div>";
				break;
			case 'Oregon':
				echo "<div id='bagian'>Oregon</div>";
				break;
			case 'Pennsylvania':
				echo "<div id='bagian'>Pennsylvania</div>";
				break;
			case 'Rhode Island':
				echo "<div id='bagian'>Rhode Island</div>";
				break;
			case 'South Carolina':
				echo "<div id='bagian'>South Carolina</div>";
				break;
			case 'South Dakota':
				echo "<div id='bagian'>South Dakota</div>";
				break;
			case 'Tennessee':
				echo "<div id='bagian'>Tennessee</div>";
				break;
			case 'Texas':
				echo "<div id='bagian'>Texas</div>";
				break;
			case 'Utah':
				echo "<div id='bagian'>Utah</div>";
				break;
			case 'Vermont':
				echo "<div id='bagian'>Vermont</div>";
				break;
			case 'Virginia':
				echo "<div id='bagian'>Virginia</div>";
				break;
			case 'Washington':
				echo "<div id='bagian'>Washington</div>";
				break;
			case 'West Virginia':
				echo "<div id='bagian'>West Virginia</div>";
				break;
			case 'Wisconsin':
				echo "<div id='bagian'>Wisconsin</div>";
				break;
			case 'Wyoming':
				echo "<div id='bagian'>Wyoming</div>";
				break;
			default:
				# code...
				break;
		}
	}
	 ?>

</body>
</html>