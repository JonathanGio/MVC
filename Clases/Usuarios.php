<?php
/**
 * Created by PhpStorm.
 * User: Jonathan
 * Date: 16/10/14
 * Time: 08:04 PM
 */
class Usuario{
    private $name;

    public function getUsuario(){
    echo"Mostrar Usuario".$this->name;
}
    public function setUsuario(){
        $this->name = "Jonathan";
        return $this->name;
    }
    public function Consultageneral(){
        echo"<br>readUsuarioG";
        $sql01 = "SELECT * FROM usuario WHERE Estatus=1 ORDER BY ApellidoPaterno ASC";
        $result01 = mysql_query($sql01) or die ("Error $sql01") ;

        echo"<div class=table-responsive>";
        echo"<table class=\"table table-striped\">";
        echo"<tr><td colspan='5' align='center' class='alert-info'><strong>Lista de usuario</strong></td></tr>";
        echo"<tr align='center'><td>ID</td><td>NOMBRE</td><td>A PATERNO</td><td>A MATERNO</td><td>ESTATUS</td></tr>";
        while($field = mysql_fetch_array($result01)){
            $this->id = $field['Id'];
            $this->nombre = $field['Nombre'];
            $this->apellidoPaterno = $field['ApellidoPaterno'];
            $this->apellidoMaterno = $field['ApellidoPaterno'];
            $this->nivel = $field['Nivel'];
            switch($this->nivel){
                case 1:
                    $type ="Administrador";
                    break;
                case 2:
                    $type ="Maestro";
                    break;
                case 3;
                    $type ="Alumno";
                    break;
            }
            echo"<tr align='center'><td>$this->id</td><td>$this->nombre</td><td>$this->apellidoPaterno</td><td>$this->apellidoMaterno</td><td>$this->nivel</td></tr>";
        }
        echo"</table>";
        echo"</div>";
    }
}