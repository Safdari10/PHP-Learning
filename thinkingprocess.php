<!-- 
1. find smallest number in array, a loop + accumulator problem
array example; [8, 3, 12, 1, 6] and the expected result is 1;

step 1:  start with the first element and compare with the rest
start with 8
3 smaller 8 
12 bigger 3 ignore
1 smaller then 3
6 is bigger then 1 ignore
final answer is 1

so keep track of the smallest value.

step 2: coding steps;
1. store the first eleement as smallest
2. loop through array
3. if number is smaller then smallest
4. update smallest
5. return smallest 


2. return an array containting only the even numbers in an array; a filter problem
array example: [1, 2, 3, 4, 5, 6] and the expected result is [2, 4, 6];

step 1: check which elements are even
1 is odd -ignore
1 is even - keep
3 is odd - ignore
4 is even - keep
5 is odd - ignore
6 is even - keep

step 2: coding steps;
1. create an empty result array
2. loop through all numbers
if the remainder of number divided by two is 0
3. add number to result array
4. return result array



3. count how many times each word appears in a sentence. a sequence problem
example: "apple banana apple orange banana apple" and the expected result is {"apple": 3, "banana": 2, "orange": 1};

step 1: check how many time each word is in the array
apple - 3 times
banana - 2 times
orange - 1 time

step 2: coding steps;
1. create an empty result object
2. convert the string into words, split by space and clean spaces
3. handle empty string
4. loop through each word 
5. if word is not in result object, add word to result object with count 1
6 if word is already in result object, increment count by 1
7. return the result object

-->

<!-- 
problem 1: return total number of even numbers in an array.

steps:
1. create an empty result variable.
2. loop through the array,
3. if the number is even, increment the result variable by 1.
4. return the result.
-->

function totalEvens($arr) {
$evenCount = 0;

foreach ($arr as $num) {
if ($num % 2 === 0) {
$evenCount++;
}
}
return $evenCount;
}

const totalEvens = (arr) => {
let evenCount = 0;

for (let num of arr) {
if (num % 2 === 0) {
evenCount++;
}
}
return evenCount;
}



<!-- 
problem 2: return a reversed string: string processing problem

steps:
1. convert string into array of characters
2. reverse array
3. join characters back into a string
-->

function reversedString($str) {
return strrev($cleaned);
}


const reversedString = (str) => {
return cleaned.split('').reverse().join('')
}

<!-- 
problem 3: find largest word in a sentence. loop and accumulator problem

steps:
1. create an emtpy result string to store the largest word.
2. split the sentence into words using the explode/split functions.
3. loop through each word,
4. if the length of a word is > then the result string length, add to the result string.
5. return the result string.
-->

function largestWord($str) {
$largest = "";
$words = explode(" ", $str, -1, PREG_SPLIT_NO_EMPTY);

foreach($words as $word) {
if(strlen($word) > strlen($largest)){
$largest = $word;
}
}
return $largest;
}

const largestWord = (str) => {
let largest = "";
let words = str.split(' ').filter(word => word !== " ");

for(let word of words) {
if(word.length > largest.length) {
largest = word;
}
}
return largest;
}

<!-- 6 important common problems -->


<!-- 
1. find second largest number in array; loop and accumulator problem

steps
1. create empty largest variable.
2. create a result variable to store the second largest number.
3. loop through array
4. if the current element is larger then the largest variable, update the largest variable
5 otherwise if the current element is larger then the result variable, update the result variable.
6. return the result variable.
-->

<?php
function secondLargest(array $arr)
{
    if (count($arr) < 2)
        return null;

    $largest = $arr[0];
    $second = null;

    foreach ($arr as $num) {
        if ($num > $largest) {
            $second = $largest;
            $largest = $num;
        } elseif ($num !== $largest && ($second === null || $num > $second)) {
            $second = $num;
        }
    }

    return $second;
}

// shorter version using sort
function secondLargestShort($arr)
{
    $sorted = $arr;
    rsort($sorted);
    return count($sorted) < 2 ? null : $sorted[1];
}

?>

<script
const secondlargest = (arr) => {
    if (arr.length < 2) {
        return null;
    }
    let largest = arr[0];
    let second = null;

    for (let num of arr) {
       if (num > largest) {
        } else if (num !== largest && (second === null || num > second)) {
           largest = num;

        } else if (num !== largest && ( second === null || num > second)) {
              second = num;
        }
    }
    return second;
    
}

// shorter version
const secondLargestShort = (arr) => {
  return (arr.length < 2) ? null : [...arr].sort((a, b) => b - a)[1];
};

</script>
<!-- 
2. Check if Array Contains Duplicates, seen and set problem

steps: 
1. create a seen array to keep track of seen numbers.
2. loop through array
3. if number already exists in seen array, return true.
4. otherwise, return false.
-->
<?php
function containDuplicates($arr)
{
    $seen = [];

    foreach ($arr as $num) {
        if (isset($seen[$num])) {
            return true;
        }

        $seen[$num] = true;
    }

    return false;
}
?>

<script>
const containDuplicates = (arr) => {

  let seen = new Set();

  for (let num of arr) {

    if (seen.has(num)) {
      return true;
    }

    seen.add(num);
  }

  return false;
};

//shorter js version.
const containDuplicates = (arr) => {
    return new set(arr).size !== arr.length
}

</script>

<!-- 
3. return a sentence where each word starts with a capital letter. string processing problem

steps:
1. convert string into array of words.
2. loop through each word
3. if the first character of a word is lowerCase, convert to upperCase.
3. join words back into a string
4. return string. 
-->
<?php
function capitalizeWords($str)
{
    $words = preg_split('/\s+/', $str);
    $length = count($words);

    for ($i = 0; $i < $length; $i++) {
        $words[$i] = ucfirst($words[$i]);
    }

    return implode(' ', $words);
}

// shorter version
function capitalizeWordsShort($str)
{
    return ucwords($str);
}

?>


const capitalizeWords = (str) => {

  let words = str.split(" ");

  for (let i = 0; i < words.length; i++) {
    words[i] =
      words[i][0].toUpperCase() +
      words[i].slice(1);
  }

  return words.join(" ");
};


// shorter alternative
const capitalizeWords1 = (str) => {
    return str.split(" ").map(word => word[0].toUpperCase() + word.slice(1)).join(" ");
}

// shorter alternative
const capitalizeWords2 = (str) {
    return str.replace(/\b[a-z]/g, (match) => match.toUpperCase());
}



<!-- 
4. return true if any two numbers add tup to a target number, nested loop (compare) problem

steps;
1. create a function that takes an array and a target number.
2. loop through the array,
3. loop through the array again skipping current element,
4. if the sum of two numbers is equal to the target number, return true.
5. return false.
-->

<?php
function twoNumSum($arr, $target) {
    foreach ($arr as $num) {
        foreach($arr as $num2) {
            if ($num + $num2 == $target) {
                return true;
            }
        }
    }
    return false;
}

?>
<script>
const twoNumSum = (arr, target) => {
   for (let i = 0; i < arr.length; i++) {
    for (let j = i + 1; j < arr.length; j++) {
        if (arr[i] + arr[j] == target) {
            return true;
        }
    }
   }
   return false;
}

</script>

<!-- 
5. SQL aggregation
-->
<sql>
SELECT c.name AS customer_name,
       COUNT(o.id) AS order_count
FROM Customers c
JOIN Orders o
ON c.id = o.customer_id
GROUP BY c.id, c.name
HAVING COUNT(o.id) > 2;
</sql>


<!-- 
6. return longest unique word in a sentence. frequency problem

steps:
1. split sentence into words.
2. count frequency of each word.
3. create an empty result variable to store the longest unique word.
4. loop through each word that is unique,
5. if the length of the word is greater than the result variable length, update the result variable.
6. return the result variable.
-->

<?php

function longestUniqueWord($str) {
    $words = preg_split('/\s+/', $str);
    $wordsCount = array_count_values($words);
    $longest = "";

    foreach ($words as $word) {
        if ($wordsCount[$word] === 1 && strlen($word) > strlen($longest)) {
            $longest = $word;
        }
    }
    return $longest;
}

?>

<script>

const longestUniqueWord = (str) => {
    let words = str.split(" ");
    let freq = {};
    
    for (let word of words) {
        if (!freq[word]) {
            freq[word] = (freq[word] || 0) + 1
        }
    }

    let longest = " ";
    for (let word of words) {
        if (freq[word] === 1 && word.length > longest.length) {
            longest = word;
        }
    }
    return longest;

}

</script>


 <!--
problem: retun the first character in a string that does not repeat. frequency problem

steps: 
1. split string into array of characters.
2. count frequency of each character.
3. loop through each character,
4. if the frequency of a character is 1, return that character.
5. return null.
 -->

<?php
function firstNonRepeatingChar($str) {
    $char = str_split($str);
    $charCount = array_count_values($char);
    foreach ($char as $c) {
        if ($charCount[$c] === 1) {
            return $c;
        }
    }
   return null;
}

?>

<script>
const firstNonRepeatingChar = (str) => {
    let char = str.split('');
    let charCount = {};

    for (let c of char) {
        charCount[c] = (charCount[c] || 0) + 1;
    }

    
    for (let c of char) {
        if (charCount[c] === 1) {
            return c;
        }
    }
    return null;
}