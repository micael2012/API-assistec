<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


$app =  new \Slim\App;

//Listar todos os clientes

$app->get('/api/clientes', function(Request $request, Response $response){




	try {
		
	$consulta = 'SELECT * FROM usuario';
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


$app->get('/api/cadcliente', function(Request $request, Response $response){

	$nome  = $request->getParam('nome');
	$senha = $request->getParam('senha');
	$token = $request->getParam('token');


$consulta = 'INSERT INTO usuario (nome,senha,token) VALUES(:nome, :senha, :token)';

	try {
		
	

		$db = new db();

		$db = $db->conectar();
		$stmt = $db->prepare($consulta);
		$stmt->bindParam(':nome', $nome);
		$stmt->bindParam(':senha', $senha);
		$stmt->bindParam(':token', $token);
		$stmt->execute();

		echo '{"notice": {"text": "Cliente Cadastrado"}}'



		echo json_encode($clientes);



	} catch (PDOException $e) {
		echo '{"error": {"text": '.$e->getMessage().'}';

	}

});