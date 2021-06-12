<?php

$conex = mysqli_connect("localhost","root","","ejemplo");


$cuenta=$_POST['cuenta'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['cuenta']=$cuenta;

$conexion=mysqli_connect("localhost","root","","ejemplo");

$consulta="SELECT*FROM datoss where cuenta='$cuenta' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_rows($resultado);
if($filas){
    header("location:home.php");
}else{
    ?>
    <?php
    include("./INICIO SESION.HTML");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);

