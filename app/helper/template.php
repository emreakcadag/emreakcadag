<?php
/**
 * Created by Emre
 * https://wwww.emreakcadag.com
 * Date: 15-Oct-18
 * Time: 12:09 AM
 */

function site_url($url = false){

    return URL .'/'. $url;
}
function public_url($url = false){

    return URL .'/public/'. $url;
}