
// 1
const basicFactorial = (n) => {
    if (n <= 1 ) return 1;
    return n * basicFactorial(n - 1);
}

// 2
const sumFactorial = (n) => {
    if (n <= 1) return n;
    return n + basicFactorial(n - 1);
}

// 3
const productNumbers = (n) => {
    if (n <= 1) return 1;
   return n * (n - 1) * (n - 2) * (n -3 ) * (n - n)
}

// 4
const sumEven = (n) => {
    if (n < 1) return n;

    if (n % 2 === 0) {
        return n + sumEven(n - 2)
    } else {
        return (n - 1) + sumEven(n - 2);
    }
}

// 5