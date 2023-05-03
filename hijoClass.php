<?php
class Habitante extends Persona{

    private $bloque;
    private $numApto;
    private $telefono;

    public function agregarHabitante($identificacion, $nombre, $apellido, $bloque, $numApto, $telefono){
        $this->identificacion = $identificacion;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->bloque = $bloque;
        $this->numApto = $numApto;
        $this->telefono = $telefono;
    }
}

?>