<?php
	$pdo = new PDO('mysql:host=127.0.0.1;dbname=library_system', 'root', 'p[90iopP');
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);