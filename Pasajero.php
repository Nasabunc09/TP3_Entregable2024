<?php



class Pasajero{

    public $nombre;
    public $apellido;
    public $documento;
    public $telefono;
    public $numeroAsciento;
    public $numeroTicket;
    
    

    /*constructor
   
	*/
    public function __construct ($nombre,$apellido,$documento,$telefono,$numeroAsciento,$numeroTicket){

        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->documento = $documento;
        $this->telefono = $telefono;
        $this->numeroAsciento = $numeroAsciento;
        $this->numeroTicket = $numeroTicket;
        
      
    }
    

    // getter y setter
    public function getNombre(){

        return $this->nombre;       
    }
    
    public function setNombre($nombre){

         $this->nombre = $nombre;
    }

    public function getApellido(){

        return $this->apellido;
    }

    public function setApellido($apellido){

         $this->apellido = $apellido;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    public function setTelefono($telefono){
        $this->telefono=$telefono;
    }
    
    public function getDocumento(){

        return $this->documento;
    }

    public function setDocumento($documento){

         $this->documento = $documento;
    }

    public function getNumeroAsciento(){

        return $this->numeroAsciento;
    }

    public function setNumeroAsiento($numeroAsciento){

         $this->numeroAsciento = $numeroAsciento;
    }

    public function getNumeroTicket(){
        return $this->numeroTicket;
        
    }

    public function setNumeroTicket($numeroTicket){

        $this->numeroTicket = $numeroTicket;
    }

    
    
    public function __toString(){
        return "\n Nombre: ".$this->getNombre()."\n Numero Asiento: ".$this->getNumeroAsciento()."\n Numero Ticket: ".$this->getNumeroTicket();
    }

    public function darPorcentajeIncremento(){
     
        $porcentaje = 10;
    
        return $porcentaje;

    }
   
   
}



