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
