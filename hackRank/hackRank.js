// question 1:
function plusMinus(arr) {
  let positive = 0;
  let negative = 0;
  let zero = 0;

  for (let num of arr) {
    if (num > 0) {
      positive++;
    } else if (num < 0) {
      negative++;
    } else {
      zero++;
    }
  }

  console.log((positive / arr.length).toFixed(6));
  console.log((negative / arr.length).toFixed(6));
  console.log((zero / arr.length).toFixed(6));
}

// question 2:
function miniMaxSum(arr) {
  let total = 0;
  let min = arr[0];
  let max = arr[0];

  for (let num of arr) {
    total += num;

    if (num < min) min = num;
    if (num > max) max = num;
  }

  console.log(total - max + " " + (total - min));
}

// question 3:
function timeConversion(s) {
  let hour = s.slice(0, 2);
  let rest = s.slice(2, 8);
  let period = s.slice(8);

  if (period === "AM") {
    if (hour === "12") {
      return "00" + rest;
    }
    return hour + rest;
  } else {
    if (hour === "12") {
      return hour + rest;
    }
    return String(Number(hour) + 12) + rest;
  }
}

// question 4:
function matchingStrings(strings, queries) {
  let freq = {};
  let result = [];

  for (let str of strings) {
    freq[str] = (freq[str] ?? 0) + 1;
  }

  for (let query of queries) {
    result.push(freq[query] ?? 0);
  }

  return result;
}

// question 5:
function lonelyinteger(a) {
  let freq = {};

  for (let n of a) {
    freq[n] = (freq[n] ?? 0) + 1;
  }

  for (let key in freq) {
    if (freq[key] === 1) {
      return Number(key);
    }
  }
}

// XOR solution: XOR removes pairs of indentical numbers (or even number of times), leaving only the unique number at the end.
function lonelyinteger1(a) {
  let result = 0;

  for (let n of a) {
    result ^= n;
  }
  return result;
}

// Question 6:

function flippinBits(n) {
  // instead of manually flipping bits, we use idea that the largest 32-bit number is 4294967295 which is basically 11111111111111111111111111111111
  // so flipping bits = substract from max
  // so the max is basically 2 ** 32 (total number values in 32 bits) - 1 (which gives the 11111111111111111111111111111111);
  return n ** 32 - 1 - n;
}

// use bitwise operator which is more better and cleaner
function flippinBits1(n) {
  // ~n flips all bits
  // >>> 0 converts result to unsigned 32-bit number
  return ~n >>> 0;
}

// question 7:
function diangonalDifference(arr) {
  let n = arr.length;
  let primaryDiagonal = 0;
  let secondaryDiagonal = 0;

  for (let i = 0; i < n; i++) {
    primaryDiagonal += arr[i][i];
    secondaryDiagonal += arr[i][n - 1 - i];
  }

  return Math.abs(primaryDiagonal - secondaryDiagonal);
}

// question 8:
function countingSort(arr) {
  let count = new Array(100).fill(0);

  for (let num of arr) {
    count[num]++;
  }

  return count;
}

// above code tests if i know when to use array to store frequencies instead of object,
// which is more efficient in this case since we know the range of numbers is from 0 to 99 and positive integers.
// for larger/unknown range, we would use an object to store frequencies instead of an array.

// when using array we don't have to set to 100 elements to 0, we just need know that Size = max value in array + 1
function countingSort1(arr) {
  let max = Math.max(...arr);
  let count = new Array(max + 1).fill(0);

  for (let num of arr) {
    count[num]++;
  }

  return count;
}

// we use frequency map to count frequencies when range is large or uknown or we have negative numers.
function countingSort2(arr) {
  let count = {};

  for (let num of arr) {
    count[num] = (count[num] ?? 0) + 1;
  }

  return count;
}


// Question 8:
function pangrams(s) {
  let alphabet = Array.from ({ length: 26}, (_, i) => String.fromCharCode(97 + i))
  let lowerCases = s.toLowerCase();

  for (let letter of alphabet) {
    if (!lowerCases.includes(letter)) {
      return "not pangram";
    }
  }
  return "pangram";
}