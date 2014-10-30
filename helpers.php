<?php
/**
 * Created by PhpStorm.
 * User: Jonathan
 * Date: 13/10/14
 * Time: 07:00 PM
 */

function view($plantilla, $variables = array()){
    extract($variables);
    require('View/'.$plantilla.'.tpl.php');

}
function controller($nombre){
    if(empty($nombre))
        $nombre = 'home';

    $archivo ="Controllers/$nombre.php";

    if(file_exists($archivo))
    {
        require ($archivo);
    }
        else
        {
            echo "Error archivo no encontrado";
        }
}
?>