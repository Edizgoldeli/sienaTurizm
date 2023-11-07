<?php
function classes($class)
{
    $adress = "/wamp64/www/sienaTurizm/Class/" . $class . ".class.php";
    
    require_once($adress);
}
spl_autoload_register("classes");