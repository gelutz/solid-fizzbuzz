<?php

use FizzBuzz\Infra\Rule;

final class ReplacerTest extends TestCase {

    public Replacer $sut;
    public function setUp() {
        $this->sut = new Replacer();
    }

    public function testCanBeConstructedWithNoArguments(): void {
        $this->assertInstanceOf(Replacer::class, $this->sut);
    }

    public function testShouldNotReplaceIfThereAreNoRules(): void {
        $this->assertEquals(3, $this->sut->replace(3));
        $this->assertEquals(4, $this->sut->replace(4));
        $this->assertEquals(5, $this->sut->replace(5));
    }

    public function testCanAddManyRulesFromArray(): void {
        
        $stub1 = $this->createMock(Rule::class);
        $stub2 = $this->createMock(Rule::class);

        $this->sut->addRules([$stub1, $stub2]);
        $this->assertInstanceOf(Rule::class, $this->sut->rules[0]);
        $this->assertInstanceOf(Rule::class, $this->sut->rules[1]);
    }

    public function testShouldReplaceIfRuleDontMatch(): void {
        $stub = $this->createMock(Rule::class);
        $stub->method('replace')->willReturn(function($arg) {return $arg;});

        $this->sut->addRules([$stub]);

        $this->assertEquals(2, $this->sut->replace(2));
        $this->assertEquals(7, $this->sut->replace(7));
        $this->assertEquals(13, $this->sut->replace(13));
    }

    public function testShouldReplaceIfRuleMatches(): void {

        $stub = $this->createMock(Rule::class);
        $stub->method('replace')->willReturn('foo');

        $this->sut->addRules([$stub]);
        $this->assertEquals('foo', $this->sut->replace(1));
    }

    public function testShouldReplaceIfRuleMatches(): void {

        $stub = $this->createMock(Rule::class);
        $stub->method('replace')->willReturn('foo');

        $this->sut->addRules([$stub]);
        $this->assertEquals('foo', $this->sut->replace(1));
    }
}