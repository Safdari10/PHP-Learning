<?php

function factorial($n): int
{
    $result = 1;
    for ($i = 1; $i <= $n; $i++ ) {
        $result *= $i;
    }
    return $result;
}
?>
<script>
    const factorial = (n) => {
      let result = 1;
      for (let i = 1; i <= n; i++) {
          result *= i;
      }
      return result;
    }
</script>

<?php
function factorial2($n): int
{
    $result = 1;
    if ($n === 0 || $n === 1 ) {
        return 1;
    }
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}
?>
<script>
    const factorial2 = (n) => {
        if (n === 0 || n === 1) return 1;
        let result = 1;
        for (let i = 1; i <= n; i++) {
            result *= i;
        }
        return result;
    }
</script>

<?php
function factorialRecursion($n) {
    if ($n === 0) return 1;
    return $n * factorialRecursion($n - 1);
}
?>
<script>
    const factorialRecursion = (n) => {
        if (n === 0) return 1;
        return n * factorialRecursion(n - 1);
    }
</script>

// returns
 3 * (3 - 1)
3 * 2 * (2 - 1)
3 * 2 * 1 = 6

<?php
function sumOfFactorial($n): int
{
    if ($n === 0) return 0;
    $sum = 0;
    $fact = 1;

    for($i = 1; $i <= $n; $i++) {
        $fact *= $i;
        $sum += $fact;
    }
    return $sum;
}
?>
<script>
    const sumOfFactorial = (n) => {
        if (n === 0) return 0;
        let sum = 0;
        let fact = 1;

        for (let i = 1; i <= n; i++) {
            fact *= i;
            sum += fact;
        }
        return sum;
    }
</script>

<?php
function zerosInFactorial($n) {
    $count = 0;

    while ($n > 0) {
        $n = floor($n / 5);
        $count+= $n;
    }
    return $count;
}
?>
<script>
    const zerosInFactorial = (n) => {
        let count = 0;

        while (n > 0) {
            n = Math.floor(n / 5);
            count += n;
        }
        return count;
    }
</script>

<?php
function ifFactorial($num): bool
{
    $i = 1;
    $fact = 1;

    while ($fact < $num) {
        $i++;
        $fact *= $i;
    }
    return $fact === $num;
}
?>
<script>
    const isFactorial = (num) => {
        let i = 1;
        let fact = 1;

        while (fact < num) {
            i++;
            fact *= i;
        }
        return fact === num;
    }
</script>

<?php
function reverseFactorial($num): ?int
{
    if ($num < 1 ) return null;
    $i = 1;
    while ($num > 1) {
        $i++;
        if ($num % $i !== 0) return null;
        $num /= $i;
    }
    return $i;
}
?>
<script>
    const reverseFactorial = (num) => {
        if (num < 1) return null;
        let i = 1;
        while (num > 1) {
            i++;
            if (num % i !== 0) return null;
            num /= i;
        }
        return i;
    }
</script>

<?php
function sum($n) {
    if ($n <= 1) return $n;
    return $n + sum($n - 1);
}
?>
<script>
    const sum = (n) => {
        if (n <= 1) return n;
        return n + sum(n - 1);
    }
</script>

<?php
function factorialHard($n) {
    if ($n <= 1) return 1;
    return $n * factorialHard($n - 1);
}
?>
<script>
    const factorialHard = (n) => {
        if (n <= 1) return 1;
        return n * factorialHard(n - 1);
    }
</script>
