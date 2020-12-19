<?php 
//cadena de conexion
require_once('conexionOracle.php');


	$cedula =$_POST['cedula'];
	$cod_carnet =$_POST['cod_carnet'];
	$nombres =$_POST['nombres'];
	$apellidos =$_POST['apellidos'];
	$telefono =$_POST['telefono'];
	$direccion =$_POST['direccion'];
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

$sql =  "INSERT INTO PASTORES VALUES('$cedula','$cod_carnet','$nombres','$apellidos','$telefono', '$direccion', '$correo', '$ruta', '$latitud', '$longitud' )";

$exe = $insertar->prepare($sql);
$exe->execute();
if($exe){
	echo "valores insertados";
} else{
	echo "psicologia";
}












?>


