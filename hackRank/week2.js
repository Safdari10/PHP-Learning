// Question 1:
function sockMerchant(n, arr) {
  let pairs = 0;
  let colors = {};

  for (let i = 0; i < n; i++) {
    let color = arr[i];
    colors[color] = (colors[color] ?? 0) + 1;
  }

  for (let color in colors) {
    pairs += Math.floor(colors[color] / 2);
  }

  return pairs;
}

// alternative solution using a Set to track unpaired socks
function sockMerchant1(n, arr) {
  let seen = new Set();
  let pairs = 0;

  for (let i = 0; i < n; i++) {
    if (seen.has(arr[i])) {
      pairs++;
      seen.delete(arr[i]);
    } else {
      seen.add(arr[i]);
    }
  }

  return pairs;
}

// Question 2:
function zigZagSequence(a, n) {
  a.sort((x, y) => x - y); // Sort the array in ascending order
  let mid = Math.floor(n / 2); // Find the middle index
  let temp = a[mid]; // Store the middle element in a temporary variable
  a[mid] = a[n - 1]; // Move the last element to the middle
  a[n - 1] = temp; // Move the middle element to the end

  // Reverse the second half of the array
  let start = mid + 1; // Start from the element right after the middle
  let end = n - 2; // End at the element right before the last since the last element is already in place from swapping with the middle
  while (start < end) {
    let temp = a[start]; // Store the current element in a temporary variable
    a[start] = a[end]; // Move the end element to the current position
    a[end] = temp; // Move the current element to the end position
    start++;
    end--;
  }
}

// we can do the swap and reverse without temp variable by using destructuring assignment in JavaScript
function zigZagSequence1(a, n) {
  a.sort((a, b) => a - b);
  let mid = Math.floor(n / 2);
  [a[mid], (a[n - 1] = [a[n - 1], a[mid]])]; // Swap the middle element with the last element using destructuring assignment

  // order right side
  let left = mid + 1;
  let right = n - 2;
  while (left < right) {
    [a[left], a[right]] = [a[right], a[left]]; // Swap the left and right elements using destructuring assignment
    left++;
    right--;
  }
}
