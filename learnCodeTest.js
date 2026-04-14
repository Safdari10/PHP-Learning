
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

// Question 5:
const countVowels = (str) => {
    const vowels = ["a","e","i","o","u"];
    let count = 0;

    for (let char of str) {
        if (vowels.includes(char)) {
            count++;
        }
    }
    return count;
}

// Question 6:
const countOccurrences = (arr, target) => {
    let count = 0;

    for (let num of arr) {
        if (num === target) {
            count++;
        }
    }
    return count;
}

// Question 7:
const countCharacters = (str) => {
    const counts = {};

    for (let char of str) {
        counts[char] = (counts[char] ?? 0) + 1;
    }
    return counts;
}

// Question 8:
const removeDuplicates = (arr) => {
    const seen = new Set();
    let result = []

    for (let num of arr) {
        if (!seen.has(num)) {
            seen.add(num);
            result.push(num);
        }
        seen.add(num);
    }
    return result;
}