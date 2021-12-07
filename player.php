<?php
class player
{
    $nombre;
    $dorsal;
    $edad;


    function __constructor (){
        $this->nombre='Nombre sin especificar'
        $this->edad='edad sin especificar'
        $this->dorsal='dorsal sin especificar'

    }

    function __constructor($_nombre,$_edad,$_dorsal){
        $this->nombre = $_nombre;
        $this->edad = $edad;
        $this->dorsal = $_dorsal;
    }

    function informacion(){
        return(echo'
        <br> 
        <p>Nombre: <p>' . $player->getNombre() . 
        '<br><p>Dorsal: ' . $player->getDorsal() . 
        '</p><br><p> Edad: ' . $player->getEdad() . '</p>
        <br>');
    }

    function mayor($_num){
        if ($num >18) {
            echo 'El jugador es menor de edad ';
        }else {
            echo'Es mayor de edad';
        }
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
}


?>


