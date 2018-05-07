<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


$app =  new \Slim\App;

//Listar todos os clientes

$app->get('/api/clientes', function(Request $request, Response $response){

	$sql = 'SELECT * FROM usuario';


	
	$result = $PDO->query( $sql );
	$rows = $result->fetchAll();

	print_r( $rows );




	

});