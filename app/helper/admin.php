<?php
/**
 * Created by Emre
 * https://wwww.emreakcadag.com
 * Date: 14-Oct-18
 * Time: 10:29 PM
 */

function admin_controller ($controllerName){
    $controllerName = strtolower($controllerName);
    return PATH. '/admin/controller/' . $controllerName .'.php';
}

function admin_view($viewName){
    return PATH. '/admin/view/' . strtolower($viewName) . '.php';
}