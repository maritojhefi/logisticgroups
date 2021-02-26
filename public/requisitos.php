<?php
include_once 'conexion.php';
$subpartida=$_GET["subpartida"];
$objeto = new Conexion();
$conexion = $objeto->Conectar();
$consulta = "SELECT requisitos.* FROM requisitossubpartidas
join requisitos on requisitos.idrequisitos=requisitossubpartidas.idrequisitos
 where idsubpartidas='$subpartida';";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
print json_encode($data,JSON_UNESCAPED_UNICODE);
$conexion=null;

?>