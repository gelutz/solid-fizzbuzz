import { describe, expect, test } from "bun:test";

const counter = (limit: number = 100) => Array.from({length: limit}, (_, n) => n)

describe('Counter', () => {
    test('should return an array of numbers from 0 to limit', () => {
        const limit = 100
        const c = counter(limit)

        let numbers = []
        for (let index = 0; index < limit; index++) {
            numbers.push(index)
        }
        
        const randomIndex = Math.floor(Math.random() * limit) 
        expect(c[randomIndex] == numbers[randomIndex])
    });
});