<?php 

use PHPUnit\Framework\TestCase;


final class ReplacerTest extends TestCase {

    public function testArrayRegrasVazio() {
        $replacer = new Replacer();
        
        $this->assertEmpty($replacer->getRegras());
    }

    /**
     * Testa para ver se o addRegras() ordena do menor $point para o maior $point
     * mesmo quando o menor for adicionado depois
     */
    public function testKeySortOrdenaCerto() {
        $replacer = new Replacer();
        
        // Adiciona apenas o 5 e o 15, e faz o ksort
        $rModCinco = new RegraDeMod(5, "Cinco");
        $rModPimba = new RegraDeMod(15, "Pimba");        
        
        $replacer->addRegras( [$rModCinco, $rModPimba] );
        
        // Pega o point da primeira regra do array
        $oldFirstRuleKey = array_key_first($replacer->getRegras());
        
        // Adiciona o 3, e faz o ksort 
        $rModTres = new RegraDeMod(3, "Tres");
        $replacer->addRegras( [$rModTres] );

        // Pega o point da primeira regra do array, de novo
        $newFirstRuleKey = array_key_first($replacer->getRegras());

        // O new deveria ser menor, por que 3 < 5, mesmo sendo adicionado depois
        $this->assertGreaterThan(
            $newFirstRuleKey,
            $oldFirstRuleKey
        );
    }
}
?>