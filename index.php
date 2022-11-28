<?php
	include_once "includes/header.php";
	include_once "includes/dbh.inc.php";
?>

<h1 class="text-center">Library System</h1>
	<div class="container">
		<form class="form-inline"  method="POST" action="search.php" novalidate>
            <div class="form-group mx-sm-10 mb-2 col-lg-11">
              <input style ="width:100%" type="text" class="form-control" id="st" name="search" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-primary mb-2" name="submit-search">Search</button>
          </form>
	</div>

	<aside>
		<div class="container">
			<form class="form-group" method="POST" action="">
			<button type="submit" class="btn btn-primary mt-2" role="button" name="loan-button">Loan list</button>
			</form>
		</div>
	</aside>


<?php

	if (isset($_POST['loan-button'])){

		echo "<div class='container'>
		<table class='table table-hover table-striped mt-4'>
		<tr>
			<th>Id</th>
			<th>Id number</th>
			<th>Firstname</th>
			<th>Middlename</th>
			<th>Surname</th>
			<th>Class</th>
			<th>Date of Entry</th>
		</tr>";
		
		$sql = "SELECT * FROM loan";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);

		if($resultCheck > 0){
			while($row = mysqli_fetch_assoc($result)){
				echo "<tr>
				<td>".$row['id']."</td>
				<td>".$row['l_id_no']."</td>
				<td>".$row['l_firstname']."</td>
				<td>".$row['l_middlename']."</td>
				<td>".$row['l_surname']."</td>
				<td>".$row['l_class']."</td>
				<td>".$row['l_doe']."</td>
				<td><div class='alert'>
			  <span class='closebtn' onclick='this.parentElement.style.display='none';''>&times;</span> 
			  Loaned
			</div></td></tr>";
			}
		}
	}
?>
</div>
<?php
	include_once "includes/footer.php";
?>

