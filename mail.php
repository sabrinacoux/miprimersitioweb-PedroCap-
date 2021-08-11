<?php
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$email = $_GET['email'];
$pepe = $_GET['comentarios'];

$val1 = 1;
$val2 = 5;
$suma = $val1 + $val2;

$mensaje = "
Este es un mensaje de prueba <br/>
<strong>Nombre : </strong> $nombre <br/>
<strong>Apellido : </strong> $apellido <br/>
<strong>Email : </strong> $email <br/>
<strong>Altura : </strong> $altura <br/>
<strong>País : </strong> $pais <br/>
<strong>Comentario : </strong> $pepe <br/>
<p>El resultado de la suma es : </p> $suma
";
echo $mensaje;
?>
