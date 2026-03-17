
// Seen and Set Pattern

// 1.
<?php
function detectDuplicates($arr): bool {
    $seen = [];

    foreach ($arr as $num) {
        if (isset($seen[$num])) {
            return true;
        }
        $seen[$num] = true;
    }
    return false;
}
?>
<script>
    const detectDuplicates = (arr) => {
        let seen = new Set();

        for (let num of arr) {
            if (seen.has(num)) {
                return true;
            }
            seen.add(num);
        }
        return false;
    }
</script>

// 2.
<?php
function removeDuplicates($arr): array {
    $seen = [];
    $result = [];

    foreach ($arr as $num) {
        if (!isset($seen[$num])) {
            $seen[$num] = true;
            $result[] = $num;
        }
    }
    return $result;
}
//
function removeDup($arr): array {
    return array_values(array_unique($arr));
}
?>
<script>
    const removeDuplicates = (arr) => {
        let seen = new Set();
        let result = [];

        for (let num of arr) {
            if (!seen.has(num)) {
                seen.add(num);
                result.push(num);
            }
        }
        return result;
    }

    // shorter
    const removeDup = (arr) => {
        return [...new Set(arr)]
    }
</script>

// 3.
<?php
function firstDuplicate($arr) {
    $seen = [];

    foreach ($arr as $num) {
        if (isset($seen[$num])) {
            return $num;
        }
        $seen[$num] = true;
    }
    return null;
}
?>
<script>
    const firstDuplicate = (arr) => {
        let seen = new Set();

        for (let num of arr) {
            if (seen.has(num)) {
                return num;
            }
            seen.add(num);
        }
        return null;
    }
</script>

// 4.
<?php
function isAllCharUnique($str): bool {
    $chars = preg_split('//u', strtolower($str), -1, PREG_SPLIT_NO_EMPTY);
    $seen = [];

    foreach ($chars as $c) {
        if (isset($seen[$c])) {
            return false;
        }
        $seen[$c] = true;
    }
    return true;
}

// shorter
function isAllChar($str): bool {
   $char = str_split($str);
   return count($char) === count(array_unique($char));
}
?>
<script>
    const isAllCharUnique = (str) => {
        let seen = new Set()

        for (let c of str) {
            if (seen.has(c)) {
                return false;
            }
            seen.add(c)
        }
        return true;
    }

    // shorter
    const isAllChar = (str) => {
        let chars = str.split('');
        return chars.length === [...new Set(chars)].length;
    }
</script>

// 5
<?php
function intersectArrays($arr1, $arr2): array {
    $seen = [];
    $result = [];
    foreach ($arr1 as $num1) {
        $seen[$num1] = true;
    }

    foreach ($arr2 as $num2) {
        if (isset($seen[$num2])) {
            $result[$num2] = true;
        }
    }
    return array_keys($result);
}
?>
<script>
    const intersectArrays = (arr1, arr2) => {
        let seen = new Set(arr1);
        let result = new Set();

        for (let num of arr2) {
            if (seen.has(num)){
                result.add(num);
            }
        }
        return Array.from(result);
    }
</script>
