<?php
require_once("oscarrestkezelo.php");
$view = "";
if (isset($_GET["view"]))
    $view=$_GET["view"];
switch($view)
{
    case "all":
        $Oscarrest=new Oscarrestkezelo();
        $Oscarrest->getAllOscars();
        break;
    case "single":
        $Oscarrest=new Oscarrestkezelo();
        $Oscarrest->getOscarsById($_GET["id"]);
        break;
    case "tipus":
        $Oscarrest=new Oscarrestkezelo();
        $Oscarrest->getOscarsByType($_GET["tid"]);
        break;
    default:
        $Oscarrest=new Oscarrestkezelo();
        $Oscarrest->getFault();
        break;
}
