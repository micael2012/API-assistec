<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


$app =  new \Slim\App;

//Listar todos os clientes

$app->get('/api/clientes', function(Request $request, Response $response){

echo "teste ok com class ckientes";



	} catch (PDOException $e) {
		echo '{"error": {"text": '.$e->getMessage().'}';

	}

});