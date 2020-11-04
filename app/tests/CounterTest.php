<?php 

use PHPUnit\Framework\TestCase;


final class CounterTest extends TestCase {

    public function testeRetornaTres() : void {
        $rModTres = new RegraDeMod(3, "Tres");
        

        $replacer = new Replacer();
        $replacer->addRegras([$rModTres]);
        $counter = new Counter(0, 100, $replacer);
        
        $this->assertEquals(
            $counter->fullCount()[9],
            "Tres"
        );
    }

    public function testeRetornaCinco() : void {
        $rModCinco = new RegraDeMod(5, "Cinco");
        

        $replacer = new Replacer();
        $replacer->addRegras([$rModCinco]);
        $counter = new Counter(0, 100, $replacer);
        $allvalues = $counter->fullCount();

        $this->assertEquals(
            $allvalues[25],
            "Cinco"
        );
    }

    public function testeRetornaPimba() : void {
        $rModPimba = new RegraDeMod(15, "Pimba");


        $replacer = new Replacer();
        $replacer->addRegras([$rModPimba]);
        $counter = new Counter(0, 100, $replacer);
        
        $this->assertEquals(
            $counter->fullCount()[45],
            "Pimba"
        );
    }

    public function testeRetornaCertoComTodasRegras() : void {
        $rModTres = new RegraDeMod(3, "Tres");
        $rModCinco = new RegraDeMod(5, "Cinco");
        $rModPimba = new RegraDeMod(15, "Pimba");

        $replacer = new Replacer();
        $replacer->addRegras( [$rModTres, $rModCinco, $rModPimba] );
        
        $counter = new Counter(0, 100, $replacer);
        $allvalues = $counter->fullCount();

        $this->assertEquals(
            $allvalues[39],
            "Tres"
        );
        
        $this->assertEquals(
            $allvalues[55],
            "Cinco"
        );

        $this->assertEquals(
            $allvalues[90],
            "Pimba"
        );
    }
}