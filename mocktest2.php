
<!-- question 1: seen & set

steps: 
1. create a seen array to keep track of seen numbers.
2. create a result array to store the unique numbers.
3. loop through array
4. if number already exists in seen array, skip it.
5. otherwise, add number to result array.
-->

<?php
function removeDuplicates($arr) {
    $seen = [];
    $result = [];

    foreach ($arr as $num) {
        if (!isset($seen[$num])){
            $seen[$num] = true;
            $result[] = $num;
        }
    }
    return $result;
}

// shorter 
function removeDups($arr) {
    return array_unique($arr);
}

?>

<script>
const removeDuplicates = (arr) => {
    let seen = new Set();
    let result = [];

    for (let num of arr) {
        if (!seen.has(num)) {
            seen.add(num);
            result.push(num);
        }
    }
    return result
}

// shorter
const removeDups = (arr) => {
    return [...new Set(arr)];
}

</script>

<!-- question 2: sequence map

steps:
1. split sentence into words
2. create a map to store word frequencies
3. loop through words
4. if word already exists in map, increment its count.
5. otherwise, add word to map with count 1.
7. loop through map and return first unique word
-->

<?php
function firstUniqueWord($arr) {
    $words = preg_split('/\s+/', $arr);
    $map = array_count_values($words);

    foreach ($words as $word){
        if ($map[$word] === 1) {
            return $word;
        }
    }
    return null;
}
?>

<script>
const firstUniqueWord = (str) => {
    let words = str.split(" ");
    let map = {};
    for (let word of words){
        map[word] = (map[word] || 0) + 1;
    }

    for (let word of words) {
        if (map[word] === 1) {
            return word;
        }
    }
    return null;
}

</script>

<!-- question 3: stack problem

steps:

1. create an empty stack.
2. loop through array
3. push element to stack.
4. pop element from stack.
6. return the stack.

-->
<?php
function validParentheses($str) {
    $stack = [];
    foreach($str as $char) {
        if ($char === '(') {
            array_push($stack, $char);
        } elseif ($char === ')') {
            if (count($stack === 0)){
                return false;
            }
            array_pop($stack, $char);
        }
    }
    return count($stack) === 0;
}
?>

<script>
const validParenthese = (str) => {
    let stack = [];
    for (let char of str){
        if (char === '('){
            stack.push(char);
        } else if (char === ')'){
            if (stack.length === 0){
                return false
            }
            stack.pop();
        }
    }
    return stack.length === 0;
}

</script>

<!-- question 4: nested loop (compare)

steps:
1. create function that takes an array and a target value as parameters.
2. loops through array
3. loops through array again skipping the first loop index
4. compare sum of current index and next index to the target value
5. if the sum of the numbers is equal to the target return those numbers.
6. otherwise return numbers whose value is closest to the target value.
-->

<?php
function findClosestSum($arr, $target) {
    $n = count($arr);
    $sum = [];
    $closestSum = null;
    $closestPair = null;
    for ($i = 0;  $i < $n; $i ++){
        for ($j = $i + 1; $j < $n; $j ++){
            $sum = $arr[$i] + $arr[$j];

            if ($sum === $target) {
                return [$arr[$i], $arr[$j]];
            } else if ($closestSum === null || abs($target - $sum) < abs ($target - $closestSum) ) {
                $closestSum = $sum;
                $closestPair = [$arr[$i], $arr[$j]];
            }
        }
        }
       
        return $closestPair;
}
?>

<script>
const findClosestSum = (arr, target) => {
    let n = arr.length;
    let sum = [];
    let closestSum = null;
    let closestPair = null;

    for (let i = 0; i < n; i++) {
        for (let j = i + 1; J < n; j++) {
            sum = arr[i] + arr[j];

            if (sum === target) {
                return [arr[i] + arr[j]];
            } if (closestSum === null || abs(target - sum) < abs(target - closestSum)) {
                closestSum = sum;
                closestPair = [arr[i], arr[j]];
            }
        }
    }
    return closestPair;
}

</script>

<!-- 
question 5 SQL aggregation

SELECT c.id, c.name AS customer_name, SUM(o.amount) AS total_spent
FROM Customers c
LEFT JOIN Orders O
ON c.id = o.customer_id
GROUP By c.id, n.name
HAVING total_spent > 500

-->

<!-- 
question 6 string processing
-->

<?php
function reverseWords($sentence) {
    $words = preg_split('/\s+/', $sentence);
    $reversedWords = array_reverse($words);
    return implode(" ", $reversedWords);
}
?>

<script>
const reverseWords = (sentence) => {
    return sentence.split(" ").reverse().join(" ");
}
</script>

<!-- 
question 7  loop and accumulator problem

steps:
1. create variable to store missing number
2. find the sum of all numbers from 1 to N
3. fin the sum of all numbers in the array
4. subscract the sum of the array from the sum of all numbers from 1 to N
5. return the missing number
-->

<?php
function findMissingNumber($arr) {
    $N = count($arr) + 1;
    $sum = ($N * ($N + 1)) / 2;
    $actualSum = array_sum($arr);
    return $sum - $actualSum;
}
?>

<script>
const findMissingNumber = (arr) => {
    let N = arr.length + 1;
    let sum = (N * (N + 1)) / 2;
    let actualSum = arr.reduce((acc, num) => acc + num, 0);
    return sum - actualSum;
}
</script>

<!-- 
question 8 length of longest substring with no repeating characters: seen and set

steps:
1. create an array to keep track of seen characters
2. create start variable to keep track of start of substring
3. create max length variable to keep track of maximum length of substring
4. loop through array
5. if character is already in seen array, update start variable to the next index of the character
6. add character to seen array
7. update max length variable if current substring length is greater than max length
8. return max length variable
-->

<?php
function longestSubstringWithoutRepeatingCharacters($str) {
    $seen = [];
    $s = 0;
    $maxLen = 0;

    for ($e = 0; $e < strlen($str); $e++) {
        while (isset($seen[$str[$e]])) {
            unset($seen[$str[$s]]);
            $s++;
        }
        $seen[] = $str[$e];
        $maxLen = max($maxLen, $e - $s + 1);
    }
    return $maxLen;
}
?>

<script>
const longestSubstringWithoutRepeatingCharacters = (str) => {
    let seen = new Set();
    let s = 0;
    let maxlen = 0;

    for (let e = 0; e < str.length; e++) {
        while (seen.has(str[e])){
            seen.delete(str[s]);
            s++;
        }
        seen.add(str[e]);
        maxlen = Math.max(maxlen, e - s + 1);
    }
    return maxlen
}

