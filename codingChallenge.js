
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
