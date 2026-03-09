<!-- filter pattern -->

<!-- 
Question 1
steps:
1. create an empty array to store only positive numbers.
2. loop through each number in the array,
3. if the current number is positive, add it to the array.
4. return the array.
-->

<?php
function keepOnlyPositive($arr) {
    $positiveNumbers = [];

    foreach ($arr as $num) {
        if ($num > 0 ) {
            $positiveNumbers[] = $num;
        }
    }
    return $positiveNumbers;
}
?>
<script>
const keepOnlyPositive = (arr) => {
    let positiveNumbers = [];

    for (let num of arr) {
        if (num > 0){
            positiveNumbers.push(num);
        }
    }
    return positiveNumbers;
}
</script>

<!-- 
Question 2:
steps:
1. create array words longer then 4 characters.
2. split the string into words.
3. loop through each word in the array,
4. if the current word is longer then 4 characters, add it to the array.
5. return the array.
-->

<?php
function filterWords($str) {
    $longerWords = [];
    $words = preg_split('/\s+/', $str);

    foreach ($words as $word) {
        if (strlen($word) > 4) {
            $longerWords[] = $word;
        }
    }
    return $longerWords;

}
?>
<script>
const filterWords = (str) => {
    let longerWords = [];
    let words = str.split(' ');

    for (let word of words) {
        if (word.length > 4){
            longerWords.push(word);
        }
    }
    return longerWords;
}
</script>

<!-- 
Question 3: 
steps:
1. create empty array to hold non zero numbers.
2. loop through each number in the array,
3. if the current number is not zero, add it to the array.
4. return the array.
-->

<?php
function keepNonZero($arr) {
    $nonZero = [];

    foreach ($arr as $num) {
        if ($num !== 0) {
            $nonZero[] = $num;
        }
    }
    return $nonZero;
}
?>
<script>
const keepNonZero = (arr) => {
    let nonZero = [];

    for (let num of arr){
        if (num !== 0) {
            nonZero.push(num);
        }
    }
    return nonZero;
}
</script>

<!-- 
Question 4;
steps:
1. create array to hold even numbers.
2. loop through each number in the array,
3. if the current number is even, add it to the array.
4. return the array.
-->

<?php
function keepEven($arr) {
    $evenNumbers = [];

    foreach ($arr as $num) {
        if ($num % 2 === 0) {
            $evenNumbers[] = $num;
        }
    }
    return $evenNumbers;
}
?>
<script>
const keepEven = (arr) => {
    let evenNumbers = [];

    for (let num of arr) {
        if (num % 2 === 0){
            evenNumbers.push(num);
        }
    }
    return evenNumbers;
}
</script>