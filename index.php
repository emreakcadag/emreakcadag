<?php
/**
 * Created by Emre
 * https://wwww.emreakcadag.com
 * Date: 14-Oct-18
 * Time: 9:27 PM
 */

require __DIR__ . '/app/init.php';

$routeExplode = explode('?', $_SERVER['REQUEST_URI']);
$route = array_values(array_filter(explode('/', $routeExplode[0])));

if (SUBFOLDER_NAME == '\\' || SUBFOLDER_NAME == '/'){
}else{
    array_shift($route);
}

$socials = ["linkedin", "instagram", "github", "twitter", "googleplay"];

$sc = "";

$route_0 = route(0);

if(in_array($route_0, $socials)){
    $sc = route(0);
}

if (!$route_0 || $sc != ""){
    $route[0] = 'index';
}

if (!file_exists(controller(route(0)))){
    $route[0] = '404';
}

require controller(route(0));