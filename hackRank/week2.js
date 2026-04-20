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
