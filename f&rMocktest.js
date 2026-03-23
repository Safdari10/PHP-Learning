
// 1
const basicFactorial = (n) => {
    if (n <= 1 ) return 1;
    return n * basicFactorial(n - 1);
}

// 2
const sumFactorial = (n) => {
    if (n <= 1) return n;
    return n + sumFactorial(n - 1);
}

// 3
const productNumbers = (n) => {
    if (n <= 1) return 1;
    return n * productNumbers(n - 1);
}

// 4
const sumEven = (n) => {
    if (n <= 2) return 0;

    if (n % 2 === 0) {
        return n + sumEven(n - 2)
    } else {
        return sumEven(n - 1);
    }
}

// 5
const countDown = (n) => {
    if (n === 1) return "1";
    return n + " " + countDown(n - 1);

}
const countDown2 = (n) => {
    if (n === 1) return "1";
    return n + "-" + countDown2(n - 1);
}

const fib = (n) => {
    if ( n === 0) return 0;
    if (n === 1) return 1;
    return fib(n-1) + fib(n-2);
}