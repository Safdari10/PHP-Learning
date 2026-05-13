// Problem 1:
function findMax(arr: number[]): number {
  if (arr.length === 0) return NaN;
  let max = arr[0];

  for (let i = 0; i < arr.length; i++) {
    if (arr[i] > max) {
      max = arr[i];
    }
  }

  return max;
}

// Problem 2:
function findMin(arr: number[]): number {
  if (arr.length === 0) return NaN;
  let min = arr[0];

  for (let i = 0; i < arr.length; i++) {
    if (arr[i] < min) {
      min = arr[i];
    }
  }

  return min;
}

// Problem 3:
function countGreaterThanFive(arr: number[]): number {
  let count = 0;

  for (let i = 0; i < arr.length; i++) {
    if (arr[i] > 5) {
      count++;
    }
  }

  return count;
}

// Problem 4:
function sumOfEvenNumbers(arr: number[]): number {
  let sum = 0;

  for (let i = 0; i < arr.length; i++) {
    if (arr[i] % 2 === 0) {
      sum += arr[i];
    }
  }

  return sum;
}

// Problem 5:
function findLargestEvenNumber(arr: number[]): number | null {
  let largestEven = null;

  for (let i = 0; i < arr.length; i++) {
    if (arr[i] % 2 === 0) {
      if (largestEven === null || arr[i] > largestEven) {
        largestEven = arr[i];
      }
    }
  }

  return largestEven;
}

// Problem 6:
function countOddGreaterThanTen(arr: number[]): number {
  let count = 0;

  for (let num of arr) {
    if (num % 2 !== 0 && num > 10) {
      count++;
    }
  }

  return count;
}

// Problem 7:
function findIndexOfMax(arr: number[]): number {
  let maxIndex = 0;

  for (let i = 0; i < arr.length; i++) {
    if (arr[i] > arr[maxIndex]) {
      maxIndex = i;
    }
  }

  return maxIndex;
}

// Problem 8:
function findIndexOfLargestOdd(arr: number[]): number | null {
  let maxIndex: number | null = null;

  for (let i = 0; i < arr.length; i++) {
    if (arr[i] % 2 !== 0) {
      if (maxIndex === null || arr[i] > arr[maxIndex]) {
        maxIndex = i;
      }
    }
  }

  return maxIndex;
}

// Problem 9:
function hasDuplicate(arr: number[]): boolean {
  const seen = new Set<number>();

  for (let num of arr) {
    if (seen.has(num)) {
      return true;
    }

    seen.add(num);
  }

  return false;
}

// Problem 10:
function countFrequency(arr: number[]): Record<number, number> {
  const freq: Record<number, number> = {};

  for (const num of arr) {
    if (freq[num]) {
      freq[num]++;
    } else {
      freq[num] = 1;
    }
  }

  return freq;
}

function countFrequency1(arr: number[]): Record<number, number> {
  const freq: Record<number, number> = {};

  for (const num of arr) {
    freq[num] = (freq[num] || 0) + 1;
  }

  return freq;
}

// Problem 11:
function firstDuplicate(arr: number[]): number | null {
  const seen = new Set<number>();

  for (let num of arr) {
    if (seen.has(num)) {
      return num;
    }
    seen.add(num);
  }

  return null;
}

// Problem 12:
function isAnagram(str1: string, str2: string): boolean {
  if (str1.length !== str2.length) {
    return false;
  }

  const freq: Record<string, number> = {};

  for (const char of str1) {
    freq[char] = (freq[char] || 0) + 1;
  }

  for (const char of str2) {
    if (!freq[char]) {
      return false;
    }

    freq[char]--;
  }

  return true;
}

// Problem 13:
function twoSum(arr: number[], target: number): number[] | null {
  const seen = new Set<number>();

  for (const num of arr) {
    const needed = target - num;

    if (seen.has(needed)) {
      return [needed, num];
    }

    seen.add(num);
  }

  return null;
}

// Problem 14:
function isPalindrome(str: string): boolean {
  let left = 0;
  let right = str.length - 1;

  while (left < right) {
    if (str[left] !== str[right]) {
      return false;
    }

    left++;
    right--;
  }

  return true;
}

// Problem 15:
function hasPairWithTarget(arr: number[], target: number): boolean {
  let left = 0;
  let right = arr.length - 1;

  while (left < right) {
    const sum = arr[left] + arr[right];

    if (sum === target) {
      return true;
    }

    if (sum < target) {
      left++;
    } else {
      right--;
    }
  }

  return false;
}

// Problem 16:
function removeDuplicates(arr: number[]): number[] {
  if (arr.length === 0) {
    return [];
  }

  let uniqueIndex = 0;

  for (let i = 1; i < arr.length; i++) {
    if (arr[i] !== arr[uniqueIndex]) {
      uniqueIndex++;
      arr[uniqueIndex] = arr[i];
    }
  }

  return arr.slice(0, uniqueIndex + 1);
}
