<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


$app =  new \Slim\App;

//Listar todos os clientes

$app->get('/api/	clientes', function(Request $request, Response $response){

	$consulta = 'SELECT * FROM usuario';

	try {
		$db = new db();
		$db = $db->conectar();
		$executar = $db->query($consulta);
		$clientes = $executar->fetchAll(PDO::FETCH_OBJ);
		$db = null;
		echo json_encode($clientes);



	} catch (PDOException $e) {
		echo '{"error": {"text": '.$e->getMessage().'}';
		
	}

});