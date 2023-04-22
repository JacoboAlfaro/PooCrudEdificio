<?php
require_once("../../conexion.php");

$id = $_GET['id'];

$db = $con->prepare("DELETE FROM porteros WHERE id=?");
if($db->execute([$id])){
    header("Location: principalPortero.php");
}else{
    header("Location: principalPortero.php");
    echo '<script language="javascript">alert("Error En Datos");</script>';
}
?>