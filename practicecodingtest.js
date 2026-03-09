//! Question 1: loop and accumulator

const sumNumbers = (arr) => {
  let sum = 0;

  for (let num of arr) {
    if (num > 10) {
      sum = sum + num;
    }
  }
  return sum;
};

//! Question 2: filter

const negativeNumbers = (arr) => {
  let result = [];

  for (let num of arr) {
    if (num < 0) {
      result.push(num);
    }
  }
  return result;
};

//! Question 3: frequency map

const letterFrequency = (str) => {
  let map = {};

  for (let c of str) {
    if (!map[c]) {
      map[c] = 1;
    } else {
      map[c]++;
    }
  }
  return map;
};

//! Question 4: seen & set

const removeDuplicates = (arr) => {
  let seen = new Set();
  let result = [];

  for (let num of arr) {
    if (!seen.has(num)) {
      seen.add(num);
      result.push(num);
    }
  }
  return result;
};

//! Question 5: Nested Loops

const addTo15 = (arr) => {
  for (let i = 0; i < arr.length; i++) {
    for (let j = i + 1; j < arr.length; j++) {
      if (arr[i] + arr[j] === 15) {
        return true;
      }
    }
  }
};

//! Question 6: string processing;

const isPalindrome = (str) => {
  let cleaned = str.replace(/[^a-zA-Z]/g, "").toLowerCase();

  let reversed = cleaned.split("").reverse().join("");

  return cleaned === reversed;
};

//! Question 7: SQL aggregation
/*
SELECT c.id, c.name AS customer_name, SUM(o.amount) AS total_spent
FROM Customers c
LEFT JOIN Orders o
ON c.id = o.customer_id
GROUP BY c.id, c.name
*/

//! Question 8: loop and accumulator

const largestNumber = (arr) => {
  let largest = arr[0];

  for (let num of arr) {
    if (num > largest) {
      largest = num;
    }
  }
  return largest;
};

// ! Question 9: filter

const bigWords = (str) => {
  let result = [];

  let words = str.split(" ");

  for (let word of words) {
    if (word.length > 4) {
      result.push(word);
    }
  }

  return result;
};

//! Question 10: string processing

const wordCount = (str) => {
  str.trim() === "" ? 0 : str.trim().split(/\s+/).length;
};
