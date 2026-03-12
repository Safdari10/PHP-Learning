<!-- sliding window pattern -->

<!--
Question 1 — Maximum sum of any subarray of size k

Goal:
- Given an array of numbers and an integer k, return the maximum sum of any contiguous subarray of length k.

Algorithm (sliding window):
1. If k is larger than the array length or k <= 0, return null (invalid input).
2. Compute the sum of the first k elements — this is the initial window sum.
3. Set maxSum = current window sum.
4. Slide the window one step to the right repeatedly: add the next element and subtract the element that falls out of the window.
5. After each slide, update maxSum if current window sum is larger.
6. Return maxSum.

-->

<?php
function maxSumSubarray(array $arr, int $k): ?int {
    $n = count($arr);
    if ($k <= 0 || $k > $n) return null;

    $currentSum = 0;
    for ($i = 0; $i < $k; $i++) {
        $currentSum += $arr[$i];
    }

    $maxSum = $currentSum;
    for ($i = $k; $i < $n; $i++) {
        $currentSum += $arr[$i] - $arr[$i - $k];
        if ($currentSum > $maxSum) $maxSum = $currentSum;
    }
    return $maxSum;
}

?>
<script>
const maxSumSubarray = (arr, k) => {
    let n = arr.length;
    if (k <= 0 || k > n) return null;

    let currentSum = 0;
    for (let i = 0; i < k; i++) {
        currentSum += arr[i];
    } 

    let maxSum = currentSum;

    for (let i = k; i < n; i++) {
        currentSum += arr[i] - arr[i - k];
        if (currentSum > maxSum) maxSum = currentSum;
    }
    return maxSum;
}
</script>
<!-- 
Question 2
steps:
1. create a seen array/set to store seen characters.
2. create a variable to store the longest substring without repeating characters.
3. iterate through the string.
4. for each character, if it is already in the seen array, update the start index to the next position of the last occurrence of the character.
5. add the character to the seen array.
6. update the longest substring length if the current substring length is greater than the longest substring length.
7. return the longest substring length.
-->

<?php
function longestSubstringWithoutRepeatingCharacters($str) {

    $seen = [];
    $longest = 0;
    $start = 0;

    for ($i = 0; $i < strlen($str); $i++) {

        while (isset($seen[$str[$i]])) {
            unset($seen[$str[$start]]);
            $start++;
        }

        $seen[$str[$i]] = true;
        $longest = max($longest, $i - $start + 1);
    }

    return $longest;
}
?>
<script>
const longestSubstringWithoutRepeatingCharacters = (str) => {
    let seen = new Set();
    let longest = 0;
    let s = 0;

    for (let i = 0; i < str.length; i++) {
        while (seen.has(str[i])) {
            seen.delete(str[s]);
            s++;
        }
        seen.add(str[i]);
        longest = Math.max(longest, i - s + 1);
    }
    return longest;
}
</script>

<!-- 
Question 3
steps: 
1. create a map to store character frequencies.
2. create a start index to keep track of the start of the string.
3. create a variable to keep track of the maximum length of the substring.
4. iterate through the string.
5. map each character to its frequency.
6. while the count of the map is greater then 2, remove the character at the start index from the map.
7. and if we are at the start of the string, unset the start index and move the start index by 1.
8. max length will 
-->

<?php


?>
<script>

</script>

<!-- 
Question 4
step:
1. create a function that takes an array and a target value.
2. create a seen array/set to store seen values.
3. create a start index to keep track of the start of the subarray.
4. create a variable to keep track of the minimum length of the subarray.
5. iterate through the array.
6. for each element, if it is already in the seen array, update the start index to the next position of the last occurrence of the element.
7. add the element to the seen array.
8. update the minimum length of the subarray if the current subarray length is less than the minimum length and the current subarray sum is equal or greater than the target.
9. return the minimum length of the subarray.
-->
<?php
function minSubarrayWithTargetSum($arr, $target) { 
    $n = count($arr);
    $s= 0;
    $minLen = PHP_INT_MAX;
    $sum = 0;

    for ($e = 0; $e < $n; $e++) {
        $sum += $arr[$e];
        
        while ($sum >= $target) {
            $minLen = min($minLen, $e - $s + 1);
            $sum -= $arr[$s];
            $s++;
        }
    }

    return $minLen === PHP_INT_MAX ? 0 : $minLen;
}
?>
<script>
const minSubarrayWithTargetSum = (arr, target) => {

  let s = 0;
  let minLen = Number.POSITIVE_INFINITY;
  let sum = 0;

  for (let e = 0; e < arr.length; e++) {

    sum += arr[e];

    while (sum >= target) {
      minLen = Math.min(minLen, e - s + 1);
      sum -= arr[s];
      s++;
    }
  }

  return minLen === Number.POSITIVE_INFINITY ? 0 : minLen;
};
</script>