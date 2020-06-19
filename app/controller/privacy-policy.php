<?php
/**
 * Created by Emre
 * https://wwww.emreakcadag.com
 * Date: 15-Feb-19
 * Time: 10:25 PM
 */

switch (route(1)) {
    case "slf-messenger":
    require_once view('policies/slf-messenger');
        break;
    case "hadisaha":
    require_once view('policies/hadisaha');
        break;
    default:
    require_once controller('404');
}
