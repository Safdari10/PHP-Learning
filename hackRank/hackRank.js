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
