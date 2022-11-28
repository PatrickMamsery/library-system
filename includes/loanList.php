<?php
	include_once "header.php";
	include_once "dbh.inc.php";
?>
<?php

	if (isset($_POST['loan-button'])){
		$sql = "SELECT * FROM loan";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);

		if($resultCheck > 0){
			while($row = mysqli_fetch_assoc($result)){
				echo $row['l_firstname']."<br>";
			}
		}
	}

	include_once "footer.php";
?>