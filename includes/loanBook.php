<?php
	include_once "pdo.php";
	include_once "dbh.inc.php";
	if(isset($_POST['submitLoan'])){
		$id_no = mysqli_real_escape_string($conn, $_POST['id_no']);
		$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
		$middlename = mysqli_real_escape_string($conn, $_POST['middlename']);
		$surname = mysqli_real_escape_string($conn, $_POST['surname']);
		$class = mysqli_real_escape_string($conn, $_POST['class']);
		$d_o_e = mysqli_real_escape_string($conn, $_POST['doe']);

		if(empty($id_no) || empty($firstname) || empty($middlename) || empty($surname) || empty($class) || empty($d_o_e)){
			header("Location: ../loan.php?loanentry=error");
			exit();
		} else {
			$sql = "select * from loan where l_id_no=? OR l_firstname=? OR l_middlename=? OR l_surname=?";
			$stmt = $pdo->prepare($sql);
			$stmt->execute([$id_no, $firstname, $middlename, $surname]);
			$data = $stmt->fetchAll();

			foreach($data as $dt){
				if($id_no == $dt->l_id_no){
					header("Location: ../loan.php?loan=idtaken");
					exit();
				} elseif($firstname == $dt->l_firstname && $middlename == $dt->l_middlename && $surname == $dt->l_surname){
					header("Location: ../loan.php?loan=nametaken");
					exit();
				}
			}
			 $sql = "insert into loan (l_id_no, l_firstname, l_middlename, l_surname, l_class, l_doe) values (?,?,?,?,?,?)";
			 $stmt = $pdo->prepare($sql);
			 $stmt->execute([$id_no, $firstname, $middlename, $surname, $class, $d_o_e]);
			 header("Location: ../index.php?loan=successful");
			 exit();
			}
	} else {
		header("Location: ../loan.php?loanentry=unsuccessful");
	}
?>