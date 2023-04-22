<?php
require_once("../../conexion.php");

$id = $_GET['id'];

$db = $con->prepare("DELETE FROM apartamentos WHERE id=?");
if($db->execute([$id])){
    header("Location: principalApto.php");
}else{
    header("Location: principalApto.php");
    echo '<script language="javascript">alert("Error En Datos");</script>';
}
?>