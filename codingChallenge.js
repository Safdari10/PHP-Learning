
// Problem 1
const countVowels = (str) => {
    let cleanedStr = str.toLowerCase();
    const vowels = 'aeiou';
    let count = 0;

    for (let char of cleanedStr) {
        if (vowels.includes(char)) {
            count++;
        }
    }
    return count;
}
