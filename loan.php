<?php
	include_once "includes/header.php";
	include_once "includes/pdo.php";
	include_once "includes/dbh.inc.php";
?>

<div class="container">
		<form class="form-inline"  method="POST" action="search.php" style="padding-top: 17px;" novalidate>
            <div class="form-group mx-sm-10 mb-2 col-lg-11">
              <input style ="width:100%" type="text" class="form-control" id="st" name="search" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-primary mb-2" name="submit-search">Search</button>
        </form>
</div>

<h1 class="text-center mt-4">Loaning Corner</h1>

<div class="container">
	<form class="form-group" action="includes/loanBook.php" method="POST">
		<label>ID No.</label>
		<input type="number" class="form-control" name="id_no" required>
		<label>First name</label>
		<input type="text" class="form-control" name="firstname" required>
		<label>Middle name</label>
		<input type="text" class="form-control" name="middlename" required>
		<label>Surname</label>
		<input type="text" class="form-control" name="surname" required>
		<label>Class</label>
		<input type="number" class="form-control" name="class" required>
		<label>Date of Entry</label>
		<input type="date" class="form-control" name="doe" required>
		<center><button class="btn btn-md btn-success mt-2" role="button" type="submit" name="submitLoan">LOAN</button></center>
	</form>
</div>

<?php

	$url_notaken = '/Library%20System/loan.php?loan=idtaken';
	$url_nametaken = '/Library%20System/loan.php?loan=nametaken';

	if($_SERVER['REQUEST_URI'] == $url_notaken){
		     echo '<div class="alert alert-danger alert-dismissible fade show" style="position: fixed; top:80%; right:40%;" role="alert">The ID Number has a user!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>';
	}elseif($_SERVER['REQUEST_URI'] == $url_nametaken){
		echo '<div class="alert alert-danger alert-dismissible fade show" style="position: fixed; top:80%; right:2%;" role="alert">The user has another book loaned<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>';
	}

	include_once "includes/footer.php";
?>