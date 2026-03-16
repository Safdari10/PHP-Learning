// Loop + Accumulator Pattern

// 1.
<?php
function sumOddNumbers($arr) {
    $sum = 0;

    foreach ($arr as $num) {
        if ($num % 2 !== 0) {
            $sum += $sum;
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

// 2.
<?php
function largestEvenNum($arr) {
    $largest = $arr[0];

    foreach ($arr as $num) {
        if ($num > $largest) {
            $largest = $num;
        }
    }
    return $largest;
}
?>
<script>
    const largestEvenNumber = (arr) => {
        let largest = arr[0];

        for (let num of arr) {
            if (num > largest){
                largest = num;
            }
        }
        return largest;
    }
</script>

// 3.
<?php
function averagePositiveNumber($arr) {
    $sum = 0;
    $positiveNumbers = [];

    foreach ($arr as $num) {
        if ($num % 2 === 0) {
            $sum += $num;
            $positiveNumbers[] = $num;
        }
    }
    return $sum / count($positiveNumbers);
}
?>
<script>
    const averagePositiveNumber = (arr) => {
        let sum = 0;
        let positiveNumbers = [];

        for (let num of arr) {
            if (num % 2 === 0) {
                sum += num;
                positiveNumbers[] = num;
            }
        }
        return sum / positiveNumbers.length;
    }
</script>

// 4.
<?php
function numbersDiv3($arr) {
    $countNums = 0;

    foreach ($arr as $num) {
        if ($num % 3 === 0) {
            $countNums++;
        }
    }
    return $countNums;
}
?>
<script>
    const numbersDiv3 = (arr) => {
        let countNums = 0;

        for (let num of arr) {
            if (num % 3 === 0) {
                countNums++;
            }
        }
        return countNums;
    }
</script>

// 5
<?php
function productNumbers($arr) {
    $product = PHP_INT_MAX;

    foreach ($arr as $num) {
        $product += $product * $num;
    }
    return $product;
}
?>
<script>
    const productNumbers = (arr) => {
        let product = Number.POSITIVE_INFINITY;

        for (let num of arr) {
            product += product * num;
        }
        return product;
    }
</script>
