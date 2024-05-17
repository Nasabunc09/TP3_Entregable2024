<?php

include_once 'Pasajero.php';
class PasajeroEspecial extends Pasajero{


public $servicioSillaRuedas;

public $servicioAsistencia;

public $servicioComida;

public function __construct ($nombre,$apellido,$documento,$telefono,$numeroAsciento,$numeroTicket,$servicioSillaRuedas,$servicioAsistencia,$servicioComida){
    
    parent::__construct($nombre,$apellido,$documento,$telefono,$numeroAsciento,$numeroTicket);

    $this->servicioSillaRuedas = $servicioSillaRuedas;

    $this->servicioAsistencia = $servicioAsistencia;

    $this->servicioComida = $servicioComida;
    
          
  
}

public function getServicioSillaRuedas(){
    return $this->servicioSillaRuedas;
}

public function setServicioSillaRuedas($servicioSillaRuedas){

    $this->servicioSillaRuedas = $servicioSillaRuedas;
}

public function getServicioAsistencia(){
    return $this->servicioAsistencia;
}

public function setServicioAsistencia($servicioAsistencia){

    $this->servicioAsistencia = $servicioAsistencia;
}

public function getServicioComida(){
    return $this->servicioComida;
}

public function setServicioComida($servicioComida){

    $this->servicioComida = $servicioComida;
}

public function __toString(){

    $cadena = parent::__toString();
    $cadena.= "\n Servicio Silla de Ruedas: ".$this->getServicioSillaRuedas()."\n Servicio Asistencia: ".$this->getServicioAsistencia()."\n Servicio Comida: ".$this->getServicioComida();
    return $cadena;
}

public function darPorcentajeIncremento(){
     
    if ($this->getServicioSillaRuedas() and $this->getServicioSillaRuedas() and $this->getServicioSillaRuedas()){

        $porcentaje = 30;

    }else{

        $porcentaje = 15;
    }

    return $porcentaje;

}

}