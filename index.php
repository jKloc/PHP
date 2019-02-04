<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Emails list</title>
</head>
<body>
	<strong><h1>list of clients email adresses:</h1></strong>
<?php

	//autoload the appropriate class, all dependencies will be handle automatically
	require_once 'vendor/autoload.php';		
	// new instance of Client
	$Client = new GuzzleHttp\Client([		
		'headers' => ['User-Agent' => 'EmailReader']
	]);

	//get body from web-site with try catch block for catch exceptions
    $response = $Client->request('GET', 'https://eie.jippioo.no/api/brokers');

	//create an object
	$response = json_decode($response->getBody()->getContents());
    
	$brokers = $response->data->brokers;
	
	//Loop for each broker object and echo broker name with email adress
	foreach ($brokers as $broker){
	    echo $broker->email . "<br><br>";
	}

?>

</body>
</html>