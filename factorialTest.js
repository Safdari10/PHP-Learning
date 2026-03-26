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
        return n + sumEvenNumbers(n - 2);
    } else {
        return sumEvenNumbers(n - 1);
    }
}

// Q6
const sumOddNumbers = (n) => {
    if (n <= 0) return 0;
    if (n % 2 !== 0) {
        return n + sumOddNumbers(n - 2);
    } else {
        return sumOddNumbers(n - 1);
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

// Q12
const reverseDigitsHelper = (n, rev = 0) => {
    if (n === 0) return rev;
    return reverseDigitsHelper(Math.floor(n / 10), rev * 10 + n % 10);
}
function reverseDigits(n) {
    n = Math.abs(n);
    return reverseDigitsHelper(n)
}

// Q13
const productOfDigits = (n) => {
    n = Math.abs(n);
    if (n < 10) return n;
    return (n % 10) * productOfDigits(Math.floor(n / 10));
}

// Q14
const fib1 = (n) => {
    if (n === 0) return 0;
    if (n === 1) return 1;
    return fib1(n - 1) + fib1(n - 2);
}
const FibonacciSum = (n) => {
    n = Math.abs(n);
    return fib(n) + fibonacciSum(n - 1);
}

// Q15
const fact = (n) => {
    if (n <= 1) return 1;
    return n * fact(n - 1);
}
const factorialSum = (n) => {
    n = Math.abs(n);
    return fact(n) + factorialSum(n - 1);
}

// Q16
const isFactorial = (n, i = 2) => {
    if (n === 1 ) return true;
    if (n % 2 !== 0 || n === 0) return false;
    return isFactorial(n / i, i + 1)
}

// Q17
const reverseFactorial = (n, i = 1) => {
    if (n === 1) return i;
    if (n % i !== 0) return -1;
    return reverseFactorial(n / i, i + 1);
}

// Q18
const countDownString = (n) => {
    if (n <= 1) return n;
    return n + "" + countDownString(n - 1);
}

// Q19
const productRange = (x, n) => {
    if (x === n) return n;
    return x * productRange(x + 1)
}

// Q20
const customRecurrence = (n) => {
    if (n === 0) return 0;
    if (n === 1) return 2;
    return n * customRecurrence(n - 1) + n;
}
