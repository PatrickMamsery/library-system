<?php
	include_once "pdo.php";
	include_once "dbh.inc.php";
	if(isset($_POST['enter'])){
		$title = mysqli_real_escape_string($conn, $_POST['title']);
		$category = mysqli_real_escape_string($conn, $_POST['category']);
		$index_no = mysqli_real_escape_string($conn, $_POST['index_no']);
		$author = mysqli_real_escape_string($conn, $_POST['author']);
		$doe = mysqli_real_escape_string($conn, $_POST['doe']);
		$blurb = mysqli_real_escape_string($conn, $_POST['blurb']);

		if(empty($title) || empty($category) || empty($index_no) || empty($author) || empty($doe)){
			header("Location: ../entries.php?entry=error");
			exit();
		} else {
			$sql = "select * from entries where ent_title=? OR ent_index_no=?";
			$stmt = $pdo->prepare($sql);
			$stmt->execute([$title, $index_no]);
			$data = $stmt->fetchAll();

			foreach($data as $dt){
				if($title == $dt->ent_title){
					header("Location: ../entries.php?entry=titletaken");
					exit();
				} elseif($index_no == $dt->ent_index_no){
					header("Location: ../entries.php?entry=index_notaken");
					exit();
				}
			}
			 $sql = "insert into entries (ent_title, ent_category, ent_index_no, ent_author, d_o_e, blurb) values (?,?,?,?,?,?)";
			 $stmt = $pdo->prepare($sql);
			 $stmt->execute([$title, $category, $index_no, $author, $doe, $blurb]);
			 header("Location: ../index.php?entry=successful");
			 exit();
			}
	} else {
		header("Location: ../entries.php?entry=unsuccessful");
	}
?>