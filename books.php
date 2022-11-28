<?php
	include_once "includes/pdo.php";
	include_once "includes/header.php";
	include_once "includes/dbh.inc.php";

?>
<h1 class="text-center">Books Available</h1>
<?php
	/*if(isset($_POST['books'])){
		$books = $_POST['books'];

		$sql = "select * from entries";
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$books = $stmt->fetchAll();

		foreach($books as $book){
			echo $book->ent_title;
		}
	}*/

	
		$sql = "select * from entries";
		$data = mysqli_query($conn, $sql);

		$result = mysqli_num_rows($data);

		/*if($result > 0){
			while($row = mysqli_fetch_assoc($data)){
				echo "id: ".$row['id']."<br>";
				echo "Title: ".$row['ent_title']."<br>";
				echo "Category: ".$row['ent_category']."<br>";
				echo "Index_no: ".$row['ent_index_no']."<br>";
				echo "Author: ".$row['ent_author']."<br>";
				echo "Date Of Entry: ".$row['d_o_e']."<br>";
				echo "Blurb: ".$row['blurb']."<br>";
			}
		}*/

		?>

	<div class="container">
		<table class="table table-hover table-striped mt-4">
		<tr>
			<th>Id</th>
			<th>Title</th>
			<th>Category</th>
			<th>Index_no</th>
			<th>Author</th>
			<th>Date of Entry</th>
			<th>Blurb</th>
		</t>

		<?php
		if($result > 0){
			while($row = mysqli_fetch_assoc($data)){
				echo "<tr>
				<td>".$row['id']."</td>
				<td>".$row['ent_title']."</td>
				<td>".$row['ent_category']."</td>
				<td>".$row['ent_index_no']."</td>
				<td>".$row['ent_author']."</td>
				<td>".$row['d_o_e']."</td>
				<td>".$row['blurb']."</td></tr>";
			}
		}
		?>
		</table>
	</div>
<?php
	include_once "includes/footer.php";
?>