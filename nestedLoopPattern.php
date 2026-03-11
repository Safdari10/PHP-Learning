<!-- nested loop pattern -->

<!-- Question 1
 steps:
 1. create a function that takes an array and a target sum.
 2. loop through each number in the array,
 3. for each number, loop through the remaining numbers in the array,
 4. if the sum of the current number and any other number is equal to the target sum, return true.
 5. otherwise, return false.
-->

<?php
function findPair($arr, $targetSum) {
    $n = count($arr);
    for ($i = 0; $i < $n; $i++) {
        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$i] + $arr[$j] === $targetSum) return true;
        }
    }
    return false;
}
?>
<script>
const findPair = (arr, target) => {
    for (let i = 0, n = arr.length; i < n; i++) {
        for (let j = i + 1; j < n; j++) {
            if (arr[i] + arr[j] === target) return true;
        }
    }
    return false;
};
</script>

<!-- 
Question 2
steps:
1. create a function that takes an array and a target sum.
 2. loop through each number in the array,
 3. for each number, loop through the remaining numbers in the array,
 4. return all pairs which sum up to the target sum.
 5. if no pairs are found, return an empty array.
-->

<?php
function findPairs($arr, $target) {
    $pairs = [];
    $n = count($arr);
    for ($i = 0; $i < $n; $i++) {
        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$i] + $arr[$j] === $target) {
                $pairs[] = [$arr[$i], $arr[$j]];
            }
        }
    }
    return $pairs;
}
?>
<script>
const findPairs = (arr, target) => {
    const pairs = [];
    for (let i = 0, n = arr.length; i < n; i++){
        for (let j = i + 1; j < n; j++) {
            if (arr[i] + arr[j] === target) {
                pairs.push([arr[i], arr[j]]);
            }
        }
    }
    return pairs;
};
</script>

<!-- 
Question 3
steps:
1. create a function that takes an array and a target sum.
2. create variable to store the difference between the target sum and the current number.
3. loop through each number in the array,
4. loop through the remaining numbers in the array,
5. add the sum of the current numbers to variable sum. add the difference between the target sum and the current number to variable diff.
6. if the current diff is < closestDiff, update closestDiff and closestPair.
7. return the closest pair.
-->

<?php
function findClosestPair($arr, $target) {
    $closestDiff = PHP_INT_MAX;
    $closestPair = [];
    $n = count($arr);

    for ($i = 0; $i < $n; $i++) {
        for ($j = $i + 1; $j < $n; $j++) {
            $sum = $arr[$i] + $arr[$j];
            $diff = abs($target - $sum);

            if ($diff < $closestDiff) {
                $closestDiff = $diff;
                $closestPair = [$arr[$i], $arr[$j]];
            }
        }
    }
    return $closestPair;
}
?>
<script>
const findClosestPair = (arr, target) => {
    let closestDiff = Number.POSITIVE_INFINITY;
    let closestPair = [];
    for (let i = 0, n = arr.length; i < n; i++) {
        for (let j = i + 1; j < n; j++) {
            const sum = arr[i] + arr[j];
            const diff = Math.abs(target - sum);
            if (diff < closestDiff) {
                closestDiff = diff;
                closestPair = [arr[i], arr[j]];
            }
        }
    }
    return closestPair;
};
</script>
 

<!-- 
Question 4
steps:
1. create a map to store the frequency of each number in the array.
2. create a variable that holds the number of equal pairs, total equal pairs count.
2. loop through each number in the array,
3. for each number, add its frequency to the map.
4. for each number in the map, check the numbers that have the same frequency.
5. if the numbers have the same frequency, add the number of equal pairs to the total count.
6. return the total count.
-->

<?php
function countEqualPairs($arr) {
    $map = array_count_values($arr); // count the frequency of each number in the array
    $equalPairs = 0;

    foreach ($map as $count) {
        if ($count > 1) {
            // number of pairs from count items is n*(n-1)/2
            $equalPairs += intdiv($count * ($count - 1), 2);
        }
    }
    return $equalPairs;
}
?>
<script>
const numberOfEqualPairs = (arr) => {
    const map = Object.create(null);
    let equalPairs = 0;
    for (const num of arr) map[num] = (map[num] ?? 0) + 1;
    for (const k of Object.keys(map)) {
        const count = map[k];
        if (count > 1) equalPairs += (count * (count - 1)) / 2;
    }
    return equalPairs;
};
</script>