<?php

include_once 'Pasajero.php';
class PasajeroVIP extends Pasajero{

    public $numeroViajero;
    public $cantidadMillas;

    public function __construct ($nombre,$apellido,$documento,$telefono,$numeroAsciento,$numeroTicket,$numeroViajero,$cantidadMillas){

        parent::__construct($nombre,$apellido,$documento,$telefono,$numeroAsciento,$numeroTicket);

        $this->numeroViajero = $numeroViajero;
        $this->cantidadMillas = $cantidadMillas;
              
      
    }

    public function getNumeroViajero(){

        return $this->numeroViajero;       
    }
    
    public function setNumeroViajero($numeroViajero){

         $this->numeroViajero = $numeroViajero;
    }

    public function getCantidadMillas(){

        return $this->cantidadMillas;       
    }
    
    public function setCantidadMillas($cantidadMillas){

         $this->cantidadMillas = $cantidadMillas;
    }

    public function __toString(){
          
        $cadena = parent::__toString();
        $cadena.= "\n Numero Viajero: ".$this->getNumeroViajero()."\n Cantidad Millas: ".$this->getCantidadMillas();
        return $cadena;
    }

    public function darPorcentajeIncremento(){
     
        if ($this->getCantidadMillas() > 300){

            $porcentaje = 30;

        }else{

            $porcentaje = 35;
        }

        return $porcentaje;

    }

}