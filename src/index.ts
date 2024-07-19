const LIMIT = 100;

const isDivisible = (n: number, m: number): boolean => {
    return n % m === 0;
}

for (let i = 0; i < LIMIT; i++) {
    if (isDivisible(i, 3) && isDivisible(i, 5)) {
        console.log('FizzBuzz');
        continue
    }

    if (isDivisible(i, 3)) {
        console.log('Fizz');
        continue
    }

    if (isDivisible(i, 5)) {
        console.log('Buzz');
        continue
    }

    console.log(i);
}