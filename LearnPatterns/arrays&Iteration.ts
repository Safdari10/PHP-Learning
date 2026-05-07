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
