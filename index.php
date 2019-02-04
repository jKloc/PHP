<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Emaile list</title>
</head>
<body bgcolor = "gray">
    <size="6" color="black">
    <strong><p>list:</p></strong>

<?php


//Initialize curl handler
$ch = curl_init();

//apply options to curl
curl_setopt_array($ch, array(
    CURLOPT_URL => 'https://eie.jippioo.no/api/brokers', //URL to get data
    CURLOPT_RETURNTRANSFER => true //Return data from url instead of return connection state
));

//execute request and get response + decode json response to object
$response = json_decode(curl_exec($ch));

//Get brokers information from response
$brokers = $response->data->brokers;

//Loop for each broker object and echo broker email
foreach ($brokers as $broker){
    echo $broker->email . "<br><br>";
}

?>

</body>
</html>


