<?php 
//cadena de conexion
require_once('conexionOracle.php');


	$nit =$_POST['nit'];
	$sede =$_POST['sede'];
	$cod_sede =$_POST['cod_sede'];
	$nombre =$_POST['nombre'];
	$ciudad =$_POST['ciudad'];
	$telefono =$_POST['telefono'];
	$correo =$_POST['correo'];
	$foto = $_FILES['foto']['name'];
	$latitud =$_POST['latitud'];
	$longitud =$_POST['longitud'];



$numero_randomico = rand(1,10000);
$ruta = "fotos/".$numero_randomico.$foto;
$carga = @move_uploaded_file($_FILES['foto']['tmp_name'], $ruta);
 //base de datos
$con = new Conexion();
$insertar = $con->Conectar();

$sql =  "INSERT INTO IGLESIAS VALUES('$nit','$sede','$cod_sede','$nombre','$ciudad','$telefono','$correo', '$ruta', '$latitud', '$longitud' )";

$exe = $insertar->prepare($sql);
$exe->execute();
if($exe){
	echo "valores insertados";
} else{
	echo "psicologia";
}












?>


