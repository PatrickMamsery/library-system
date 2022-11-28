<?php
	include_once "includes/header.php";
	include_once "includes/pdo.php";
	include_once "includes/dbh.inc.php";
?>

<div class="container">
	<h2 class="text-center">Search Results</h2>

	<?php
	    
		if (isset($_POST['submit-search'])){
			$search = mysqli_real_escape_string($conn, $_POST['search']);
	        $sql = "SELECT * FROM entries WHERE ent_title LIKE '%$search%' OR ent_category LIKE '%$search%' OR ent_author LIKE '%$search%'";
	        $result = mysqli_query($conn, $sql);
	        $queryResult = mysqli_num_rows($result);

	        echo "There are ".$queryResult." results found!";

	        if($queryResult > 0){
	        	while ($row = mysqli_fetch_assoc($result)){
	        		echo "<div>
	        			<h3>".$row['ent_title']."</h3>
	        			<p>".$row['ent_category']."</p>
	        			<p>".$row['ent_author']."</p>
	        		</div>";
	        	}
	        } else {
	        	echo "There are no results matching your search!";
	        }
		}
	?>

</div>

<?php
	include_once "includes/footer.php";
?>