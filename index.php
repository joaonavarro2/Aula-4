<!DOCTYPE html>
<html>
<head>
	<title>Uplouds de Imagens</title>
</head>
<body>
	<h1>Cadastrar Imagem</h1>
	<form action="inserir.php" method="POST" enctype="multipart/form-data">
		<div>
			<label>Titulo</label>
			<input type="text" name="title" required>
		</div>
			<div>
				<label>Descrição</label>
				<textarea name="descricao"></textarea>
			</div>
			<div>
				<label>Envie imagem</label> 
				<input type="file" name="image">
			</div>
			<div>
				<input type="submit" value="Cadastrar">
			</div>
	</form>
</body>
</html>