
<?php
function removeDuplicates($arr) {

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
?>
<?php
function countVowels($str) {

  $vowels = ['a','e','i','o','u'];
  $count = 0;

  $cleaned = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $str));

  foreach ($vowels as $vowel) {
    $count += substr_count($cleaned, $vowel);
  }

  return $count;
}
?>
<?php
class Rectangle {
  public $width;
  public $height;

  public function __construct($width, $height) {
    $this->width = $width;
    $this->height = $height;
  }

  public function area() {
    return $this->width * $this->height;
  }
  
  public function perimeter() {
    return 2 * ($this->width + $this->height);
  }

}

?>

SELECT c.id, c.name AS customer_name, COUNT(o.customer_id) AS order_count
FROM Customers c
LEFT JOIN Orders o
ON c.id = o.customer_id
GROUP BY c.id, c.name


SELECT c.name AS customer_name
FROM Customers c
JOIN Orders o
ON c.id = o.customer_id
WHERE o.amount > 500

<script>
const largestNum = (arr) => {

  let largest = arr[0];

  for (let i = 0; i < arr.length; i++) {
    if (arr[i] > largest) {
      largest = arr[i];
    }
  }
  return largest;
}

const isPalindrome = (str) => {
    const cleaned = str.toLowerCase().replace("/[^a-z0-9]/g", '');
    return cleaned === cleaned.split('').reverse().join('')

}


const wordCount = (sentence) => {

  let s = sentence.trim();

  return s === '' ? 0 : s.split(' ').length;

}

</script>