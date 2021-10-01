<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		* {
			padding: 0px;
			margin: 0px;
			box-sizing: border-box;
		}
		header {
			text-align: center;
			background-color: lightgrey;
			padding: 20px;
			font-size: 20px;
		}
		ul {
			list-style-type: none;
			padding: 0;
			margin: 0;
			overflow: hidden;
			background-color: black;
		}

		ul li {
			float: left;
		}

		ul li a {
			color: white;
			text-decoration: none;
			display: inline-block;
			/*padding: 15px 20px;*/
			padding: 20px 10px 20px 20px;
			font-size: 20px;
		}

		ul li a:hover {
			background-color: grey;
		}

		.active {
			background-color: grey;
		}

		.right {
			float: right;
		}

		.col-1 {
			width: 20%;
			float: left;
		}
		.col-2 {
			width: 60%;
			float: left;
		}
		.col-3 {
			width: 20%;
			float: left;
		}

		.row::after {
			content: "";
			display: table;
			clear: both;
		}

		.card-1 {
			width: 100%;
    		height: 435px;
    		background-color: lightslategrey;
		}
		.card-2 {
			width: 100%;
    		height: 435px;
    		background-color: grey;
		}
		.card-3 {
			width: 100%;
    		height: 435px;
    		background-color: brown;
		}
		footer {
			background-color: black;
			color: white;
			text-align: center;
		}

		footer h2 {
			font-size: 35px;
		}

		@media screen and (min-width: 320px) and (max-width: 480px){	
    		/*body {
    			background-color: red;
    		}*/

    		ul li {
    			float: none;
    			text-align: center;
    		}

    		.right {
				float: none;
			}

			.col-1 {
				width: 100%;
			}

			.col-2 {
				width: 100%;
			}

			.col-3 {
				width: 100%;
			}
		}
	</style>
</head>
<body>
<!-- 	<header></header>
	<div></div>
	<nav></nav>
	<footer></footer>
	<aside></aside> 
	<main</main>
	-->

	<header>
		<h1>Tops Tech Vadodara</h1>
		
	</header>
	<nav>
		<ul>
			<li class="active"><a href="index.php">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="service.php">Service</a></li>
			<li><a href="blog.php">Blog</a></li>
			<li class="right"><a href="contact.php">Contact</a></li>
		</ul>
	</nav>
	<main>
		<div class="row">
			<div class="col-1">
				<div class="card-1"></div>
			</div>
			<div class="col-2">
				<div class="card-2"></div>
			</div>
			<div class="col-3">
				<div class="card-3"></div>
			</div>
		</div>
	</main>

	<footer>
		<h2>Footer</h2>
	</footer>
</body>
</html>