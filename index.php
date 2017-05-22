<?php 


function paises(){
	$ObjConexion = new Conexion(); 
	$SQL = $ObjConexion -> query("SELECT * FROM pais");

	while ($dato = $ObjConexion -> recorrer($SQL)) {
		$paisid = $dato['id'];
		$paisnombre = $dato['paisnombre'];
		echo '<option value="'.$paisid.'">'.$paisnombre.'</option>';
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<select name="pais" id="pais">
	<option value="" selected="yes" disabled="yes">Selecciona un pais</option>
	<?php paises(); ?>
</select>
<select name="estados" id="estados"></select>

<body>
</body>
<script type="text/javascript">
$('#pais').change(function(){
	var pais_id = $('#pais').val();
	var parametros = {"pais_id" : pais_id,};
	$.ajax({
	type : 'POST',
	url  : 'getEstados.php',
	data : parametros,
	success:function(response){
		$("#estados").html(response);
	}
	});
	return false;
});
</script>
</html>