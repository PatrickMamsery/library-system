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

<h1 class="text-center mt-4">Entries</h1>
<div class="container">
	<form class="form-group" action="includes/enterBook.php" method="POST">
		<label>Title</label>
		<input type="text" name="title" class="form-control" required>
		<label>Category</label>
		<select class="form-control" name="category" required>
			<option>Generalities</option>
			<option>Philosophy $ Other Disciplines</option>
			<option>Religion</option>
			<option>Social Sciences</option>
			<option>Languages</option>
			<option>Pure Sciences</option>
			<option>Technology</option>
			<option>Arts</option>
			<option>Literature</option>
			<option>Geography $ History</option>
			<option>Novels</option>
			<option>Reserve</option>
		</select>
		<label>Index number</label>
		<input type="number" name="index_no" class="form-control" required>
		<label>Author</label>
		<input type="text" name="author" class="form-control" required>
		<label>Date of Entry</label>
		<input type="date" name="doe" class="form-control" required>
		<label>Blurb of Book</label>
		<textarea class="form-control" name="blurb"></textarea>
		<center><button class="btn btn-md btn-success mt-2" role="button" type="submit" name="enter">ENTER</button></center>
	</form>
</div>

<?php


	$url_notaken = '/Library%20System/entries.php?entry=index_notaken';
	$url_titletaken = '/Library%20System/entries.php?entry=titletaken';

	if($_SERVER['REQUEST_URI'] == $url_notaken){
		     echo '<div class="alert alert-danger alert-dismissible fade show" style="position: fixed; top:80%; right:2%;" role="alert">The index number has been taken<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
	}elseif($_SERVER['REQUEST_URI'] == $url_titletaken){
		echo '<div class="alert alert-danger alert-dismissible fade show" style="position: fixed; top:80%; right:2%;" role="alert">The title has been taken<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
	}
	include_once "includes/footer.php";
?>