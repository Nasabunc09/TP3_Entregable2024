<?php


class Viaje {

    private $codigo;
    private $destino;
    private $maximaPasajeros;
    private $arrayPasajeros;
    private $objResponsable;
    private $costoViaje;
    private $costoAbonados;

    

    /*constructor
   
	* */
    public function __constructor ($codigo,$destino,$maximaPasajeros,$arrayPasajeros,$objResponsable,$costoViaje,$costoAbonados){

        $this->codigo = $codigo;
        $this->destino = $destino;
        $this->maximaPasajeros = $maximaPasajeros;
        $this->arrayPasajeros = $arrayPasajeros;
        $this->objResponsable = $objResponsable;
        $this->costoViaje = $costoViaje;
        $this->costoAbonados = $costoAbonados;
       
    }
    

    // getter y setter
    public function getCodigo(){

        return $this->codigo;       
    }
    
    public function setCodigo($codigo){

         $this->codigo = $codigo;
    }

    public function getDestino(){

        return $this->destino;
    }

    public function setDestino($destino){

       $this->destino = $destino;
    }
    
    public function getMaximaPasajeros(){

        return $this->maximaPasajeros;
    }

    public function setMaximaPasajeros($maximaPasajeros){

         $this->maximaPasajeros = $maximaPasajeros;
    }

    public function getPasajeros(){
        return $this->arrayPasajeros;
    }

    public function setPasajeros($arrayPasajeros){

         $this->arrayPasajeros = $arrayPasajeros;
    }

    public function getObjResponsable(){
        return $this->objResponsable;
    }

    public function setObjResponsable($objResponsable){

        $this->objResponsable = $objResponsable;
    }

    public function getCostoViaje(){

        return $this->costoViaje;
    }

    public function setCostoViaje($costoViaje){
        $this->$costoViaje = $costoViaje;
    }

    public function getCostoAbonados(){

        return $this->costoAbonados;
    }

    public function setCostoAbonados($costoAbonados){
        $this->$costoAbonados = $costoAbonados;
    }
   
    
    public function __toString(){
        
       return "Código: ".$this->getCodigo()."\n".
              "Destino: ".$this->getDestino()."\n".
              "Cantidad Máxima Pasajeros: ".$this->getMaximaPasajeros()."\n".
              "Pasajeros del Viaje: " .$this->mostrarPasajeros(). "\n".
              "Responsable : ".$this->getObjResponsable()."\n".
              "Costo Viaje: ".$this->getCostoViaje()."\n".
              "Costo Abonados: ".$this->getCostoAbonados();

              
    }

    public function mostrarPasajeros(){
        $colPasajeros =  $this->getPasajeros(); //salta error
        $cadena = "";
        $nroPasajero = 0;
        for($i=0;$i<count($colPasajeros);$i++){
            $pasajero=$colPasajeros[$i];
            $cadena = $cadena."Pasajero: ".$nroPasajero++."-".$pasajero."\n";
        }

        return $cadena;

    }

    public function agregarViaje($codigo,$destino,$maximaPasajeros,$responsable){

           $this->setCodigo($codigo);
           $this->setDestino($destino);
           $this->setMaximaPasajeros($maximaPasajeros);
           $this->setObjResponsable($responsable);

    }
    public function agregarPasajeros($pasajero){
        $ingresado = false;
        if (count($this->arrayPasajeros) < $this->maximaPasajeros){
            if(!$this->existePasajero($pasajero)){
               $this->setPasajeros($pasajero);
               array_push($this->arrayPasajeros, $pasajero);
               $ingresado = true;
            }
        }

        return $ingresado;
    }

    public function cantidadPasajeros(){
        $ingreso=false;
        if(count($this->arrayPasajeros) <= $this->maximaPasajeros){
            $ingreso = true;
        }
        return $ingreso;
    }

    public function existePasajero($documento){
        $arrayPasajero = $this->arrayPasajeros;
        $i=0;
        $encontrado = false;
        while($i<$this->cantidadPasajeros() && !$encontrado){
            $unPasajero = $arrayPasajero[$i];
            if($unPasajero->getNumeroDocumento() == $documento){
                $encontrado = true;
            }else{
                $i++;
            }
        }
        if(!$encontrado){
            $i = -1;
        }

        return $i;

    }

    public function venderPasaje($pasajero){

         $ingreso = $this->cantidadPasajeros();
         $costoAbonados = $this->getCostoAbonados();

        if($ingreso == true){

            if(!$this->existePasajero($pasajero)){
               $this->setPasajeros($pasajero);
               array_push($this->arrayPasajeros, $pasajero);
               
            }

         $porcentaje = $this->$pasajero->darPorcentajeIncremento();
     
         $montoParcial = ($porcentaje * $this->costoViaje) / 100;

         $montoTotalViaje = $montoParcial + $this->costoViaje;

         $costoAbonados = $costoAbonados + $montoTotalViaje;

         $this->setCostoAbonados($costoAbonados);

        }

        return $montoTotalViaje;

    }

    public function hayPasajesDisponible(){

        $cant = count($this->arrayPasajeros);
        if($cant <= $this->maximaPasajeros){

            $disponible = true;
        
        }else{

        $disponible = false;
       }

       return $disponible;

    }





    

   
}



