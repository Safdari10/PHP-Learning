
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
const fib = (n) => {
    if (n === 0) return 0;
    if (n === 1) return 1;
    return fib(n - 1) + fib(n - 2);
}
function fibonacciSum(n) {
    if (n <= 1) return n;
    return fib(n) + fibonacciSum(n-1)
}

// Q5
function fl(n) {
    if (n <= 1) return 1;
    return n * fl(n - 1);
}

function countDigits(n) {
    if (n < 10 ) return 1;
    return 1 + countDigits(Math.floor(n / 10));
}

function digitsInFactorial(n) {
    return countDigits(fl(n))
}

// Q6 don't need to use the stupid formula - just count sequence
function isFibonacciNumber(n, a = 0, b = 1){
    if (a === n) return true;
    if (a > n) return false;
    return isFibonacciNumber(n, b, a+b)
}

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

