
// Frequency Map Pattern

// 1.
<?php
function mostFrequentNum($arr) {
    $map = array_count_values($arr);
    $max = 0;
    $result = null;

    foreach ($map as $num => $count) {
        if ($count > $max) {
            $max = $count;
            $result = $num;
        }
    }
    return $result;
}
?>
<script>
    const mostFrequentNum = (arr) => {
        let map = new Map();
        let max = 0;
        let result = null;

        for (let num of arr) {
            map.set(num, (map.get(num) ?? 0) + 1)
        }

        for (const [num, count] of map) {
            if (count > max) {
                max = count;
                result = num;
            }
        }
        return result;
    }
</script>

// 2.
<?php
function countEachChar($str): array {

    return array_count_values(preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY));
}
?>
<script>
    const countEachChar = (str) => {
        let map = new Map();
        for (let c of str) {
            map.set(c, (map.get(c) ?? 0) + 1);
        }
        return map;
    }
</script>

// 3.
<?php
function firstUniqueChar($str) {
    $chars = str_split($str);
    $map = array_count_values($chars);

    foreach ($chars as $c) {
        if ($map[$c] === 1) {
            return $c;
        }
    }
    return null;
}
?>
<script>
    const firstUniqueChar = (str) => {
        let map = new Map();

        for (let c of str) {
            map.set(c, (map.get(c) ?? 0) + 1);
        }

        for (let c of str) {
            if (map.get(c) === 1) {
                return c;
            }
        }
        return null;
    }
</script>

// 4
<?php
function areAnagrams($a, $b): bool
{
    $mapA = array_count_values(preg_split("//u", $a, -1, PREG_SPLIT_NO_EMPTY));
    $mapB = array_count_values(preg_split("//u", $b -1, PREG_SPLIT_NO_EMPTY));

    return $mapA === $mapB;
}
// shorter version none mapping;
function isAnagram($a, $b): bool {
    return count_chars($a, 1) === count_chars($b, 1);
}

?>
<script>
    const areAnagrams = (a, b) => {
        if (a.length !== b.length) return false;
        let map = new Map();

        for (let c of a) {
            map.set(c, (map.get(c) ?? 0) + 1);
        }

        for (let c of b) {
            if (!map.get(c) ) return false;
            map.set(c, (map.get(c) - 1)
        }
        return true;

    }

    // shorter none mapping version
    const isAnagram = (a, b) => {
        if (a.length !== b.length) return false;
        return a.split('').sort().join('') ===
            b.split('').sort().join('');
    }
</script>

// 5.
<?php
function mostFrequentWord($arr)
{
    $map = array_count_values($arr);
    $max = 0;
    $result = null;
    foreach ($map as $word => $count) {
        if ($count > $max) {
            $max = $count;
            $result = $word;
        }
    }
    return $result;
}
?>

<script>
    const mostFrequentWord = (arr) => {
        let map = new Map();
        let max = 0;
        let result = null;

        for (let word of arr) {
            map.set(word, (map.get(word) ?? 0) + 1);
        }

        for (let [word, count] of map) {
            if (count > max) {
                max = count;
                result = word;
            }
        }
        return result;
    }
</script>
