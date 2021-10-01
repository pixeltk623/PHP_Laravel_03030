<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">

		* {
			box-sizing: border-box;
			padding: 0;
			margin: 0;
		}

		.container {
			padding: 2px;
		}
		.col {
			width: 25%;
			float: left;
		
		}
		.row::after {
			content: "";
			display: table;
			clear: both;
		}

		img {
			width: 100%;
			height: 280px;
			
			

		}
		figure {
			border: 1px solid black;
			margin: 4px;
		}
		figcaption {
			padding: 0px 10px 10px 0px;
			text-align:  center;
		}

		@media screen and (min-width: 320px) and (max-width: 480px){
			.col {
				width: 100%;
			}
		}

		@media screen and (min-width: 768px) and (max-width: 1024px){
			.col {
				width: 50%;
			}
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<figure>
					<img src="https://vinusimages.co/wp-content/uploads/2018/10/EG7A2390.jpgA_.jpg">
					<figcaption>Fig.1 - Trulli, Puglia, Italy.</figcaption>
				</figure>
			</div>
			<div class="col">
				<figure>
				<img src="https://www.gettyimages.com/gi-resources/images/500px/983794168.jpg">
				<figcaption>Fig.1 - Trulli, Puglia, Italy.</figcaption>
			</figure>
			</div>
			<div class="col">
				<figure>
				<img src="https://images.unsplash.com/photo-1524492412937-b28074a5d7da?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8aW5kaWF8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80">
				<figcaption>Fig.1 - Trulli, Puglia, Italy.</figcaption>
			</figure>
			</div>
			<div class="col">
				<figure>
				<img src="https://images.ctfassets.net/hrltx12pl8hq/3MbF54EhWUhsXunc5Keueb/60774fbbff86e6bf6776f1e17a8016b4/04-nature_721703848.jpg?fit=fill&w=480&h=270">
				<figcaption>Fig.1 - Trulli, Puglia, Italy.</figcaption>
			</figure>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<figure>
				<img src="https://images.unsplash.com/photo-1524492412937-b28074a5d7da?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8aW5kaWF8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80">
				<figcaption>Fig.1 - Trulli, Puglia, Italy.</figcaption>
			</figure>
			</div>
			<div class="col">
				<figure>
				<img src="https://images.ctfassets.net/hrltx12pl8hq/3MbF54EhWUhsXunc5Keueb/60774fbbff86e6bf6776f1e17a8016b4/04-nature_721703848.jpg?fit=fill&w=480&h=270">
				<figcaption>Fig.1 - Trulli, Puglia, Italy.</figcaption>
			</figure>
			</div>
			<div class="col">
				
				<figure>
				<img src="https://vinusimages.co/wp-content/uploads/2018/10/EG7A2390.jpgA_.jpg">
				<figcaption>Fig.1 - Trulli, Puglia, Italy.</figcaption>
			</figure>
			</div>
			<div class="col">
				
				<figure>
				<img src="https://www.gettyimages.com/gi-resources/images/500px/983794168.jpg">
				<figcaption>Fig.1 - Trulli, Puglia, Italy.</figcaption>
			</figure>
			</div>
		</div>
	</div>
</body>
</html>