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
