<?php
/**
 * Created by Emre
 * https://wwww.emreakcadag.com
 * Date: 14-Oct-18
 * Time: 9:34 PM
 */

define('PATH', realpath('.'));
define('SUBFOLDER_NAME', dirname($_SERVER['SCRIPT_NAME']));
define('URL', 'https://' . $_SERVER['SERVER_NAME'] . ((SUBFOLDER_NAME == '\\' || SUBFOLDER_NAME == '/') ? '' : SUBFOLDER_NAME));


return[
    'db' => [
        'name' => 'cms',
        'host' => 'localhost',
        'user' => 'root',
        'pass' => ''
    ]
];