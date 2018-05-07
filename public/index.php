<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';
require 'db.php';

$app = new \Slim\App;
	
$db = new db;

$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");

    return $response;
});

require "clientes.php";


function response($status_code , $response){

	$app = \Slim\Slim::getInstance();
	$app->status($status_code);
	$app->mime_content_type("application/json");
	echo json_encode($response);
	
}



$app->run();