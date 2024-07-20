import { beforeEach, describe, expect, test } from "bun:test";
import { Counter, type Rule } from "./Counter";

describe("Counter", () => {
    const START = 1;
    const LIMIT = 100;
    let counter: Counter;

    beforeEach(() => {
        counter = new Counter().from(START).to(LIMIT);
    });

    test("should return an array of items from start to limit", () => {
        const counted = counter.asList();
        let numbers = Array.from({ length: LIMIT }, (_, n) => n + START);

        const randomIndex = Math.floor(Math.random() * LIMIT);

        expect(counted[randomIndex] === numbers[randomIndex]).toBeTrue();
        expect(counted.length).toBe(LIMIT);
    });

    test("should be able to add rules", () => {
        const fizzRule: Rule = {
            verify: (n) => n % 3 === 0,
            execute: (n) => n * 3,
        };

        counter.addRule(fizzRule);
        expect(counter.rulesList.length).toBe(1);
    });

    test("should be able to verify and execute rules", () => {
        counter.from(1).to(3);
        const fizzRule: Rule = {
            verify: (n) => n % 3 === 0,
            execute: (n) => "Fizz",
        };

        counter.addRule(fizzRule);
        const counted = counter.asList();

        expect(counted[2]).toBe("Fizz");
    });

    test("should be able to verify and execute multiple rules", () => {
        counter.from(1).to(5);
        const fizzRule: Rule = {
            verify: (n) => n % 3 === 0,
            execute: (n) => "Fizz",
        };

        const buzzRule: Rule = {
            verify: (n) => n % 5 === 0,
            execute: (n) => "Buzz",
        };

        counter.addRule(buzzRule).addRule(fizzRule);
        const counted = counter.asList();
        console.log(counted);
        expect(counted[2]).toBe("Fizz");
        expect(counted[4]).toBe("Buzz");
    });
});

describe("FizzBuzz", () => {
    const START = 0;
    const LIMIT = 100;
    let counter: Counter;

    test("should get a list of items following the fizzbuzz pattern", () => {
        counter = new Counter().from(START).to(LIMIT);

        const fizzBuzzRule: Rule = {
            verify: (n) => n % 3 === 0 && n % 5 === 0,
            execute: (n) => "FizzBuzz",
        };

        const buzzRule: Rule = {
            verify: (n) => n % 5 === 0,
            execute: (n) => "Buzz",
        };

        const fizzRule: Rule = {
            verify: (n) => n % 3 === 0,
            execute: (n) => "Fizz",
        };

        counter.addRule(fizzRule).addRule(buzzRule).addRule(fizzBuzzRule)

        const counted = counter.asList();
        expect(counted[3]).toBe("Fizz");
        expect(counted[5]).toBe("Buzz");
        expect(counted[15]).toBe("FizzBuzz");
    });
});
