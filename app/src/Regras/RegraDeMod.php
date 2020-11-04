<?php

require_once 'RegraDeTroca.php';

// mod por que o check faz o mod (%) entre o $point e o $value
class RegraDeMod implements RegraDeTroca {
	protected $point;
	protected $message;

	public function __construct( int $point, string $message ){
		$this->number 	= $point;
		$this->message 	= $message;
	}

	/**
     * Verifica se o valor passado é divisível por $point
     * @param int 
     * @return boolean
     */
	public function check( $value ) : bool {
		return ($value % $this->number === 0);
	}

    /**
     * Retorna o texto do objeto
     * @return string
     */
	public function getMessage(){
		return $this->message;
	}

	/**
     * Retorna o $point
     * @return int
     */
	public function getPoint(){
		return $this->number;
	}
}

?>