<?php

/*
 * Index.
 */
require_once ('Database.php');
/*
$basePath = "projects/phptests/MyMVC/index.php/";

$path = trim(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH), "/");
//$path = preg_replace('/[^a-zA-Z0-9]//', "", $path);
if (strpos($path, $basePath) === 0) {
    $path = substr($path, strlen($basePath));
}

list($controller, $action, $params) = explode("/", $path, 3);
//var_dump($controller); die();

if (!isset($controller) OR !isset($action)) {
    $controller = 'pages';
    $action = 'home';
}
*/
if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action = $_GET['action'];
} else {
    $controller = 'pages';
    $action = 'home';
}

require_once 'views/layout.php';
