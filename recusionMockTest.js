
// Q1
const recursionFactorial = (n) => {
    if (n <= 1) return 1;
    return n * recursionFactorial(n - 1)
}

// Q2
const doubleFactorial = (n) => {
    if (n <= 1) return 1;
    return n * doubleFactorial(n - 2);
}

// Q3
function fibonacci(n) {
    if (n === 0) return 0;
    if (n === 1) return 1;
    return fibonacci(n - 1) + fibonacci(n - 2);
}

// Q4
const fact = (n) => {
    if (n <= 1) return 1;
    return n * fact(n - 1);
}
function fibonacciSum(n) {
    if (n <= 1) return n;
    return fact(n) + fibonacciSum(n-1)
}

// Q5
function fl(n) {
    if (n <= 1) return 1;
    return n * fl(n - 1);
}
function digitsInFactorial(n) {
    if (Math.abs(fl(n)) < 10) return 1
    return 1 + digitsInFactorial(Math.floor(fl(n) / 10));
}

// Q6
// so another stupid formula that is otherwise useless, I have to remember here, 5n^2 + 4 | 5n^2 - 4 is perfect square for a number to be fibonacci number.
// perfect square is if a numbers square root is perfect number.
function isFibonacciNumber(n) {
    const isPerfectSquare = x => Number.isInteger(Math.sqrt(x))
    return isPerfectSquare(5 * n * n + 4) || isPerfectSquare(5 * n * n -4);
}
// what makes it worse is it is different for example in php to get check if number is a perfect square
// $isPerfectSquare = fn(x) { $s = (int)sqrt(x) return s * s ==== x
// probably will forget when time comes to do actual test.

// Q7
const reverseFactorial = (n) => {
    if (n < 1) return -1;
    let i = 1;
    while (n > 1) {
        i++;
        if (n % i !== 0) return -1;
        n /= i;
    }
    return i;
}

// Q8
const modifiedFibonacci = (n) => {
    if (n === 0) return 2;
    if (n === 1) return 1;
    return modifiedFibonacci(n - 1) + modifiedFibonacci(n - 2);
}

