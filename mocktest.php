

function secondLargest($arr) {
    $largest = null;
    $secondLargest = null ;

    foreach ($arr as $num) {
        if ($largest === null || $num > $largest) {
            $secondLargest = $largest;
            $largest = $num;
        } elseif ($n !== $largest && $secondLargest === null || $num > $secondLargest) {
            $secondLargest = $num;
        }
    }
    return $secondLargest;
}

// second way of doing above: 

function secondLargest($arr) {
    $unique = array_values(array_unique($arr));
    if ($count($unique) < 2) return null;
    rsort($unique);
    return $unique[1];
}


function wordFrequency($sentence) {
    $words = preg_split('/\s+/', trim($sentence), -1, PREG_SPLIT_NO_EMPTY);
    if (!$words) return [];
    $counts = array_count_values($words);
    return $counts;
}



class Car {
    public $brand;
    public $speed;

    public function __construct($brand, $speed) {
        $this->brand = $brand;
        $this->speed = $speed;
    }

    public function accelerate($amount) {
        $this->speed += $amount;
    }

    public function brake($amount) {
        $this->speed -= $amount;
        if ($this->speed < 0) {
            $this->speed = 0;
        }
    }

    public function getSpeed() {
        return $this->speed;
    }

}


SELECT c.id, c.name AS customer_name, COALESCE(SUM(o.amount), 0) AS total_spent
FROM Customers c
LEFT JOIN Orders o ON c.id = o.customer_id
GROUP BY c.id, c.name
ORDER BY total_spent DESC;


SELECT c.name 
FROM Customers c
LEFT JOIN Orders o 
ON c.id = o.customer_id
WHERE o.id IS NULL


const isPalindrome = (sentence) => {

    let cleaned = sentence
        .replace(/[^A-Za-z0-9]/g, '')
        .toLowerCase();

    let reversed = cleaned.split('').reverse().join('');

    return cleaned === reversed;

};


const findMissingNum = (arr) => {

    let N = arr.length + 1;

    let expectedSum = N * (N + 1) / 2;

    let actualSum = arr.reduce((acc, num) => acc + num, 0);
    // the actual sum can be calculated as follows let sum = 0 for (const num of arr) {sum += num}
    return expectedSum - actualSum;
}


const flattenArray = (arr) => {
     return arr.flat(infinity);
    // shallow flatten: return arr.flat();
    // one level alternative: return arr.reduce((acc, v) => acc.concat(v), []);
}