<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">

		* {
			box-sizing: border-box;
		}
		.container {
			background-color: #f2f2f2;
			padding: 20px;
		}
		.col1 {
			width: 30%;
			float: left;
		}

		.col2 {
			width: 70%;
			float: left;
		}

		.row::after {
			content: "";
			display: table;
			clear: both;
		}

		label {
			display: inline-block;
    		margin-top: 15px;
		}

		input[type=text],select {
			width: 100%;
			padding: 10px;
			margin: 8px;
			border: 1px solid lightgrey;
			border-radius: 5px;
		}

		textarea {
			width: 100%;
			height: 150px;
			padding: 10px;
			margin: 8px;
			border: 1px solid lightgrey;
			border-radius: 5px;
		}
		button {
			float: right;
			background-color: lightgreen;
		    color: white;
		    border: none;
		    padding: 17px 57px;
		    border-radius: 9px;
		    font-size: 21px;

		}

		button:hover {
			background-color: green;
		}

		@media screen and (min-width: 320px) and (max-width: 480px){
    		
    		.container {
    			padding: 10px;
    		}

    		.col1 {
    			width: 100%;
    		}
    		.col2 {
    			width: 100%;
    		}

    		input[type=text],select {
    			margin: 0;
    			margin-top: 10px;
    		}

    		textarea {
    			margin: 0;
    			margin-top: 10px;
    		}

    		button {
    			width: 100%;
    			margin-top: 10px;
    		}
		}
	</style>
</head>
<body>

	<h1>Responsive Form</h1>
	<p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other.</p>

	<div class="container">
		<div class="row">
			<div class="col1">
				<label>First Name</label>
			</div>
			<div class="col2">
				<input type="text" name="" placeholder="Your Name..">
			</div>
		</div>
		<div class="row">
			<div class="col1">
				<label>Last Name</label>
			</div>
			<div class="col2">
				<input type="text" name="" placeholder="Last Name..">
			</div>
		</div>
		<div class="row">
			<div class="col1">
				<label>Country</label>
			</div>
			<div class="col2">
				<select>
					<option>India</option>
					<option>Pakistan</option>
					<option>Nepal</option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col1">
				<label>Subject</label>
			</div>
			<div class="col2">
				<textarea placeholder="Write Something.."></textarea>
			</div>
		</div>
		<div class="row">
			<button>Submit</button>
		</div>
	</div>

</body>
</html>