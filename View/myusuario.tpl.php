<?php
/**
 * Created by PhpStorm.
 * User: Jonathan
 * Date: 16/10/14
 * Time: 08:11 PM
 */
require("./bd/bd.php");
$usuario02 = new Usuario();
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<br>
<br>
<br>
<br>

    <h1><?=$titulo   ?></h1>
    <p><?=$contenido   ?> </p>
    <p><?=$nombre   ?></p>

<p>
    <?php
    echo"<div class='container'>";
    $usuario02->setUsuario();
    $usuario02->getUsuario();
    echo"<br>";
    $usuario02->Consultageneral();
    echo"<div>";
    ?>
</p>

</body>
</html>