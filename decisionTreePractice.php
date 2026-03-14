
// Question 1: Counting → frequency map
// steps:
// 1. function that takes a string sentence.
// 2. split string into words.
// 3. create map to hold word frequency.
// 4. create a variable to set max frequency and a variable to hold the result.
// 5. loop through the array, add each element to frequency.
// 6. if the count of a word is greater than the max, add the word to the result.
// 7. return result.

<?php
function mostFrequentWord($sentence)
{
    $words = preg_split('/\s+/', $sentence);
    $map = array_count_values($words);
    $max = 0;
    $result = null;

    foreach ($map as $value => $count) {
        if ($count > $max) {
            $max = $count;
            $result = $value;
        }
    }

    return $result;
}
?>
<script>

const mostFrequentWord = (sentence) => {
    let words = sentence.split(" ");
    let map = {};
    let max = 0
    let result = null;

    for (let word of words) {
         map[word] = (map[word] ?? 0) + 1;

         if (map[word] > max) {
             max = map[word];
             result = word;
         }
    }
    return result;
}
</script>

// Question 2: duplicates -> set
// steps:
// 1. create a seen variable;
// 2. split string into characters.
// 3. loop through the array,
// 4. if a character already exists in array, return true.
// 5. otherwise return false.

<?php
function isDuplicates($str): bool
{
    $seen = [];
    $chars = preg_split('//u', $str);

    foreach ($chars as $c) {
        if (isset($seen[$c])) {
            return true;
        }
        $seen[$c] = true;
    }

    return false;
}
?>
<script>

const isDuplicates = (str) => {
      let seen = new Set();
      let chars = str.split('');

      for (let c of chars) {
          if (seen.has(c)) {
            return true;
          } else {
             seen.add(c)
          }
      }
      return false;
}
</script>

// Question 3: collect results -> array
// steps:
// 1. create a sum variable.
// 2. create a result array.
// 3. loop through the array.
// 4. calculate the average value of the array.
// 5. if a number is greater the average add to result.
// 6. result average.

<?php
function numsBiggerThanAverage($arr): array
{
    $n = count($arr);
    $result = [];

    if ($n > 0) {
        $average = array_sum($arr) / $n;
        $result = array_values(array_filter($arr, fn ($num) => $num > $average));
    }

    return $result;
}
?>
<script>

const numsBiggerThanAverage = (arr) => {
    let n = arr.length;
    let result = [];

    if (n > 0) {
       const average = arr.reduce((s, n) => s + n) / n;
       result = arr.filter(n => n > average);
    }
    return result;
}
</script>

// Question 4: seen before? -> set
// steps:
// 1. create a seen array/set;
// 2. loop through the array.
// 3. if a number already in seen, return number;
// 4. otherwise add number to seen, return null;

<?php
function firstDuplicate($arr)
{
    $seen = [];

    foreach ($arr as $num) {
        if (isset($seen[$num])) {
            return $num;
        }
        $seen[$num] = true;
    }

    return null;
}
?>
<script>

const firstDuplicate = (arr) => {
   let seen = new Set();

   for (let num of arr) {
      if (seen.has(num){
         return num;
      }
      seen.add(num);
   }
   return null;
}
</script>

// Question 5: collect longest word -> array
// steps:
// 1. split the sentence into array of words.
// 1. create a variable to hold the longest word .
// 2. loop through the array,
// 3. loop through the array ignoring first element.
// 4. if current j is bigger than i, longest = j,
// 5. return longest

<?php
function longestWord($sentence)
{
    $words = preg_split('/\s+/', $sentence);
    $n = count($words);
    $longest = '';

    foreach ($words as $word) {
        if (strlen($word) > strlen($longest)) {
            $longest = $word;
        }
    }

    return $longest;
}
?>
<script>

const longestWord = (sentence) => {
   let words = sentence.split(' ');
   let n = sentence.length;
   let longest = [0];

   for (let word of words) {
       if (word.length > longest.length) {
         longest = word;
       }
   }
   return longest;
}
</script>

// Question 6: compare nums -> nested loop
// steps:
// 1. function that takes array and a target sum
// 2. loop through the array,
// 3. loop through the array skipping the first element loop
// 4. if element i + element j is equal to target, return true
// 5. return false.

<?php
function equalToTarget($arr, $target): bool
{
    for ($i = 0; $i < count($arr); ++$i) {
        for ($j = $i + 1; $j < count($arr); ++$j) {
            if ($arr[$i] + $arr[$j] === $target) {
                return true;
            }
        }
    }

    return false;
}
?>
<script>
const equalToTarget = (arr, target) => {
  for (let i = 0; i < arr.length; i++){
     for (let j = i + 1; j < arr.length; j++) {
       if (arr[j] + arr[i]  === target)
           return true;
     }
  }
  return false;
}
</script>

// Question 7: uniqueness/frequency of appears -> frequency
// steps:
// 1. create a map to map all numbers in array and a result array to store unique numbers
// 2. loop through the array
// 3. add all numbers to map.
// 4. loop through the map or count
// 5. if count is one add number to result array.
// 6 return result

<?php
function uniqueNumbers($arr): array
{
    $map = array_count_values($arr);
    $result = [];

    foreach ($map as $value => $count) {
        if ($count === 1) {
            $result[] = $value;
        }
    }

    return $result;
}
?>
<script>

const uniqueNumbers = (arr) => {
  const result = [];
  const map = {};

  for (let num of arr) {
    map[num] = (map[num] ?? 0) + 1;
  }

  for (const [key, value] of Object.entries(map)) {
    if (value === 1) result.push(Number(key));
  }
  return result;
}
</script>

// Question 8: substring -> sliding window
// step:
// 1. create a seen array/set to track characters already including in the substring
// 2. set the start at first element.
// 3. create variable to hold the longest substring
// 4. loop through the string
// 5. while a character already exists in the seen array, move the start to the next element,
// 6. otherwise add character to the seen array.
// 7. set the max substring.
// 8. return substring.

<?php
function longestSubstringUniqueCharacters($str)
{
    $seen = [];
    $s = 0;
    $maxLen = 0;

    for ($i = 0; $i < strlen($str); ++$i) {
        while (isset($seen[$str[$i]])) {
            unset($seen[$str[$s]]);
            ++$s;
        }
        $seen[$str[$i]] = true;
        $maxLen = max($maxLen, $i - $s + 1);
    }

    return $maxLen;
}
?>
<script>

const longestSubstringUniqueCharacters = (str) => {
   let seen = new Set();
   let s = 0;
   let $maxLen = 0;

   for (let i = 0; i < str.length; i++) {
       while (seen.has(str[i])) {
           seen.delete(str[s]);
           s++;
       }
       seen.add(str[i]);
       maxLen = Math.max(maxLen, i - s +1);
   }
   return maxLen;
}
</script>

// Question 9: collect sum -> array
// step:
// 1. create variable sum to record sum of all evens.
// 2. loop through array
// 3. if num % 2 = 0
// 4. add to sum, return sum.

<?php
function sumOfEven($arr)
{
    $sum = 0;

    foreach ($arr as $num) {
        if ($num % 2 === 0) {
            $sum += $num;
        }
    }

    return $sum;
}
?>
<script>

const sumOfEven = (arr) => {
  let sum = 0;

  for (let num of arr) {
   if (num % 2 === 0) {
    sum += num;
   }
  }
  return sum;
}
</script>

// Question 10: compare elements -> nested loop
// step:
// 1. create result array
// 2. loop through array
// 3. loop through array using next element
// 4. if element === another element, increment result for total pairs
// 5. return result

<?php
function numberOfPairs($arr)
{
    $totalPairs = 0;

    for ($i = o; $i < count($arr); ++$i) {
        for ($j = $i + 1; $j < count($arr); ++$j) {
            if ($arr[$i] === $arr[$j]) {
                ++$totalPairs;
            }
        }
    }

    return $totalPairs;
}
?>
<script>

const numberOfPairs = (arr) => {
  let totalPairs = 0;

  for (let i = 0; i < arr.length; i++) {
      for (let j = i + 1; j < arr.length; j++) {
        if (arr[i] === arr[j]) {
            totalPairs++
         }
      }
  }
  return totalPairs;
}