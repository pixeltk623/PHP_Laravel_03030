<header id="header" style="height: 60px;" class="sticky-top bg-white">
	<link href="css/style.css" rel="stylesheet">
	<br>
	<div class="container d-flex align-items-center">

		<h1 class="logo me-auto"><a href="dashboard.php">CePMS</a></h1>

		<nav id="navbar" class="navbar order-last order-lg-0">
		<ul>
			<li><a href="dashboard.php">Dashboard</a></li>
			<li><a href="add_category.php">Add Category</a></li>
			<li><a href="manage_category.php">Manage Category</a></li>
			<li><a href="add_pass.php">Add Pass</a></li>
			<li><a href="manage_pass.php">Manage Pass</a></li>
			<li><a href="search.php">Search</a></li>
			<li><a href="report.php">Report Of Pass</a></li>
			          
		</ul>  
			<i class="bi bi-list mobile-nav-toggle"></i>
		</nav>
		<div class="dropdown ml-5">
				<a class="btn dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
				Admin
				</a>

				<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					<li><a class="dropdown-item" href="profile.php">User Profile</a></li>
					<li><a class="dropdown-item" href="admin_pass.php">Setting</a></li>
					<hr>
					<li><a class="dropdown-item" href="logout.php">Logout</a></li>
				</ul>
			</div>
    </div>
</header>