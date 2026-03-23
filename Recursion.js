
// Q1
const factorial = (n) => {
    if (n <= 1) return 1;
    return n * factorial(n - 1);
}

// Q2
const sumRecursion = (n) => {
    if (n <= 1) return n;
    return n + sumRecursion(n -1);
}

// Q3
const fibonacci = (n) => {
    if (n === 0) return 0;
    if (n === 1) return 1;
    return fibonacci(n - 1) + fibonacci(n - 2);
}

// Q4
const product = (n) => {
    if (n <= 1) return 1;
    return n * product(n - 1);
}

// Q5
const sumEven = (n) => {
    if (n < 2) return 0;

    if (n % 2 === 0 ) {
        return n + sumEven(n - 2);
    } else {
        return sumEven(n -1);
    }
}

// Q6
const power = (x, n) => {
    if (n === 0) return 1;
    return x * power(x, n - 1);
}

// Q7
const countDown = (n) => {
    if (n === 1) return "1";
    return n + " " + countDown(n - 1);
}

// Q8
const factorialSum = (n) => {
    if (n === 0) return 0;
    let sum = 0;
    let fact = 1;

    for (let i = 1; i <= n; i++) {
        fact *= i;
        sum += fact;
    }
    return sum;
}

// Q8 in recursion
const fl = (n) => {
    if (n <= 1) return 1;
    return n * fl(n -1);
}
const flSum = (n) => {
    if (n === 1) return 1;
    return fl(n) + flSum(n - 1);
}

// Q9
const sumOdd = (n) => {
    if (n <= 0) return 0;
    if (n % 2 !== 0) {
        return n + sumOdd(n - 2)
    } else {
        return sumOdd(n - 1)
    }
}

// Q10

const numberOfDigits = (n) => {
    if (Math.abs(n) < 10) return 1;
    return 1 + numberOfDigits(Math.floor(n / 10));


}