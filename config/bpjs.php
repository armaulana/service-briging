<?php

return [
	'api' => [
		'endpoint'  => env('API_BPJS','https://dvlp.bpjs-kesehatan.go.id/vclaim-rest-1.1/'),
		'consid'  => env('CONS_ID','5908'),
		'seckey' => env('SECRET_KEY', '4kX6717514'),
	]
];