// Filter / Collect Pattern

// 1.
<?php
function negativeNumbers($arr) {
    $result = [];

    foreach ($arr as $num) {
        if ($num < 0) {
            $result[] = $num;
        }
    }
    return $result;
}
?>
<script>
    const negativeNumbers = (arr) => {
        let result = [];

        for (let num of arr) {
            if (num <0) {
                result.push(num);
            }
        }
        return result;
    }
</script>

// 2.
<?php
function numsGreaterThanAverage($arr) {
    $result = [];
    $sum = array_sum($arr);
    $average = $sum / count($arr);

    foreach ($arr as $num) {
        if ($num > $average) {
            $result[] = $num;
        }
    }
    return $result;
}
?>
<script>
    const numsGreaterThanAverage = (arr) => {
        let result = [];
        let sum = 0;

        for (let num of arr) {
            sum += num;
        }
        let average = sum / arr.length;

        for (let num of arr) {
            if (num > average) {
                result.push(num);
            }
        }
        return result;
    }
</script>

// 3.
<?php
function wordsLongerThan5($arr) {
    $result = [];

    foreach ($arr as $word) {
        if (strlen($word) > 5) {
            $result[] = $word;
        }
    }
    return $result;
}
?>
<script>
    const wordsLongerThan5 = (arr) => {
        let result = [];

        for (let word of arr) {
            if (word.length > 5) {
                result.push(word);
            }
        }
        return result;
    }
</script>

// 4.
<?php
function evenNumbers($arr) {
    $result = [];

    foreach ($arr as $num) {
        if ($num % 2 === 0) {
            $result[] = $num;
        }
    }
    return $result;
}
?>
<script>
    const evenNumbers = (arr) => {
        let result = [];

        for (let num of arr) {
            if (num % 2 === 0) {
                result.push(num);
            }
        }
        return result;
    }
</script>

// 5.
<?php
function numbersBetweenValues($arr, $value1, $value2) {
    $result = [];

    foreach ($arr as $num) {
        if ($num > $value1 && $num < $value2) {
            $result[] = $num;
        }
    }
    return $result;
}
?>
<script>
    const numbersBetweenValues = (arr, min, max) => {
        let result = [];

        for (let num of arr) {
            if (num > min )
        }
    }
</script>
