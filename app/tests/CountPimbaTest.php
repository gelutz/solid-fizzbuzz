<?php 

use PHPUnit\Framework\TestCase;


final class CountPimbaTest extends TestCase {

    /**
     * Verifica se CountPimba::getPimba retorna a string passada como arg
     */ 
    public function testVaiEscreverTexto() : void {
        
        $max = 100;

        $breakpoints = [
            3 => "Três",
            5 => "Cinco", 
            15 => "Pimba"
        ];
        $cp = new CountPimba($breakpoints, $max);
        
        $this->assertEquals(
            $cp->getPimba(45),
            $breakpoints[15] 
        );
        
        // testando com múltiplos de 15
        $this->assertEquals(
            $cp->getPimba(45),
            $breakpoints[15] 
        );

        $this->assertEquals(
            $cp->getPimba(90),
            $breakpoints[15] 
        );
    }

    /**
     * Verifica se CountPimba::getPimba retorna a string passada como arg
     */ 
    public function testVaiEscreverNumero() : void {
        
        $max = 100;

        $breakpoints = [
            3 => "Três",
            5 => "Cinco", 
            15 => "Pimba"
        ];
        $cp = new CountPimba($breakpoints, $max);

        $this->assertNotEquals(
            $cp->getPimba(17),
            $breakpoints[15] 
        );
    }
}