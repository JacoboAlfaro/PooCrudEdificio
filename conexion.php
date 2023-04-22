<?php


define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "edificio");


Class Conexion {

    private $host      = DB_HOST;
    private $user      = DB_USER;
    private $pass      = DB_PASS;
    private $dbname    = DB_NAME;


    public function conn(){

        try{
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->dbname;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $pdo = new PDO($connection, $this->user, $this->pass, $options);

            if ($pdo) {
                return $pdo;
        
            }
        }catch(PDOException $e){
            return "Ocurrió algo con la base de datos: " . $e->getMessage();
        }
    }


}
$db = new Conexion();
$con = $db->conn();
?>