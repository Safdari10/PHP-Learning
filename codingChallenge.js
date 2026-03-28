
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
const twoSum2 = (arr, target) => {
    for (let i = 0; i < arr.length; i++) {
        for (let j = i + 1; j < arr.length; j++) {
            if (arr[i] + arr[j] === target) {
                return [i, j]
            }
        }
    }
    return null;
}
// optimal solution
const twoSum = (arr, target) => {
    let map = new Map();

    for (let i = 0; i < arr.length; i++) {
        let needed = target - arr[i];

        if (map.has(needed)) {
            return [map.get(needed), i]
        }
        map.set(arr[i], i);
    }
    return null;
}

