<?php
/**
 * Created by Emre
 * https://wwww.emreakcadag.com
 * Date: 14-Oct-18
 * Time: 10:25 PM
 */

switch ($sc) {
    case "linkedin":
        ?>
        <script>window.location.replace("https://www.linkedin.com/in/emreakcadag");</script><?php
        break;
    case "instagram":
        ?>
        <script>window.location.replace("https://www.instagram.com/mrakcadag");</script><?php
        break;
    case "github":
        ?>
        <script>window.location.replace("https://github.com/emreakcadag");</script><?php
        break;
    case "twitter":
        ?>
        <script>window.location.replace("https://twitter.com/gayfefincani");</script><?php
        break;
    case "googleplay":
        ?>
        <script>window.location.replace("https://play.google.com/store/apps/developer?id=Emre+Akçadağ");</script><?php
        break;
    case "appstore":
        ?>
        <script>window.location.replace("https://apps.apple.com/tr/developer/emre-akcadag/id1529257563?l=tr");</script><?php
        break;
    default:
        continue;
}

require_once view('index');

?>