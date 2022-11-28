<!DOCTYPE html>
<html>
<head>
	<title>Library System</title>
	
</head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap');

		body{
			background: ;
		}
		nav a {
			font-family: 'Ubuntu', sans-serif;
			font-size: 18px;
			padding: 0;
			margin: 0;
		}
	</style>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
		<a href="index.php" class="navbar-brand" style="font-size: 30px;">Library System</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a href="index.php" class="nav-link">Home</a>
				</li>
				<li class="nav-item dropdown">
					<a href="categories.php" class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">Categories</a>
					<div class="dropdown-menu">
						<a href="cat-generalities.php" class="dropdown-item">Generalities</a>
						<a href="cat-philo.php" class="dropdown-item">Philosophy & Other Disciplines</a>
						<a href="cat-religion.php" class="dropdown-item">Religion</a>
						<a href="cat-social.php" class="dropdown-item">Social Sciences</a>
						<a href="cat-lang.php" class="dropdown-item">Languages</a>
						<a href="cat-puresc.php" class="dropdown-item">Pure Sciences</a>
						<a href="cat-tech.php" class="dropdown-item">Technology</a>
						<a href="cat-arts.php" class="dropdown-item">The Arts</a>
						<a href="cat-lit.php" class="dropdown-item">Literature</a>
						<a href="cat-geohist.php" class="dropdown-item">Geography & History</a>
					</div>
				</li>
				<li class="nav-item">
					<a href="entries.php" class="nav-link">Entries</a>
				</li>
				<li class="nav-item">
					<form action="books.php" action="POST"><a href="books.php" name="books" class="nav-link">Books</a></form>
				</li>
				<li class="nav-item">
					<a href="loan.php" class="nav-link">Loan</a>
				</li>
				<li class="nav-item">
					<a href="about.php" class="nav-link">About</a>
				</li>
			</ul>			
		</div>
	</nav>