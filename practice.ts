// a function that check if a number is prime

function isPrime(num: number): boolean {
  if (num <= 1) return false; // 0 and 1 are not prime numbers
  for (let i = 2; i <= Math.sqrt(num); i++) {
    if (num % i === 0) return false; // if num is divisible by any number other than 1 and itself, it's not prime
  }
  return true; // if num is not divisible by any number other than 1 and itself, it's prime
}

console.log(isPrime(7)); // true
console.log(isPrime(8)); // false

// Given an array of numbers, return the largest number.
function findLargestNumber(arr: number[]): number {
  if (arr.length === 0) {
    throw new Error("Array cannot be empty");
  }
  let max = arr[0];
  for (let i = 1; i < arr.length; i++) {
    if (arr[i] > max) {
      max = arr[i];
    }
  }
  return max;
}

const numbers = [4, 9, 2, 15, 6];
console.log(findLargestNumber(numbers)); // 15

// Write a function that returns the number of words in a sentence.
function countWords(sentence: string): number {
  if (sentence.trim() === "") {
    return 0; // Return 0 for empty or whitespace-only sentences
  }
  const words = sentence.trim().split(/\s+/); // Split on one or more whitespace characters
  return words.length;
}

const sentence = "Today is a good day";
console.log(countWords(sentence)); // 5

function reverseArray(arr: any[]): any[] {
  const reversed: any[] = [];
  for (let i = arr.length - 1; i >= 0; i--) {
    reversed.push(arr[i]);
  }
  return reversed;
}

const rr = [1, 2, 3, 4];
console.log(reverseArray(rr)); // [4, 3, 2, 1]

const factorial = (n: number): number => {
  if (n < 0) {
    throw new Error("Factorial is not defined for negative numbers");
  }
  if (n === 0 || n === 1) {
    return 1;
  } else {
    return n * factorial(n - 1);
  }
};

console.log(factorial(5)); // 120
// factorial means the product of all positive integers less than or equal to a given number
// factorial(5) means 5 * 4 * 3 * 2 * 1 = 120

const longestWord = (sentence: string): string => {
  if (sentence.trim() === "") {
    throw new Error("Sentence cannot be empty");
  }
  const words = sentence.trim().split(/\s+/);
  let longest = words[0];
  for (let i = 1; i < words.length; i++) {
    if (words[i].length > longest.length) {
      longest = words[i];
    }
  }
  return longest;
};

const sents = "The quick brown fox jumps";
console.log(longestWord(sents)); // "quick"
