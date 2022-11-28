<?php
	include_once "includes/header.php";
	include_once "includes/pdo.php";
	include_once "includes/dbh.inc.php";
?>
<h1 class="text-center">Technology</h1>

<?php
	$sql = "select * from entries WHERE ent_category='Technology'";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	$books = $stmt->fetchAll();

	$sql = "select * from entries WHERE ent_category='Technology'";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0){
		while ($row = mysqli_fetch_assoc($result)){
			echo "<center>".$row['ent_title']."</center>";
		}
	}
?>

<?php
	include_once "includes/footer.php";
?>