<?php

include_once('conexion.php');

class DatabaseProcess extends Conexion{

    private $user;
    private $pass;

    public function getAll(){
        try {
            # Conexión a MySQL
            // Instantiate database.
            $cnn = $this->conn();
            //Preparamos la consulta sql
              $respuesta = $cnn->prepare("select * from usuarios");
              //Ejecutamos la consulta
              $respuesta->execute();
              //Creamos un array donde almacenaremos la data obtenida
              $usuarios = [];
              //Recorremos la data obtenida
              foreach($respuesta as $res){
                  //Llenamos la data en el array
                  $usuarios[]=$res;
              }
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }
        return $usuarios;
    }

    public function login($user,$pass){
        try {
            $this->user=$user;
            $this->pass=$pass;
            # Conexión a MySQL
            // Instantiate database.
            $cnn = $this->conn();
            //Preparamos la consulta sql
            $stament = $cnn->prepare('SELECT * FROM usuarios WHERE username=:email AND pass=:hash_password'); 
            $stament->bindParam("email", $this->user,PDO::PARAM_STR) ;
            $stament->bindParam("hash_password", $this->pass,PDO::PARAM_STR) ;
            //Ejecutamos la consulta
            $stament->execute();
            $count=$stament->rowCount();
            $data=$stament->fetch(PDO::FETCH_OBJ);
            $mesage= "";
            if($count){
                $mesage = "verdadero";
                return $mesage;
            }
            else{
                $mesage = "falso";
                return $mesage;
            } 
        }
        catch(PDOException $e) {
        echo '{"err":{"text":'. $e->getMessage() .'}}';
        }
    }
}
