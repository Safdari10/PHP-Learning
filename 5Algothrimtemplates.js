// ! 1.  Loop + Accumulator Template
// used for sum numbers, find max/min, count items, check conditions.

function loopAccumulator(arr, func) {
  let result = 0;

  for (let item of arr) {
    if (condition) {
      result = updatedResult;
    }
  }
  return result;
}

// example: find largest number in an array

const largestNumber = (arr) => {
  let largest = arr[0];
  for (let num of arr) {
    if (num > largest) {
      largest = num;
    }
  }
  return largest;
};

// ! 2. Filter Template
// used for remove items, keep matching elements, return subset of data

function filterTemplate(arr, func) {
  let result = [];
  for (let item of arr) {
    if (condition) {
      result.push(item);
    }
  }
  return result;
}

// example: return even numbers

const evenNumbers = (arr) => {
  let result = [];

  for (let num of arr) {
    if (num % 2 == 0) {
      result.push(item);
    }
  }
  return result;
};

//! 3. Frequency Map Template
// used for duplicates, most frequent item, word counts, character counts

function frequencyTemplate(arr, func) {
  let map = {};
  for (let item of arr) {
    if (!map[item]) {
      map[item] = 1;
    } else {
      map[item]++;
    }
  }
  return map;
}

// php equivalent of frequencyTemplate $count = array_count_values($arr);

//! 4. Seen & set Template
// used for remove duplicates, check if element exists, detect repeated values

function seenSetTemplate(arr, func) {
  let seen = new set();
  let result = [];

  for (let item in arr) {
    if (!seen.has(item)) {
      seen.add(item);
      result.push(item);
    }
  }
  return result;
}

// example: remove duplicates

const removeDuplicates = (arr) => {
  let seen = new set();
  let result = [];

  for (num in arr) {
    if (!seen.has(num)) {
      seen.add(num);
      result.push(num);
    }
  }
  return result;
};

// php version

// function removeDups($arr) {
//     $seen = [];
//     $result = [];

//     foreach ($arr as $num) {
//         if (!isset($seen[$num]){
//             $seen[$num] = true;
//             $result[] = $num;
//         })
//     }
//     return $result;
// }

//! 5. Nested Loop Template
// used for comparing elements, finding pairs, checking combinations

function nestedLoopTemplate(arr, func) {
  for (let i = 0; i < arr.length; i++) {
    for (let j = i + 1; j < arr.length; j++) {
      if (condition) {
        return true;
      }
    }
  }
}

// example; find two numbers that sum to 10;

const findTwoNumbers = (arr) => {
  for (let i = 0; i < arr.length; i++) {
    for (let j = i + 1; j < arr.length; j++) {
      if (arr[i] + arr[j] === 10) {
        return [arr[i], arr[j]];
      }
    }
  }
  return null;
};
