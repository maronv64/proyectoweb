<?php 
	include('../Configuracion/conexion.php');
	include('../Datos/Docente.php');

    $idDocente=$_POST['idDocente'];
    $Nombre=$_POST['nombre'];
    $Direccion=$_POST['direccion'];
    $Telefono=$_POST['telefono'];
    $Titulo=$_POST['titulo'];
    $Sexo=$_POST['sexo'];
    $TipoContrato=$_POST['descripcion']; 

    $doc=new Docente($conn);
    $id_ = $doc->update($idDocente,$Nombre,$Direccion,$Telefono,$Titulo,$Sexo,$TipoContrato);

    //echo json_decode(array('id'=> $id_));
    echo json_decode(array('codig'=>$id_));

 ?>