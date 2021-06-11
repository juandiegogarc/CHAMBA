<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['direccion']) >= 1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['detalle']) >= 1) {
	    $nombre = ($_POST['nombre']);
		$correo = ($_POST['correo']);
		$direccion = ($_POST['direccion']);
		$telefono = ($_POST['telefono']);
		$detalle = ($_POST['detalle']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO datos(nombre, correo, direccion, telefono, detalle, fecha_reg) VALUES ('$nombre','$correo','$direccion','$telefono','$detalle','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>