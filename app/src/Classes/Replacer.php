<?php

class Replacer {

    private array $regras;

    /**
     * Classe que pode receber diversas regras que serão verificadas
     * quando replace() for chamado
     * @param int $start
     * @param int $end
     */
    public function __construct(){
        $this->regras = [];
    }

    /**
     * Adiciona uma ou mais regras
     * @param array
     * @return void
     */ 
    public function addRegras( array $regras ) {
        foreach ($regras as $regra ) {
            $this->addRegra( $regra );
        }
    }

    /**
     * Adiciona uma regra que implemente RegraDeTroca
     * organiza o array de regras na ordem ascendente
     * @param object
     * @return bool
     */
    public function addRegra( RegraDeTroca $regra ) {
        try {
            $this->regras[$regra->getPoint()] = $regra;

            ksort($this->regras);
            
            return TRUE;
        } catch (\Throwable $th) {
            return FALSE;
        }
    }

    /**
     * Retorna o array de regras da classe
     */
    public function getRegras() {
        return $this->regras;
    }

    /**
     * Reseta o ponteiro interno para o primeiro item da array $regras
     * normalmente ele aponta para o primeiro item adicionado
     */
    public function resetRegrasPointer() : void {
        reset($this->regras);
    }

    /**
     * Passa o $value pelas regras da classe e retorna o mesmo $value
     * ou a mensagem da regra pela qual ele passar
     * @param int $value
     * @return mixed $value
     */
    public function replace( int $value ){

        // lógica principal do countpimba
        $transformedValue = $value;

        foreach ($this->regras as $regra ) {
            if ($regra->check($value)){
                $transformedValue = $regra->getMessage();
            }
        }

        return $transformedValue;
    }
}