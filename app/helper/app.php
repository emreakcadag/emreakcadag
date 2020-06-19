<?php
/**
 * Created by Emre
 * https://wwww.emreakcadag.com
 * Date: 14-Oct-18
 * Time: 10:29 PM
 */

function controller ($controllerName){

    $controllerName = strtolower($controllerName);
    return PATH. '/app/controller/' . $controllerName .'.php';
}

function view($viewName){

    return PATH. '/app/view/' . strtolower($viewName) . '.php';
}

function route($index){

    global $route;
    return isset($route[$index]) ? $route[$index] : false;
}