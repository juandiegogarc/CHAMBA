<?php

$conectar=mysqli_connect('localhost','root','','chamba');


//recuperar variables del formulario

$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$usuario=$_POST['usuario'];
//$contraseña=$_POST['contraseña'];

//hacemos la sentencia de mysql

$sql="INSERT*INTO registros VALUES('nombre','correo','direccion','telefono','usuario','contraseña')";
//ejecutamos la sentencia de mysql
$ejecutar=mysql_query($sql);
//verificar la ejecucion
if(!$ejecutar){
    echo"Hubo algun error";
}else{

   echo"Datos guardados correctamente<br><a href='./../INDEX/CHAMBA.HTML'>INICIO</a>VOLVER</li>";

}

?>
