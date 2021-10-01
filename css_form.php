<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table {
			margin: auto;
		}

		table tr td {
			padding: 15px;
		}

		input[type=text] {
			width: 100%;
			height: 32px;
   			padding: 2px;
		}
		textarea {
			width: 100%;
			height: 100px;
   			padding: 2px;
		}

		button {
			background-color: #FF4D54;
			color: white;
			border: none;
			padding: 20px 45px;
			font-size: 15px;
		}
	</style>
</head>
<body>

	<table  width="50%" style="border-collapse: collapse;">
		<tr>
			<td>
				<input type="text" name="" placeholder="NAME">
			</td>
			<td>
				<input type="text" name="" placeholder="COMPANY">
			</td>
		</tr>
		<tr>
			<td>
				<input type="text" name="" placeholder="TELEPHONE">
			</td>
			<td>
				<input type="text" name="" placeholder="EMAIL">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<textarea placeholder="LEAVE A MESSAGE"></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<button>SEND</button>
			</td>
		</tr>
	</table>
</body>
</html>