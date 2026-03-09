function average($arr) {
    if (count($arr) === 0) {
        return 0
    }

    $sum = array_sum($arr);
    $count = count($arr);
    return $sum / $count;
}


function filterWords($sentence) {
   $words = preg_split('/\s+/', trim($sentence));
   $filtered = array_values(
    array_filter($words, fn($word) => strlen($word) > 3));
   return $filtered
}

class Product {
    public $name;
    public $price;

    public_function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getPriceWithTax() {
        return $this->price * 1.15;
    }
}

SELECT c.id, c.name AS customer_name, COUNT(o.customer_id) AS order_count
FROM Customers c
LEFT JOIN Orders o ON c.id = o.customer_id
Group By c.id, c.name


SELECT c.id, c.name AS customer_name, COLEASCE(MAX(o.amount), 0) AS highest_order
FROM Customer c
LEFT JOIN Orders o ON c.id = o.customer_id
GROUP BY c.id, c.name


const allEven = (arr) => {
    for (let i  = 0; i <arr.length; i++) {
        if ( arr[i] % 2 !== 0 ) {
            return false;
        } 
    }
    return true;
} 


const smallestNum = (arr) => {
    let min = arr[0];
    for (let i = 0, i < arr.length, i++) {
        if (arr[i] < min) {
            min = arr[i];
        } 
    }
    return min;
}


const capitalizeFirstLetter = (sent) => {
  let words = sent.split(' ');

  for (let i = 0; i < words.length; i++) {
    words[i] = 
    words[i].charAt(0).toUpperCase() + 
    words[i].slice(1);
  }
  return words.join(" ");
}