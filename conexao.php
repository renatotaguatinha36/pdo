<?php 

try {

	$conexao = new PDO("mysql:dbname=pdo;host=localhost", "root", "");
	$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	
} catch (Exception $e) {
	echo "Erro ao conectar com o Banco de Dados! ".$e;
}



 ?>