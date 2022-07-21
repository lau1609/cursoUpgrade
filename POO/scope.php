<?php

class Usuario {

//Datos protected solo pueden ser accedidos desde la misma clase y clases herredadas
//Datos private: solo se podran usar en la misma clase en la que se creen

    public $nombre;
    protected $correo;

    function __construct($nombre, $correo){
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public function mostrarInfo(){
        return $this->correo; 
    }
}

class Miembro extends Usuario {
    public function mostrarCorreo(){
        return "Este es el correo: " . $this->correo;
    }
}

$carlos = new Miembro ('Laura', 'm16laural000@gmail.com');
echo $carlos->mostrarCorreo();

?>