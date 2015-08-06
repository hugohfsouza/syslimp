<?php 


class Coordenada{
	
	private $coordenadaX;
	private $coordenadaY;


	function __construct()
	{
	}


    public function setCoordenadaX($coordenadaX) {
        $this->coordenadaX = $coordenadaX;
    }

    public function setCoordenadaY($coordenadaY){
        $this->coordenadaY = $coordenadaY;
    }

    public function getCoordenadaX(){
    	return $this->coordenadaX;
    }

    public function getCoordenadaY(){
        return $this->coordenadaY;
    }
}

 ?>