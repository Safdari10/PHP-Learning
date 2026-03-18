
// practice
// 1.
<?php
function factorial1($n) {
    if ($n <= 1) return 1;
    return $n * factorial1($n - 1);
}
?>
<script>
    const factorial1 = (n) => {
        if (n <= 1) return 1;
        return n * factorial1(n - 1);
    }
</script>

// 2.
<?php
function sumRecursion($n) {
    if ($n <= 1) return $n;
    return $n + sumRecursion($n - 1);
}
?>
<script>
    const sumRecursion = (n) => {
        if (n <= 1) return n;
        return n + sumRecursion(n - 1);
    }
</script>

// 3.
 the base case should be if (n <= 1) return 1, when solving product of numbers from 1 to n;
<?php
 function product($n) {
     if ($n <= 1) return 1;
     return $n * product($n - 1);
 }
?>

// 4.
// the base case should be if (n <= 1) return n, when getting sum of numbers from 1 to n;
<?php
function sum($n) {
    if ($n <= 1) return $n;
    return $n + sum($n - 1);
}
?>


// product or factorial of a number:
<script>
    const product = (n) => {
        if (n <= 1) return 1;
        let result = 1;
        for ( let i = 1; i <= n; i++) {
            result *= i;
        }
        return result;
    }
</script>

// sum of factorials
<script>
    const sum = (n) => {
        if (n <= 1) return n;
        let sum = 0;
        let fact = 1;
        for (let i = 1; i <= n; i++) {
            fact *= i;
            sum += fact;
        }
        return sum;
    }
</script>



<script>
    const factorial5 = (n) => {
        if (n <= 1) return 1;
        return n * factorial5(n - 1);
    }

    const sum5 = (n) => {
        if (n <= 1) return n;
        return n + sum5(n - 1);
    }

</script>