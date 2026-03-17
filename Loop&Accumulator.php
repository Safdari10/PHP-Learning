// Loop + Accumulator Pattern

// 1.
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

// 2.
<?php
function largestEvenNum($arr) {
    $largest = null;

    foreach ($arr as $num) {
        if ($num % 2 === 0 && ($largest === null || $num > $largest)) {
            $largest = $num;
        }
    }

    return $largest;
}
?>
<script>
    const largestEvenNumber = (arr) => {
        let largest = null;

        for (let num of arr) {
            if (num % 2 === 0 && (largest === null || num > largest)) {
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
    $count = 0;

    foreach ($arr as $num) {
        if ($num > 0) {
            $sum += $num;
            $count++;
        }
    }
    return $count === 0 ? 0 : $sum / $count;
}
?>
<script>
    const averagePositiveNumber = (arr) => {
        let sum = 0;
        let count = 0;

        for (let num of arr) {
            if (num > 0) {
                sum += num;
                count++;
            }
        }
        return count === 0 ? 0 : sum / count;
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
    $product = 1;

    foreach ($arr as $num) {
        $product *= $num;
    }
    return $product;
}
?>
<script>
    const productNumbers = (arr) => {
        let product = 1;

        for (let num of arr) {
            product *=  num;
        }
        return product;
    }
</script>
