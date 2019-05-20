<?php
include 'app/controllers/HomeControllers.php';
$app = new HomeControllers();
$uri = $_SERVER['REQUEST_URI'];
if($uri[-1] == '/'){
    $app->index();
}elseif($_GET['Q'] == 'response'){
    $app->response();
}elseif($_GET['Q'] == 'intimidation'){
    $app->intimidation();
}elseif($_GET['Q'] == 'detection'){
    $app->detection();
}elseif($_GET['Q'] == 'prevention'){
    $app->prevention();
}else{
    echo $uri;
    "<div>" .var_dump($_SERVER). "</div>";
}