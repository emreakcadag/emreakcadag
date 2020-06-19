<?php
/**
 * Created by Emre
 * https://wwww.emreakcadag.com
 * Date: 14-Oct-18
 * Time: 10:52 PM
 */

 require view("404");
 exit;

if (!route(1)){
    $route[1] = 'index';
}

if (!file_exists(admin_controller(route(1)))){
    $route[1] = 'index';
}

require admin_controller(route(1));
