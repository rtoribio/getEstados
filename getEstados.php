<?php 
include 'config.php';
include 'conexion.php';
if(isset($_POST['pais_id'])) {
	$ObjConexion = new Conexion();
	$pais_id = $_POST['pais_id']; 
	$SQL = $ObjConexion -> query("SELECT * FROM estado WHERE ubicacionpaisid='$pais_id'");
	while ($dato = $ObjConexion -> recorrer($SQL)) {
		$estadoid = $dato['id'];
		$estadonombre = $dato['estadonombre'];
		echo '<option value="'.$estadoid.'">'.$estadonombre.'</option>';
	}
}





 ?>