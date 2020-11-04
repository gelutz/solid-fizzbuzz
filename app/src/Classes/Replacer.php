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
     * Adiciona uma ou mais regras do tipo RegraDeMod
     * também ordena as regras de acordo com o getNumber() delas;
     */
    public function addRegras( array $regras ) {
        
        foreach ($regras as $regra ) {
            $this->regras[$regra->getPoint()] = $regra;
        }

        // sort de acordo com as chaves da array, sem perder as chaves
        ksort($this->regras);
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