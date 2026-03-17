
// 1.
<?php
function uniquePositiveNumbers($arr): array
{
    $seen = [];
    $result = [];

    foreach ($arr as $num) {
         if ($num > 0 && !isset($seen[$num])) {
             $seen[$num] = true;
             $result[] = $num;
         }
    }
    return $result;
}


// 2.
function firstNonRepeatingChar($str) {
    $chars = str_split($str);
    $map = array_count_values($chars);

    foreach ($str as $c) {
        if ($map[$c] === 1) {
            return $c;
        }
    }
    return null;
}

function hasPairWithSum($arr, $target): bool
{
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$i] + $arr[$j] === $target) {
                return true;
            }
        }
    }
    return false;
}
?>

SELECT c.id, c.name AS customer_name, COALESCE(COUNT(o.id), 0) as total_orders
FROM Customers c
LEFT JOIN Orders o
ON c.id = o.customer_id
GROUP BY c.id, c.name

SELECT c.name AS customer_name, SUM(o.amount) as total_spent
FROM Customers c
JOIN Orders o
ON c.id = o.customer_id
GROUP BY c.name
HAVING SUM(o.amount) > 1000

<script>
    const longestWord = (sentence) => {
        let words = sentence.split(' ');
        if (words.length === 0) return null;
        let longest = '';

        for (let word of words) {
            if (word.length > longest.length) {
                longest = word;
            }
        }
        return longest;
    }

    const countVowels = (str) => {
        const vowels = 'aeiou';
        let count = 0;
        let cleaned = str.toLowerCase();

        for (let c of cleaned) {
        if (vowels.includes(c)) {
          count++;
        }
        }
    }

    const maxSumSubarray = (arr, k) => {
        if (k <= 0 || k > arr.length) return null;
        let currentSum = 0;

        for (let i = 0; i < k; i++) {
            currentSum += arr[i];
        }
        let maxSum = currentSum;
        for (let i = k; i < arr.length; i++) {
             currentSum += arr[i] - arr[i - k];

             if (currentSum > maxSum) maxSum = currentSum;
        }
        return maxSum;
    }

</script>