
// Problem 1
const countVowels = (str) => {
    let cleanedStr = str.toLowerCase();
    const vowels = ['a','e','i','o','u'];
    let count = 0;

    for (let char of cleanedStr) {
        if (vowels.has(char)) {
            count++;
        }
    }
    return count;
}

// Problem 2
const firstNonRepeat = (str) => {
    let map = new Map();

    for (let char of str) {
        map.set(char, (map.get(char) ?? 0) + 1)
    }
    for (let char of str) {
        if (map.get(char) === 1) {
            return char;
        }
    }
    return null;
}

// Problem 3
const twoSum = (arr, target) => {
    for (let i = 0; i < arr.length; i++) {
        for (let j = i + 1; j < arr.length; j++) {
            if (arr[i] + arr[j] === target) {
                return [i, j]
            }
        }
    }
    return null;
}

