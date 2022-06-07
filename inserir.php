<?php 
	include"conn.php";
	
	$title = $_POST['title'];
	$descricao = $_POST['descricao'];
	$image = $_FILES['image'];

	//echo "$title <br> $descricao";
 	
	move_uploaded_file($image['tmp_name'], 'uploads/'.$image['name']);

	$up_image = 'uploads/'.$image['name'];

	//Preperar

	$stmt = $connect->prepare("INSERT INTO post (title,descricao,image) VALUES (:title,:descricao,:image)");

	//Trocar

	$stmt->bindParam(':title',$title);
	$stmt->bindParam(':descricao',$descricao);
	$stmt->bindParam(':image',$up_image);


	//Executar

	$stmt->execute();

	header("location:index.php");
 ?>