<?php
 require "vendor/autoload.php";

$app = new \Slim\Slim();

/*$app->get('/hello/:name',function($name){
           echo "Hello,$name";
});*/

$app->get('/',function() use ($app){
    $values = array('wish'=>'Hello','name'=>'Manasa');

//$app->response()->header("Content-type":"application/json");
//$json_response=json_encode($values);
//echo $json_response;
$app->response->headers->set('Content-Type','application-json');
$app->response->setBody(json_encode($values));
$app->response->finalize();
exit();
});
$app->run();
?>
