<?php 

// $a = 15;
// $b = 6;
// $c = 8;

// if ($a>=$b && $a>=$c) {
	
// 	echo $a;
// } elseif ($b>=$a && $b>=$c) {
	
// 	echo $b;
// } else {
// 	echo $c;
// }

// $today = date("l");

// //echo $today;

// switch ($today) {
// 	case 'Sunday':
// 		echo $today;
// 		break;
// 	case 'Monday':
// 		echo $today;
// 		break;
// 	case 'Tuesday':
// 		echo $today;
// 		break;
// 	case 'Wednesday':
// 		echo $today;
// 		break;
// 	case 'Thursday':
// 		echo $today;
// 		break;
// 	case 'Friday':
// 		echo $today;
// 		break;
// 	case 'Saturday':
// 		echo $today;
// 		break;
	
// 	default:
// 		echo "Error";
// 		break;
// }

if (isset($_POST['submit'])) {
	
	$fnum = $_POST['fnum'];
	$snum = $_POST['snum'];
	$op = $_POST['op'];

	switch ($op) {
		case '+':
			$result =  $fnum + $snum;
			break;
		
		case '-':
			$result =  $fnum - $snum;
			break;
		
		case '*':
			$result =  $fnum * $snum;
			break;
		
		case '/':
			$result =  $fnum / $snum;
			break;
		
		default:
			$result = "Error";
			break;
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="elseif.php">
		<label>First Number</label>
		<input type="text" name="fnum">
		<br><br>
		<label>Second Number</label>
		<input type="text" name="snum">
		<br><br>
		<label>Operations</label>
		<select name="op">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
		</select>
		<br><br>
		<input type="submit" name="submit">
	</form>

	<?php 
		if (isset($result)) {
			?>
			<h1 style="color: red; text-align: center;"><?php echo $result; ?></h1>
			<?php
		}
	?>
</body>
</html>