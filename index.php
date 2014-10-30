<?php
/**
 * Created by PhpStorm.
 * User: Jonathan
 * Date: 13/10/14
 * Time: 07:00 PM
 */
require("helpers.php");
require("./Template/Header.php");
require("./Template/Menu.php");
require("./Clases/Usuarios.php");
require("./.Htaccess");


if(empty($_GET["url"]))
    $_GET["url"] = "home";

controller($_GET["url"]);



require("Template/footer.php");

?>