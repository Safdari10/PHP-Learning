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

// Question 3:
function pageCount(n, p) {
  let fromFront = Math.floor(p / 2); // Calculate the number of page turns from the front since each page turn flips 2 pages

  // let fromBack = Math.floor((n - p) / 2); // Calculate the number of page turns from the back by finding how many pages are left after page p and dividing by 2,
  // but this fails when n is even and p is odd because it doesn't account for the fact that the last page may be on the left side of the book

  // let fromBack = Math.floor((n - p + 1) / 2); // Adjust the calculation for the back by adding 1 to account for the last page being on the left side when n is even and p is odd,
  // but this also fail because it over compensates when n is odd and p is even because it adds an extra page turn that isn't needed

  let fromBack = Math.floor(n / 2 - fromFront); // Alternatively, we can calculate from the back by subtracting the front count from the total number of page turns in the book,
  // which is n/2 since each page turn flips 2 pages, this way we don't have to worry about the even/odd issue with n and p

  return Math.min(fromFront, fromBack); // Return the minimum of the two counts to find the least number of page turns needed
}

// we can simply above
function pageCount1(n, p) {
  return Math.min(Math.floor(p / 2), Math.floor(n / 2 - Math.floor(p / 2)));
}

// Question 4:
function towerBreakers(n, m) {
  if (m === 1 || n % 2 === 0) {
    return 2; // If all towers are already of height 1, player 2 wins by default since player 1 has no valid moves, or if there are an even number of towers, player 2 can always mirror player 1's moves to maintain an even number of towers and win
  } else {
    return 1; // If there are an odd number of towers and they are taller than 1, player 1 can always win by reducing the height of one tower to 1 on the first move, leaving an even number of towers for player 2, and then mirroring player 2's moves to maintain an even number of towers and win
  }
}

// we can simplify the above function to a single return statement
function towerBreakers1(n, m) {
  return m === 1 || n % 2 === 0 ? 2 : 1;
}

// Question 5:
function ceasarCipher(s, k) {
  let result = "";
  k = k % 26; // We optimize the shift by using modulo 26 since shifting by 26 or any multiple of 26 results in the same letter

  for (let i = 0; i < s.length; i++) {
    let char = s[i];

    // Check if character is a letter
    if (char >= "a" && char <= "z") {
      // Shift lowercase letter
      let newCode = char.charCodeAt(0) + k;
      if (newCOde > "z".charCodeAt(0)) {
        newCode -= 26; // Wrap around;
      }
      result += String.fromCharCode(newCode);
    } else if (char >= "A" && char <= "Z") {
      // Shift uppercase letter
      let newCode = char.charCodeAt(0) + k;
      if (newCode > "Z".charCodeAt(0)) {
        newCode -= 26; // Wrap around
      }
      result += String.fromCharCode(newCode);
    } else {
      // Non-letters remain unchanged
      result += char;
    }
  }

  return result;
}

// we use a concise alternative for above
function ceasarCipher1(s, k) {
  k = k % 26;
  return s
    .split("")
    .map((char) => {
      if (char >= "a" && char <= "z") {
        return String.fromCharCode(((char.charCodeAt(0) - 97 + k) % 26) + 97); // Shift lowercase letter and wrap around using modulo
      }
      if (char >= "A" && char <= "Z") {
        return String.fromCharCode(((char.charCodeAt(0) - 65 + k) % 26) + 65);
      }
      return char; // Non-letters remain unchanged
    })
    .join("");
}

// Question 6:
function maxMin(k, arr) {
  arr.sort((a, b) => a - b);
  let minUnfairness = Infinity;

  for (let i = 0; i <= arr.length - k; i++) {
    let unfairness = arr[i + k - 1] - arr[i]; // Calculate the unfairness for the current window of size k, -1 because the index starts at 0
    minUnfairness = Math.min(minUnfairness, unfairness); // Update the minimum unfairness if the current unfairness is smaller
  }

  return minUnfairness;
}

// Question 7:
function dynamicArray(n, queries) {
  let seqList = Array.from({ length: n }, () => []); // Create an array of n empty sequences
  let lastAnswer = 0;
  let results = [];

  for (let [type, x, y] of queries) {
    let seqIndex = (x ^ lastAnswer) % n; // Calculate the index of the sequence to operate on using XOR and modulo

    if (type === 1) {
      seqList[seqIndex].push(y); // Append y to the sequence at seqIndex
    } else if (type === 2) {
      lastAnswer = seqList[seqIndex][y % seqList[seqIndex].length]; // Update lastAnswer to the value at index y % size of the sequence at seqIndex
      results.push(lastAnswer);
    }
  }
  return results;
}

// Question 8:
function gridChallenge(grid) {
  // Sort each row of the grid
  for (let i = 0; i < grid.length; i++) {
    grid[i] = grid[i].split("").sort().join("");
  }

  // Check if columns are sorted
  for (let col = 0; col < grid[0].length; col++) {
    for (let row = 1; row < grid.length; row++) {
      if (grid[row][col] < grid[row - 1][col]) {
        // Compare the current cell with the cell above it in the same column
        return "NO"; // If any column is not sorted, return "NO"
      }
    }
  }
  return "YES"; // If all columns are sorted, return "YES"
}
