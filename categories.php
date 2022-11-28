<?php
	include_once "includes/header.php";
?>
	
	<div class="container">
		<form class="form-inline"  method="POST" action="search.php" style="padding-top: 17px;" novalidate>
            <div class="form-group mx-sm-10 mb-2 col-lg-11">
              <input style ="width:100%" type="text" class="form-control" id="st" name="search" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-primary mb-2" name="submit-search">Search</button>
          </form>
	</div>

	<div class="p-5 container">
		<h2 class="mt-3 mb-3">Categories</h2>
			<div class="row mt-4">
				<div class="col-xl-3 mt-4 col-lg-4 col-sm-6">
					<a href="cat-generalities.php">
					<center>
						<span style="margin-left: auto; margin-right: auto;"><img src="img/atom.jpg" style="border-radius: 10px;"></span><center>Generalities</center></a>
					</center>
				</div>
				<div class="col-xl-3 mt-4 col-lg-4 col-sm-6">
					<a href="cat-philo.php">
					<center>
						<span style="margin-left: auto; margin-right: auto;"><img src="img/atom.jpg" style="border-radius: 10px;"></span><center>Philosophy</center></a>
					</center>
				</div>
				<div class="col-xl-3 mt-4 col-lg-4 col-sm-6">
					<a href="cat-religion.php">
					<center>
						<span style="margin-left: auto; margin-right: auto;"><img src="img/atom.jpg" style="border-radius: 10px;"></span><center>Religion</center></a>
					</center>
				</div>
				<div class="col-xl-3 mt-4 col-lg-4 col-sm-6">
					<a href="cat-social.php">
					<center>
						<span style="margin-left: auto; margin-right: auto;"><img src="img/atom.jpg" style="border-radius: 10px;"></span><center>Social Sciences</center></a>
					</center>
				</div>
				<div class="col-xl-3 mt-4 col-lg-4 col-sm-6">
					<a href="cat-lang.php">
					<center>
						<span style="margin-left: auto; margin-right: auto;"><img src="img/atom.jpg" style="border-radius: 10px;"></span><center>Languages</center></a>
					</center>
				</div>
				<div class="col-xl-3 mt-4 col-lg-4 col-sm-6">
					<a href="cat-puresc.php">
					<center>
						<span style="margin-left: auto; margin-right: auto;"><img src="img/atom.jpg" style="border-radius: 10px;"></span><center>Pure Sciences</center></a>
					</center>
				</div>
				<div class="col-xl-3 mt-4 col-lg-4 col-sm-6">
					<a href="cat-tech.php">
					<center>
						<span style="margin-left: auto; margin-right: auto;"><img src="img/atom.jpg" style="border-radius: 10px;"></span><center>Technology</center></a>
					</center>
				</div>
				<div class="col-xl-3 mt-4 col-lg-4 col-sm-6">
					<a href="cat-arts.php">
					<center>
						<span style="margin-left: auto; margin-right: auto;"><img src="img/atom.jpg" style="border-radius: 10px;"></span><center>The Arts</center></a>
					</center>
				</div>
				<div class="col-xl-3 mt-4 col-lg-4 col-sm-6">
					<a href="cat-lit.php">
					<center>
						<span style="margin-left: auto; margin-right: auto;"><img src="img/atom.jpg" style="border-radius: 10px;"></span><center>Literature</center></a>
					</center>
				</div>
				<div class="col-xl-3 mt-4 col-lg-4 col-sm-6">
					<a href="cat-geohist.php">
					<center>
						<span style="margin-left: auto; margin-right: auto;"><img src="img/atom.jpg" style="border-radius: 10px;"></span><center>Geo & Hist</center></a>
					</center>
				</div>
				<div class="col-xl-3 mt-4 col-lg-4 col-sm-6">
					<a href="cat-novels.php">
					<center>
						<span style="margin-left: auto; margin-right: auto;"><img src="img/atom.jpg" style="border-radius: 10px;"></span><center>Novels</center></a>
					</center>
				</div>
				<div class="col-xl-3 mt-4 col-lg-4 col-sm-6">
					<a href="cat-reserve.php">
					<center>
						<span style="margin-left: auto; margin-right: auto;"><img src="img/atom.jpg" style="border-radius: 10px;"></span><center>Reservation</center></a>
					</center>
				</div>
			</div>
	</div>
<?php
	include_once "includes/footer.php";
?>