
<!-- varibles in php -->

$name = "John";
$age = 30;
$isDev = true;

echo "My name is $name, I am $age years old, and I am a developer: $isDev.";


<!-- Arrays -->
$numbers = [1, 2, 3, 4, 5];
echo $numbers[0]; // Output: 1

<!-- Associative Arrays -->
 // Associative array to store user information, where the keys are the field names and the values are the corresponding data.
 $user = [
   "name" =>  "Alice",
   "age" => 25,
   "email" => "alice@example.com"
 ];
 echo $user["name"]; // Output: Alice

 <!-- Loops -->

 // For loop to print numbers from 0 to 4
 for ($i = 0; $i < 5; $i++) {
    echo $i;
 }

 // Foreach loop to iterate through an array (very impportant)
 foreach ($numbers as $num) {
    echo $num;
 }

 // For associative arrays:
  foreach ($user as $key => $value) {
    echo $key . ":" . $value . "<br>";
  }

<!-- Functions -->
 function add($a, $b) {
    return $a + $b;
 }
 echo add(2, 3); // Output: 5


 <!-- String Functions (Important for test)  -->
  strlen("hello"); // Returns the length of the string
  strtolower("HELLO"); // Converts the string to lowercase
  strtoupper("hello"); // Converts the string to uppercase
  str_replace("a", "b", "apple"); // Replaces all occurrences of "a" with "b" in the string "apple"
  $words = explode(" ", "hello world"); // Splits the string into an array of words
  $sentence = implode(" ", ["hello", "world"]); // Joins the array of words into a single string
  $trim("  hello  "); // Removes whitespace from the beginning and end of the string

  <!-- example practice -->
   $car = "Toyota";
   $car = strrev($car); // Reverses the string "Toyota"
   echo $car; // Output: atoyoT

   $fruit1 = "banana";
   $fruit = substr_count($fruit1, "a"); // Counts the number of occurrences of "a" in the string "banana"
   echo $fruit; // Output: 3

   $someNumbers = [1, 2, 3, 4, 5, 6];
   $evenNumbers = array_filter($someNumbers, function($num) {
    return $num % 2 === 0; // Returns true for even numbers
   }) 
    print_r($evenNumbers); // Output: Array ( [1] => 2 [3] => 4 [5] => 6 )


    <!-- excercises  -->

    // 1. Create a function that takes a string as input and returns true if it is a palindrome (reads the same backward as forward), and false otherwise.
    function isPalindrome($str) {
        $cleanedStr = strtolower(preg_replace('/[^a-z0-9]/', '', $str)); // Remove non-alphanumeric characters and convert to lowercase
         return $cleanedStr === strrev($cleanedStr) ? true : false; // Check if the cleaned string is the same as its reverse
    }
    var_dump(isPalindrome("level")); // Output: true
    var_dump(isPalindrome("hello")); // Output: false

    // 2. Given an array of numbers return the number that appears most frequently
    function mostFrequent($arr) {
        $frequency = array_count_values($arr); // Count the frequency of each value in the array
        return array_search(max($frequency), $frequency); // Return the value with the highest frequency 
    }
    $numbers = [1, 2, 2, 3, 3, 3, 4];
    echo mostFrequent($numbers); // Output: 3
    $numbers2 = [1, 2, 2, 3, 4, 4, 4];
    echo mostFrequent($numbers2); // Output: 4

    // 3. Given a string return the word the appears most frequently in the string
    function mostFrequentWords($str) {
        $cleanedStr = strtolower(preg_replace('/[^a-z0-9 ]/', '', $str)); // Remove non-alphanumeric characters except spaces and convert to lowercase
        $words = array_filter(explode(" ", $cleanedStr)); // Split the cleaned string into an array of words and filter out any empty values
        $frequency = array_count_values($words); // count the frequency of each word
        return array_search(max($frequency), $frequency); // return the word with the highest frequency 
    }
    $sentence = "What day is today? today is Friday. the day after thursday is today.";
    var_dump(mostFrequentWords($sentence)); // Output: "today"
    $sentence2 = "the quick brown fox jumps over the lazy dog";
    var_dump(mostFrequentWords($sentence2)); // Output: the

    // 4. Given an array of numbers return true if any two numbers sum to 9, otherwise return false.
    function sumToNine($numbers) {
        $seen = []; // Initialize an empty array to keep track of seen numbers

        foreach ($numbers as $num) {
            $complement = 9 - $sum; // Calculate the complement that would sum to 9
            if (in_array($complement, $seen)) { // Check if the complement has already been seen
                return true; // If it has, return true
            }
            $seen[] = $num; // Add the current number to the seen array
        } 
        return false; // Return false if no pairs sum to 9
    }

    $numbers = [1, 2, 3, 4, 5];
    var_dump(sumToNine($numbers)); // Output: false (no two numbers sum to 9)
    var_dump(sumToNine($numbers2)); // Output: true (4 + 5 = 9)
