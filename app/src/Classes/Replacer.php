<?

namespace Classes;

class Replacer {
    
    private $regras;
    
    public function __construct( RegraDeTroca $regras = null) {
        
        foreach ($regras as $regra) {
            $this->addRegra($regra);
        } 
    }

    public function addRegra( RegraDeTroca $regra ) {
        $this->regras[] = $regra;
    }

    /**
     * Cria uma cópia de $breakpoints invertido
     * e loopa sobre os valores verificando se $value % $breakpoint == 0
     * @return boolean
     */
    public function check( int $value ) {
        foreach ($this->breakpoints as $key => $value) {
            
            if ($number % $key == 0) {
				return TRUE;
            }
        }
        
        return FALSE;
    } 

    public function getText( int $value ) {
        return $this->breakpoints[$value];
    }
}