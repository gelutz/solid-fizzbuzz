<?php

interface Pimbas {

	function getPimba(int $number);

	function printValues();

}

final class CountPimba implements Pimbas {

	private $breakpoints;
	private $max;

	/**
     * @param $breakpoints: array associativa com os valores que devem ser diferentes
     */
	public function __construct(array $breakpoints, int $max) {
		$this->breakpoints = $breakpoints;
		$this->max = $max;
	}

	/**
	 *	Verifica se o valor passado é divisível por um dos valores dentro do array do $breakpoints
	 *  Se sim, retorna $breakpoints[$number]
     * 	@param $number: o valor a ser verificado
     *  @return $str:   respectiva string do $breakpoints
     */
	public function getPimba(int $number) : string {

		$str = (string) $number;
		foreach ($this->breakpoints as $key => $value) {
			if ($number % $key == 0) {
				$str = $this->breakpoints[$key];
			}
		}
		return $str;
	}

	/**
	 *	Printa os números de 1 até $max.
	 *  Se o valor for divisível por um dos valores em $breakpoints, retorna a string correspondente.
     */
	public function printValues() {
		for ($i=1; $i <= $this->max; $i++) {
			print($this->checkPimba($i)."\n");
		}
	}

}