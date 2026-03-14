
// Question 1
<?php
function  uniquePositiveNumber($arr): array {
    $seen = [];
    $result = [];
    foreach ($arr as $num) {
        if ($num >= 1 && !isset($seen[$num])) {
            $seen[$num] = true;
            $result[] = $num;
        }
    }
    sort($result, SORT_NUMERIC);
    return $result;
}
?>
// php alternative
<?php
function uniquePositiveNumber1($arr): array {
    $unique = array_unique(array_filter($arr, fn($n) => $n >= 1));
    sort($unique,SORT_NUMERIC);
    return $unique;
}
?>

<script>
    const uniquePositiveNumber = (arr) => {
        let seen = new Set();
        let result = [];

        for (let num of arr) {
            if (num >= 1 && !seen.has(num) ) {
                seen.add(num);
                result.push(num)
            }
        }
        result.sort((a,b) => a - b)
        return result;
    }
</script>

// js alternative
<script>
    const uniquePositiveNumber1 = (arr) => {
       return Array.from(new Set(arr.filter(n => n >= 1))).sort((a,b) => a - b);
    }
</script>

// Question 2
<?php
function  mostFrequentWord($str): string {
    $words = preg_split("/\s+/", $str);
    $map = array_count_values($words);
    $mostFrequent = '';
    $max= 0;
    foreach ($map as $word => $count) {
        if ($count > $max) {
            $max = $count;
            $mostFrequent = $word;
        }
    }
    return $mostFrequent;
}
?>

<script>
    const mostFrequentWord = (str) => {
        const words = str.split(' ');
        let map = {};
        let max = 0;
        let mostFrequent = '';

        for (let word of words) {
            map[word] = (map[word] ?? 0) + 1;

            if (map[word] > max) {
                max = map[word];
                mostFrequent = word;
            }
        }
        return mostFrequent;
    }

</script>

// Question 3
<?php
function isPalindrome($str): bool {
    $clean_str = strtolower(preg_replace("/[^a-zA-Z0-9]/", "", $str));
    return $clean_str === strrev($clean_str);
}
?>

<script>
    const isPalindrome = (str) => {
        const cleaned = str.toLowerCase().replace('/[^a-z0-9]/g', ''])
        return cleaned === cleaned.split("").reverse().join('')

    }
</script>

// Question 4
<?php
function sumToTarget($arr, $target): bool {
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
<script>
    const sumToTarget = (arr , target) => {
        for (let i = 0; i < arr.length; i++) {
            for (let j = i + 1; j < arr.length; j++) {
                if (arr[i] + arr[j] === target) {
                    return true;
                }
            }
        }
        return false;
    }
</script>

// Question 5
// SELECT c.id, c.name AS customer_name, SUM(o.amount) AS total_spent
// FROM Customers c
// JOIN Orders o
// ON c.id = o.customer_id
// GROUP By c.id, c.name
// HAVING total_spent > 200

// Question 6
<?php
function firstUniqueChar($str) {
    $chars = preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY);
    $map = array_count_Values($chars);

    foreach ($map as $c => $count) {
        if ($count === 1) {
            return $c;
        }
    }
    return null;
}
?>
<script>
    const firstUniqueChar = (str) => {
        const chars = str.split('');
        let map = {};

        for (let c of chars) {
            map[c] = (map[c] ?? 0) + 1;
        }

        for (let c in map) {
            if (map[c] === 1) return c;
        }

        return null;
    }
</script>

// Question 7
<?php
function longestWord($str): string {
    $words = preg_split('/\s+/', $str);
    $longest = '';

    foreach ($words as $word) {
        if (strlen($word) > strlen($longest)) {
            $longest = $word;
        }
    }
    return $longest;
}
?>
<script>
    const longestWord = (str) => {
        const words = str.split(" ");
        let longest = '';

        for (let word of words) {
            if (word.length > longest.length) {
                longest = word;
            }
        }
        return longest;
    }
</script>

// Question 8
<?php
function longestUniqueSubstring($str): int {
    $seen = [];
    $s = 0;
    $maxLen = 0;

    for($e = 0; $e < strlen($str); $e++) {
        while (isset($seen[$str[$e]])) {
            unset($seen[$str[$s]]);
            $s++;
        }
        $seen[$str[$e]] = true;
        $maxLen = max($maxLen, $e - $s + 1);
    }
    return $maxLen;
}
?>
<script>
    const longestUniqueSubstring = (str) => {
        let seen = new Set();
        let s = 0;
        let maxLen = 0;

        for (let e = 0; e < str.length; e++) {
            while (seen.has(str[e])) {
                seen.delete(str[s]);
                s++;
            }
            seen.add(str[e]);
            maxLen = Math.max(maxLen, e - s + 1);
        }
        return maxLen;
    }
</script>

