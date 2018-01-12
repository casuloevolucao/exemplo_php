<?php

$conn = new PDO("mysql:host=localhost;dbname=php7", "root", "");  

/*$sql = $conn->prepare("SELECT * FROM post WHERE id_categoria = ?");

$sql->execute(array($_GET['id_categoria']));

$info = $sql->fetchALL();

foreach ($info as $key => $value) {
	echo "Titulo: ".$value["titulo"];
	echo "<br>";
	echo "Conteudo: ".$value["conteudo"];
	echo "<hr>";
}

for ($i=0; $i <count($info) ; $i++) { 
	echo "Titulo: ".$info[$i]["titulo"];
	echo "<br>";
	echo "Conteudo: ".$info[$i]["conteudo"];
	echo "<hr>";
}*/
/*	$sql = $conn->prepare("SELECT * FROM categoria");

	$sql->execute();
	$info = $sql->fetchALL();

	foreach ($info as $key => $value) {
		$id_categoria = $value["id"];
		echo "Post ". $value["nome"];
		echo "<br>";
		$sql = $conn->prepare("SELECT * FROM post WHERE id_categoria = id_categoria");
		$sql->execute();
		$inforPost = $sql->fetchALL();

		foreach ($inforPost as $key => $value) {
		echo "Titulo: ".$value["titulo"];
		echo "<br>";
		echo "Conteudo: ".$value["conteudo"];
		echo "<hr>";
		}
	}
*/	
	$sql = $conn ->prepare("SELECT post.*, categoria.*, post. id AS id_post FROM post INNER JOIN categoria ON post. id_categoria = categoria. id");
	$sql->execute();
	$info = $sql->fetchALL(PDO::FETCH_ASSOC);

	echo "<prev>";
	print_r($info);
	echo "</prev>";

	/*banco de dados com o nome php7 estara disponivel na pasta*/
?>