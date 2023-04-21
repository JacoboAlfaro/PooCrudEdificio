<?php

include_once('loguinClass.php');
$user = $_POST['usr'];
$pass = $_POST['pss'];

//instanciar el objeto
$users = new DatabaseProcess();
// llamado función de loguin
$response = $users->login($user,$pass);
echo $response;
 if ($response==="verdadero"){
    header("Location: home.php"); 
 }else{
    echo '<script language="javascript">alert("Error En Datos");</script>';
 }

