
<!-- loop and accumulator -->


<!-- 
Question 1
steps:
1. create count variable to store number of negtives in an array.
2. loop through each number in the array,
3. if the current number is negative, increment the count variable.
4. return the count variable.
-->

<?php

function countNegatives($arr) {
    $count = 0;

    foreach ($arr as $num) {
        if ($num < 0) {
           $count++;
        }
    }
    return $count;
}

?>

<script>
const countNegatives = (arr) => {

  let count = 0;

  for (let num of arr) {
    if (num < 0) {
      count++;
    }
  }

  return count;

}

</script>

<!-- 
Question 2
steps: 
1. initialize smallest as first element of array.
2. loop through each number in the array,
3. if the current number is smaller than the smallest variable, update the smallest variable.
4. return the smallest variable.
-->

<?php
function smallestNumber($arr) {

    $smallest = $arr[0];

    foreach ($arr as $num) {

        if ($num < $smallest) {
            $smallest = $num;
        }

    }

    return $smallest;
}
?>
<script>
const smallestNumber = (arr) => {

  let smallest = arr[0];

  for (let num of arr) {
    if (num < smallest) {
      smallest = num;
    }
  }

  return smallest;

}
</script>

<!-- 
Question 3
steps:
1. create sum variable to store some of all odd numbers in an array.
2. loop through each number in the array,
3. if the current number is odd, add it to the sum variable.
4. return the sum variable.
-->

<?php
function sumOddNumbers($arr) {
    $sum = 0;

    foreach ($arr as $num) {
        if ($num % 2 !== 0) {
            $sum += $num;
        }
    }
    return $sum;
}
?>
<script>
const sumOddNumbers = (arr) => {
    let sum = 0;

    for (let num of arr) {
        if (num % 2 !== 0) {
           sum += num;
        }
    }
    return sum;
}

</script>

<!-- 
Question 4
steps:
1. create a variable to store average of values of numbers in an array.
2. loop through each number in the array,
3. add the current number to the total sum.
4. divide the total sum by the number of elements in the array.
5. return the average.
-->

<?php
function average($arr) {

    $totalSum = 0;
    $count = count($arr);

    if ($count === 0) {
        return 0;
    }

    foreach ($arr as $num) {
        $totalSum += $num;
    }
    return $totalSum / $count;
}
?>
<script>
const average = (arr) => {
    let totalSum = 0;
    let count = arr.length;

    if (count === 0) {
        return 0;
    }

    for (let num of arr) {
        totalSum += num;
    }
    return totalSum / count;
}
</script>