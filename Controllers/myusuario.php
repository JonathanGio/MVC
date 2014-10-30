<?php
/**
 * Created by PhpStorm.
 * User: Jonathan
 * Date: 16/10/14
 * Time: 08:06 PM
 */
$usuario = new Usuario();

$titulo = "Bienbenido al MyUsuarioHome";

$contenido = "Contenido De La Variable-.-";



$variable = array('titulo'=>$titulo, 'contenido'=>$contenido, 'nombre'=>$usuario->setUsuario());

view('myusuario', $variable);


?>