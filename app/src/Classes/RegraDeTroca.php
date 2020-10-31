<?

namespace Classes;

class RegraDeTroca {
	protected $number;
	protected $message;

	public function __construct( int $value, string $message ){
		$this->number 	= $number;
		$this->message 	= $message;
	}

	/**
     * Verifica se o valor passado é divisível por $number
     * @param int 
     * @return boolean
     */
	public function check( int $value ) : boolean{
		return ($value % $this->number === 0);
	}

    /**
     * Retorna o texto do objeto
     * @return string
     */
	public function getMessage(){
		return $this->message;
	}
}

?>