<?php

require_once __DIR__.'/vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client([
	'base_uri' => 'https://reqres.in',
	'timeout' => 5,
]);

$response = $client->request('GET', '/api/users',[
	'query' => [
		'page' => '2'
	]
]);

$body = $response->getBody();
$body_array = json_decode($body);
print_r($body_array);

?>