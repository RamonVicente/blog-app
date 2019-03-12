<?php

/**
 * Here is all application's routes
 */

 use BlogApp\Controller\PostController;

$route = new \Slim\Slim ();
$postController = new PostController();

$route->get ( 'home', function ($id = null) use  ($postController){
    echo json_encode($postController->get($id));
});