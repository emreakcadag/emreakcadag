<?php
/**
 * Created by Emre
 * https://wwww.emreakcadag.com
 * Date: 14-Oct-18
 * Time: 9:29 PM
 */
session_start();
ob_start();


// reporting on todo: gonna be closed.
error_reporting(0);
ini_set('display_errors', 0);

function loadClasses($className){
    require __DIR__ .'/classes/' . strtolower($className) . '.php';
}

spl_autoload_register('loadClasses');


$config = require __DIR__ . '/config.php';

foreach (glob(__DIR__. '/helper/*.php') as $helperFile){

    require $helperFile;
}