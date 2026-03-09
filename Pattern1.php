

//1. loop + accumulator

function sumPositive($arr) {
    $sum = 0;
    foreach ($arr as $num) {
        if ($num > 0) {
            $sum += $num;
        }
    }
    return $sum;
}


//2. filter

function wordBigger5($sentence) {
    $words = preg_split('/\s+/', trim($sentence), -1, PREG_SPLIT_NO_EMPTY);
    $result = [];
    foreach($words as $w) {
        if ($w > 5) {
            $result[] = $w
        }
    }
    return $result;
}

// 3. frequency counting

function numFrequency($arr) {
    $count = array_count_values($arr);
    return $count;
}

// 4. seen & set

function removeDuplicateNum($arr) {
    $seen = [];
    $result = [];
    foreach($arr as $num) {
        if(!in_array($num, $seen)) {
            $seen[] = $num;
            $result[] = $num;
        }
    }
    return $result;
}


// 5. nexted loops (compare elements)

function twoNumEqual10($arr) {
    foreach ($arr as $i) {
        foreach($arr as $j) {
            if ($i + $j == 10) {
                return true;
            }
        }
    }
}



// 6. string processing

//1. loop + accumulator

function sumPositive($arr) {
    $sum = 0;
    foreach ($arr as $num) {
        if ($num > 0) {
            $sum += $num;
        }
    }
    return $sum;
}


//2. string processing

function wordBigger5($sentence) {
    $words = preg_split('/\s+/', trim($sentence), -1, PREG_SPLIT_NO_EMPTY);
    if (!$words) return [];
    foreach($words as $word) {
        if(strlen($word) > 5) {
            return $word;
        }
    }
}

// 3. frequency counting

function numFrequency($arr) {
    $count = array_count_values($arr);
    return $count;
}

// 4. seen & set

function removeDuplicateNum($arr) {
    $seen = [];
    $result = [];
    foreach($arr as $num) {
        if(!in_array($num, $seen)) {
            $seen[] = $num;
            $result = $num;
        }
    }
    return $result;
}


// 5. nested loops (compare elements)

function twoNumEqual10($arr) {
    foreach ($arr as $i) {
        foreach($arr as $j) {
            if ($i + $j == 10) {
                return true;
            }
        }
    }
}



// 6. string processing

function isPalindrome($str) {

    $clean = strtolower(preg_replace('/[^a-zA-Z]/', '', $str));

    return $clean === strrev($clean);

}

// 7. SQL aggregration

SELECT c.id, c.name AS customer_name, SUM(o.amount) AS total_spent
FROM Customers c
LEFT JOIN Orders o
ON c.id = o.customer_id
GROUP BY c.id, c.name


// 8. loop and accumulator

function largestNum($arr) {
     $largest = [0];
     foreach ($arr as $num) {
        if ($num > $largest) {
            $largest = $num;
        }
     }
     return $largest;
}


const largestNumber = (arr) => {
    let largest = arr[0];
    for (let num of arr) {
        if (num > largest) {
            largest = num
        }
    }
    return largest
} 


// 9. filter 

function filterEven($arr) {
    $result = [];
    foreach($arr as $num) {
        if ($num % === 0) {
            $result[] = $num;
        }
    }
    return $result
}

// 10. string processing

function countWords($str) {
    $words = preg_grep('/\s+/', trim(str), -1, PREG_SPLIT_NO_EMPTY);
    return count($words);
}


// 7. SQL aggregration

SELECT c.id, c.name AS customer_name, SUM(o.amount) AS total_spent
FROM Customers c
LEFT JOIN Orders o
ON c.id = o.customer_id
GROUP BY c.id, c.name


// 8. loop and accumulator

const largestNum($arr) {
    $largest = [0],
    foreach($arr as $num) {
        if($num > $largest) {
            $largest = $num;
        }
    }
    return $largest;
}


// 9. filter 

function filterEven($arr) {
    $even = array_filter($arr, function($num) {
        if ($num == 0) {
            return [$num];
        } else {
            return $num % 2 == 0;
        }
    })
}

// 10. string processing

function countWords($str) {
    $words = preg_grep('/\s+/', trim(str), -1, PREG_SPLIT_NO_EMPTY);
    return count($words);
}