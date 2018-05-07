<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';
require 'rotas/db.php';

$app = new \Slim\App;

$db = new db;

$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");

    return $response;
});


function response($status_code , $response){

	$app = \Slim\Slim::getInstance();
	$app->status($status_code);
	$app->mime_content_type("application/json");
	echo json_encode($response);
	
}



$app->run();