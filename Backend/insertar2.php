<?php

$nTipoRegistro = $_GET['nTipoRegistro'];

require_once('ConexionOracle.php');

if ($nTipoRegistro = 1)
{
	$cedula =$_POST['cedula'];
	$cod_carnet=$_POST['cod_carnet']
	$nombres =$_POST['nombres'];
	$apellidos =$_POST['apellidos'];
	$telefono =$_POST['telefono'];
	$direccion =$_POST['direccion'];
	$correo =$_POST['correo'];
	$foto =$_POST['foto'];
	$latitud =$_POST['latitud'];
	$longitud =$_POST['longitud'];
}
else
{
	if ($nTipoRegistro = 2)
	{
		$nombre =$_POST['nombre'];
		$cedula_lider =$_POST['cedula_lider'];
		$nit =$_POST['nit'];
	}
}

/* echo $cedula;
echo $nombres; */

$con = new Conexion();
$insertar = $con->Conectar();

if ($nTipoRegistro = 1)
{
	$sql = "INSERT INTO PASTORES VALUES('$cedula','cod_carnet', '$nombres', '$apellidos', '$telefono', '$correo','foto','latitud','longitud')";
}
else
{
	if ($nTipoRegistro = 2)
	{
		$sql = "Insert Into MINISTERIOS Values('$nombre', '$cedula_lider', '$nit')";
	}
}

$exe = $insertar->prepare($sql);
$exe->execute();

if($exe){
	echo "Valores Insertados";
}
else
{
	echo "No fue posible insertar el registro";
}
?>