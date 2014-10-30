<?php
/**
 * Created by PhpStorm.
 * User: Jonathan
 * Date: 13/10/14
 * Time: 07:50 PM
 */

$titulo = "Bienbenido al About";

$contenido = "----------------Contenido-.-";

$variable = array('titulo'=>$titulo, 'contenido'=>$contenido,);

view('about', $variable);
