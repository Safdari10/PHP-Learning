// Q1
const factorial = (n) => {
    if (n <= 1 ) return 1;
    return n * factorial(n - 1);
}

// Q2
const edgeCaseFactorial = (n) => {
    if (n <= 1) return 1;
    return n * edgeCaseFactorial(n - 1);
}

// Q3
const doubleFactorial = (n) => {
    if (n <= 1 ) return 1
    return n * doubleFactorial(n - 2);
}

// Q4
const sumOfNumbers = (n) => {
    if (n <= 1 ) return n;
    return n + sumOfNumbers(n - 1);
}

// Q5
const sumEvenNumbers = (n) => {
    if (n <= 1) return 0;
    if (n % 2 === 0) {
        return n + sumOfNumbers(n - 2);
    } else {
        return sumOfNumbers(n - 1);
    }
}

// Q6
const sumOddNumbers = (n) => {
    if (n <= 0) return 0;
    if (n % 2 !== 0) {
        return n + sumOddNumbers(n - 2);
    } else {
        return sumOfNumbers(n - 1);
    }
}

// Q7
const fibonacci = (n) => {
    if (n === 0) return 0;
    if (n === 1) return 1;
    return fibonacci(n - 1) + fibonacci(n - 2);
}

// Q8
const fibonacciVariation = (n) => {
    if (n === 0) return 3
    if (n === 1) return 2
    return fibonacciVariation(n - 1) + fibonacciVariation(n - 2);
}

// Q9
const powerFunction = (x, n) => {
    if (n === 0) return 1;
    return x * powerFunction(x,n - 1)
}

// Q10
const countDigits = (n) => {
    n = Math.abs(n);
    if (n < 10) return 1;
    return 1 + countDigits(Math.floor(n / 10));
}

// Q11

const sumDigits = (n) => {
    n = Math.abs(n);
    if (n < 10) return n;
    return (n % 10) + sumDigits(Math.floor(n / 10))
}

