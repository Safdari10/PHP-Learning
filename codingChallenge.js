
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

// Problem 4
const containsDuplicate = (arr) => {
    let seen = new Set();

    for (let num of arr) {
        if (seen.has(num)) {
            return true;
        }
        seen.add(num);
    }
    return false;
}

// Problem 5
const isAnagram1 = (str1, str2) => {
    if (str1.length !== str2.length) return false
    let sortedStr1 = str1.split('').sort().join('');
    let sortedStr2 = str2.split('').sort().join('');
    return sortedStr1 === sortedStr2
}

const isAnagram2 = (str1, str2) => {
    if (str1.length !== str2.length) return false;
    let map = new Map();

    for (let char of str1.toLowerCase()) {
        map.set(char, (map.get(char) ?? 0) + 1);
    }

    for (let char of str2.toLowerCase()) {
        if (!map.has(char) || map.get(char) === 0) {
            return false;
        }
        map.set(char, map.get(char) - 1);
    }
    return true;
}

// Problem 6
const lengthOfLongestSubstring = (str) => {
    let chars = str.toLowerCase().split('');
    let seen = new Set();
    let start = 0;
    let maxLen = 0;

    for (let end = 0; end < chars.length; end++) {
        while (seen.has(chars[end])) {
            seen.delete(chars[start]);
            start++;
        }
        seen.add(chars[end]);
        maxLen = Math.max(maxLen, end - start + 1)
    }
    return maxLen;
}

// Problem 7
const characterReplacement = (str, k) => {
    let map = new Map();
    let start = 0;
    let maxLen = 0;
    let maxCount = 0;

    for (let end = 0; end < str.length; end++) {
        let char = str[end];

        map.set(char, (map.get(char) ?? 0) + 1);
        maxCount = Math.max(maxCount, map.get(char))

        while ((end - start + 1) - maxCount > k) {
            map.set(str[start], map.get(str[start]) - 1);
            start++
        }
        maxLen = Math.max(maxLen, end - start + 1);
    }
    return maxLen;
}

// Problem 8
const longestSubarray = (arr, k) => {
    let start = 0;
    let maxLen = 0;
    let currentSum = 0;


    for (let end = 0; end < arr.length; end++) {
        currentSum += arr[end];

        while (currentSum > k) {
            currentSum -= arr[start];
            start++
        }
        maxLen = Math.max(maxLen, end - start + 1);
    }
    return maxLen
}

// Problem 9
const subarraySum = (arr, k) => {
    let map = new Map();
    map.set(0 , 1);
    let currentSum = 0;
    let count = 0;

    for (let num of arr) {
        currentSum += num;

        if (map.has(currentSum - k)) {
            count += map.get(currentSum - k);
        }

        map.set(currentSum, (map.get(currentSum) ?? 0) + 1)
    }
    return count;
}

// Problem 10
const countSubarraysSum = (arr) => {
    let map = new Map();
    map.set(0, 1);
    let currentSum = 0;
    let count = 0;


    for (let num of arr) {
        currentSum += num

        if (map.has(currentSum)) {
            count += map.get(currentSum);
        }

        map.set(currentSum, (map.get(currentSum) ?? 0) + 1);
    }
    return count;
}



// Problem 11
const longestSubarraySum = (arr, k) => {
   let map = new Map();
   map.set(0 , 1);

   let currentSum = 0;
   let maxLen = 0;

   for (let i = 0; i < arr.length; i++) {
       currentSum += arr[i];

       if (map.has(currentSum - k)) {
           let length = i - map.get(currentSum - k)
           maxLen = Math.max(maxLen, length);
       }
       if (!map.has(currentSum)) {
           map.set(currentSum, i)
       }
   }
   return maxLen;
}

// Problem 12
const maxSubArrayLen = (arr, k) => {
    let map = new Map();
    map.set(0 , -1);

    let currentSum = 0;
    let maxLen = 0;


    for (let i = 0; i < arr.length; i++) {
        currentSum += arr[i];

        if (map.has(currentSum - k)) {
            if (map.get(currentSum - k)) {
                let length = i - map.get(currentSum - k)
                maxLen = Math.max(maxLen, length )
            }
        }
        if (!map.has(currentSum))
        map.set(currentSum, i);

    }
    return maxLen;
}

// Problem 13
const checkSubarraySum = (arr, k) => {
   let map = new Map();
   map.set(0, -1);

   let currentSum = 0;

   for (let i= 0; i < arr.length; i++) {
       currentSum += arr[i]
       let remainder = currentSum % k;

       if (map.has(remainder)) {
           let prevIndex = map.get(remainder);

           if (i - prevIndex >= 2) {
               return true;
           }
       } else {
           map.set(remainder, i)
       }
   }
   return false;
}

// problem 14
const subarraysDivByK = (arr, k) => {
    let map = new Map();
    map.set(0 , 1);

    let currentSum = 0;
    let count = 0;

    for (let i = 0; i < arr.length; i++) {
        currentSum += arr[i];

        let remainder = currentSum % k;

        // turn negatives remainders to positive equivalent
        remainder = ((remainder) + k) % k;

        if (map.has(remainder)) {
           count += map.get(remainder)
        }
        map.set(remainder, (map.get(remainder) ?? 0) + 1);
    }
    return count;
}

console.log(subarraysDivByK([4,5,0,-2,-3,1], 5));

// Problem 14
const findMaxLength = (arr) => {
    let map = new Map();
    map.set(0, -1);

    let currentSum = 0;
    let maxLen = 0

    for (let i = 0; i < arr.length; i++) {
        currentSum += arr[i] === 0 ? -1 : 1

        if (map.has(currentSum)) {
            let length = i - map.get(currentSum)
            maxLen = Math.max(maxLen, length)
        } else {
            map.set(currentSum, i);
        }
    }
    return maxLen;
}
console.log(findMaxLength([0,1,0,1,1,0,]));