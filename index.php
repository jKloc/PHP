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


//autoload the appropriate class, all dependencies will be handle automatically
require_once 'vendor/autoload.php';
// new instance of Client
$Client = new GuzzleHttp\Client([
'headers' => ['User-Agent' => 'EmailReader']
]);

?>

</body>
</html>


