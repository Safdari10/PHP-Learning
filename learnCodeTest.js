
// Question 1:
const sumTwoNumbers = (a, b) => a + b;

// Question 2:
const isEven = (num) => num % 2 === 0;

// Question 3:
const reverseString = (str) => {
    return str.split('').reverse().join('');
}

// Question 4:
const findLargest = (arr) => {
    let largest = arr[0];

    for (let num of arr) {
        if (num > largest) {
            largest = num;
        }
    }
    return largest;
}