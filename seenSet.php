<!-- Seen / Set Pattern -->

<!-- Question 1
steps:
1. create an empty array to store seen numbers.
2. loop through each number in the array,
3. if number is not in seen, add it to seen array.
4. if any number is already in seen, return true.
5. otherwise, return false.
-->

<?php
function detectDuplicates($arr) {
    $seen = [];

    foreach ($arr as $num) {
        if (isset($seen[$num])){
           return true;
        } else {
            $seen[$num] = true;
        }
    }
    return false;
}
?>
<script>
const detectDuplicates = (arr) => {
    let seen = new Set();

    for (let num of arr) {
        if (seen.has(num)){
            return true;
        } else {
            seen.add(num);
        }
    }
    return false;
}
</script>

<!-- 
Question example
steps:
1. create seen array/set to store seen numbers.
2. create result array to store the unique numbers.
3. loop through array
4. if number already exists in seen array, skip it.
5. otherwise, add number to result array.
6. return the result array.
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
    return result;
}
// shorter
const removeDups = (arr) => {
    return [...new Set(arr)];
}
</script>

<!-- 
Question 2
steps: 
1. split sentence into words.
2. create seen array/set to store seen words.
3. create a result array to store the unique words.
4. loop through words
5. if word is not in seen, add it to seen array and result array.
6. return the result array.
-->

<?php
function removeDuplicateWord($sent) {
    $words = preg_split('/\s+/', trim($sent));
    $seen = [];
    $result = [];

    foreach ($words as $word) {
        if (!$seen[$word]) {
            $seen[$word] = true;
            $result[] = $word;
        }
    }
    return implode(" ", $result);
}

function removeDupWord($sent) {
    $words = preg_split('/\s+/', trim($sent));
    return array_unique($words);
}
?>
<script>
const removeDuplicateWord = (sent) => {
    let words = sent.trim().split(" ");
    let seen = new Set();
    let result = [];

    for (let word of words) {
        if (!seen.has(word)){
            seen.add(word);
            result.push(word);
        }
    }
    return result.join(" ");
}

function removeDupWord = (sent) => {
    let words = sent.trim().split(" ");
    return [...new Set(words)];
}
</script>

<!-- 
Question 3
steps:
1. create seen array/set to store seen numbers.
2. loop through each number in the array,
3. if number is seen, return number, otherwise add number to seen array.
4. return null.
-->

<?php
function detectDuplicateNum($arr) {
    $seen = [];

    foreach ($arr as $num) {
        if (isset($seen[$num])) return $num;

        $seen[$num] = true;
    }
    return null;
}
?>
<script>
const detectDuplicateNum = (arr) => {
    let seen = new Set();

    for (let num of arr) {
        if (seen.has(num)) return num;

        seen.add(num);
    }
    return null;
}
</script>

<!-- 
Question 4
steps:
1. split string into characters.
2. create seen array/set to store seen characters.
3. loop through characters
4. if seen has character, return true, otherwise add character to seen array.
5. return false.
-->

<?php
function uniqueCharacters($str) {
    $chars = preg_split('//u', trim($str), -1, PREG_SPLIT_NO_EMPTY);
    $seen = [];

    foreach ($schars as $c) {
        if (isset($seen[$c])) {
            return false;
        }
        $seen[$c] = true;
    }
    return true;
}
?>
<script>

const uniqueCharacters = (str) => {
    let seen = new Set();

    for (let c of str) {
        if (seen.has(c)) return false;

        seen.add(c);
    }
    return true;
}

</script>

