
// sliding window pattern

// 1
<?php
function maxSumSubarray($arr, $k) {
    if ($k <= 0 || $k > count($arr)) return null;
    $currentSum = 0;

    for ($i = 0; $i < $k; $i++) {
        $currentSum += $arr[$i];
    }

    $maxSum = $currentSum;
    for ($i = $k; $i < count($arr); $i++) {
        $currentSum += $arr[$i] - $arr[$i - $k];

        if ($currentSum > $maxSum) { $maxSum = $currentSum;}
    }
    return $maxSum;
}
?>
<script>
    const maxSumSubarray = (arr, k) => {
        if (k <= 0 || k > arr.length) return null;
        let currentSum = 0;

        for (let i = 0; i < k; i++) {
            currentSum += arr[i];
        }

        let maxSum = currentSum;
        for(let i = k; i < arr.length; i++) {
            currentSum += arr[i] - arr[i - k];

            if (currentSum > maxSum) maxSum = currentSum;
        }
        return maxSum;
    }
</script>

// 2.
<?php
function longestWord($str) {
    $words = preg_split('/\s+/', $str);
    if (empty($words)) return null;
    $longest = $words[0];

    foreach($words as $word) {
        if (strlen($word) > strlen($longest)) {
            $longest = $word;
        }
    }
    return $longest;
}
?>
<script>
    const longestWord = (sentence) => {
        let words = sentence.split (" ").filter(Boolean);
        if (words.length === 0) return null;
        let longest = words[0];

        for (let word of words) {
            if (word.length > longest.length) {
                longest = word;
            }
        }
        return longest;
    }
</script>

// 3.
<?php
function longestUniqueSubstring($str) {
    $seen = [];
    $maxLen = 0;
    $s = 0;

    for ($i = 0; $i < strlen($str); $i++) {
        while (isset($seen[$str[$i]])) {
            unset($seen[$str[$s]]);
            $s++;
        }
        $seen[$str[$i]] = true;
        $maxLen = max($maxLen, $i - $s + 1);
    }
    return $maxLen;
}
?>
<script>
    const longestUniqueSubstring = (str) => {
        let seen = new Set();
        let maxLen = 0;
        let s = 0;

        for (let i = 0; i < str.length; i++){
            while (seen.has(str[i])) {
                seen.delete(str[s]);
                s++;
            }
            seen.add(str[i]);
            maxLen = Math.max(maxLen, i - s + 1);
        }
        return maxLen;
    }
</script>

// 4.
<?php
function minSubarraySumToTarget($arr, $target) {
    $minLen = PHP_INT_MAX;
    $sum = 0;
    $s = 0;

    for ($i = 0; $i < count($arr); $i++) {
         $sum += $arr[$i];

         while ($sum >= $target) {
             $minLen = min($minLen, $i - $s+ 1);
             $sum -= $arr[$s];
             $s++;

         }
    }
    return $minLen === PHP_INT_MAX ?  0 : $minLen;
}
?>
<script>
    const minSubarraySumToTarget = (arr, target) => {
        let minLen = Number.POSITIVE_INFINITY;
        let s = 0;
        let sum = 0;

        for (let i = 0; i < arr.length; i++) {
            sum += arr[i];

            while (sum >= target) {
                minLen = Math.min(minLen, i - s + 1);
                sum -= arr[s];
                s++;
            }
        }
        return minLen === Number.POSITIVE_INFINITY ? 0 : minLen;
    }
</script>
