<?php
 require "vendor/autoload.php";

$app = new \Slim\Slim();

/*$app->get('/hello/:name',function($name){
           echo "Hello,$name";
});*/

$app->get('/',function() use ($app){
    $values = ['$wish'=>'Hello','$name'=>'Manasa'];
});
$app->$response->headers->set('Content-type':application/json;charset=utf-8');
$json_response=json_encode($values);
echo $json_response;

$app->run();
?>
