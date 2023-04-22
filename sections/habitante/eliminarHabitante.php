<?php
require_once("../../conexion.php");

$id = $_GET['id'];

$db = $con->prepare("DELETE FROM habitantes WHERE id=?");
if($db->execute([$id])){
    header("Location: principalHabitante.php");
}else{
    header("Location: principalHabitante.php");
    echo '<script language="javascript">alert("Error En Datos");</script>';
}
?>