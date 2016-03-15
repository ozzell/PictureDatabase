<?php

/* 
 * Routes.
 */

function call($controller, $action) {
    require_once 'controllers/' . $controller . 'Controller.php';
    
    switch ($controller) {
        case 'pages':
            $controller = new PagesController();
            break;
        case 'posts':
            require_once 'models/Post.php';
            $controller = new PostsController();
            break;
        case 'uploads':
            require_once 'models/File.php';
            $controller = new UploadsController();
    }
    
    $controller->{$action}();
}

$controllers = array(
    'pages' => ['home', 'error', 'handlePictureUpload'],
    'posts' => ['index', 'show'],
    'uploads' => ['handleUpload'],
);

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('pages', 'error');
    }
} else {
    call('pages', 'error');
}
