<?php
class player
{
    private $nombre = 'Nombre sin especificar';
    private $dorsal = 0;
    private $edad = 0;

    function __construct(){
    }
    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of dorsal
     */ 
    public function getDorsal()
    {
        return $this->dorsal;
    }

    /**
     * Set the value of dorsal
     *
     * @return  self
     */ 
    public function setDorsal($dorsal)
    {
        $this->dorsal = $dorsal;

        return $this;
    }

    /**
     * Get the value of edad
     */ 
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set the value of edad
     *
     * @return  self
     */ 
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    public function informacion(){
        echo '<br> <p>Nombre: ' . self::getNombre() . '</p><p>Dorsal: ' . self::getDorsal() .  '</p><p> Edad: ' . self::getEdad() . '</p><br>';
        
    }
    //Gracias a self::function()    
    //Puedes llamar a una funcion dentro de la misma clase, de otra manera da error

    public function mayor($_num){
        if ($_num >18) {
            echo 'El jugador es menor de edad ';
        }else {
            echo'Es mayor de edad';
        }
    }
}


?>


