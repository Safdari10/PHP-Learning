
<!-- Frequency Map Pattern -->

<!-- 
Question 1
steps:
1. create empty map object/associative array to store characters and their frequencies.
2. split the string into characters.
3. loop through each character in the array,
4. if the current character is already in the map, increment its count.
5. otherwise, add the character to the map with count 1.
6. return the map object.
-->

<?php
function characterMap($str) {
    $map = [];
    $chars = strtolower(preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY));

    foreach ($chars as $c) {
       $map[$c] = ($map[$c] ?? 0) + 1; 
    }
    return $map;
}


function characterMapshort($str) {
    return array_count_values(strtolower(preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY)));
}
?>

<script>
const characterMap = (str) => {
    let map = {};
    let chars = str.toLowerCase().split("");

    for (c of chars) {
        map[c] = (map[c] ?? 0) + 1;
    }
    return map;
}

</script>

<!-- question 2:
 steps:
 1. create map object/associative array to store number frequency.
 2. initialize a variable with 0 to set the max frequency to 0.
 3. create a result variable to store the most frequent number.
    4. loop through each number in the array,
    5. if the current number's frequency is greater than the max frequency, update max frequency and result.
    6. return the result variable.
    7. if no number is found, return null.
 
-->

<?php
function mostFrequentNumber($arr) {
    if (empty($arr)) return null;
    $map = array_count_values($arr);
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

function mostFrequentNumbershort($arr) {
    return array_search(max(array_count_values($arr)), array_count_values($arr));
}
?>

<script>
const mostFrequentNumber = (arr) => {
    let map = {};
    let max = 0;
    let result = null;

    for (let num of arr) {
        map[num] = (map[num] ?? 0) + 1;

        if (map[num] > max) {
            max = map[num];
            result = num;
        }
    }
    return result;
}

</script>

<!-- 
Question 3
steps:
1. create function that takes two str as arguments.
2a. insure both strings are of the same length.
2b. split the first string into characters.
3. split the second string into characters.
4. loop through each character in the first string,
5. if current character is not found in the second string, return false.
6. return true if all characters in the first string are found in the second string.
-->

<?php
function isAnagram($str1, $str2) {
      if (strlen($str1) !== strlen($str2)) return false;

      return array_count_values(str_split($str1)) === 
      array_count_values(str_split($str2));
}
?>

<script>
const isAnagram = (str1, str2) => {
    if (str1.length !== str2.length) return false;
    let map = {};

    for (let c of chars1) {
        map[c] = (map[c] ?? 0) + 1;
    }
    
    for (let c of chars2) {
        if (!map[c]) return false;
        map[c]--;
    }
}
</script>


<!-- 
Question 4
steps:
1. create a map object/associative array to store character frequencies.
2. split the string into characters.
3. loop through each character in the array,
4. if the current character is already in the map, increment its count.
5. otherwise, add the character to the map with count 1.
6. loop through the map and return the first character that appears only once.
-->

<?php
function firstUniqueChar($str) {
    $chars = strtolower(preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY));
    $charCount = array_count_values($chars);

    foreach ($chars as $c) {
        if ($charCount[$c] === 1) {
            return $c;
        }
    }
    return null;
}
?>
<script>
const firstUniqueChar = (str) => {
    let charCount = {};
    let chars = str.toLowerCase().split("");

    for (let c of chars) {
        charCount[c] = (charCount[c] ?? 0) + 1;
    }

    for (let char of charCount) {
         if (charCount[char]  === 1) {
            return char;
        }
    }
    return null;
}