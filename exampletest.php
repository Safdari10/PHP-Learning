
// a function that takes an array of numbers and a new array where all negative numbers are removed and reamining numbers are sorted in ascending order, duplicates are removed.

function tidyArray($numbers) {
    $tidyArray = array_filter($numbers, function($num) {
        return $num >= 0;
    });

    $tidyArray = array_unique($tidyArray);
    sort($tidyArray);

    return $tidyArray;
}

$numbers1 = [-3, 5, 1, 5, -2, 3];
$result = TidyArray($numbers1);
print_r($result); // Output: Array ( [0] => 1 [1] => 3 [2] => 5 )


// a function that takes an array of numbers and returns a new array with duplicates removed and preserve original order.
function removeDuplicates($arr) {   
    $seen = [];
    $result = [];
    foreach ($arr as $num) {
        if (!in_array($num, $seen)) {
            $seen[] = $num; // Add the number to the seen array
            $result[] = $num; // Add the number to the result array
        }
    }
    return $result; // Return the result array with duplicates removed
}

$numbers2 = [3,1,3,2,1,5];
$result2 = removeDuplicates($numbers2);
print_r($result2); // Output: Array ( [0] => 3 [1] => 1 [2] => 2 [3] => 5 )


// a function that counts vowels in a string and returns total number vowels in the string.

function countVowels($str) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;

     $cleanedStr = preg_replace('/[^a-z]/', '', strtolower($str)); // Remove non-alphabetic characters and convert to lowercase

    foreach ($vowels as $vowel) {
        $count += substr_count($cleanedStr, $vowel); // Count the occurrences of the vowel in the cleaned string and add to the count
    } 
    return $count; // Return the total count of vowels in the string
}

$string = "Hello World";
echo countVowels($string); // Output: 3 (e, o, o)



function sumPOsitive($arr) {
    $sum = 0;
    foreach ($arr as $num) {
        if ($num > 0) {
            $sum += $num;
        }
    }
    return $sum;
}

num2 = [4, -2, 7, 0, -5, 3];
echo sumPOsitive(num2); // Output: 14 (4 + 7 + 3)


// return the first character that appears only once
function firstUniqueChar($str) {
    $charCount = array_count_values(str_split($str)) ; // Count the frequency of each character in the string
    foreach ($charCount as $char => $count) {
        if ($count === 1) {
            return $char; // Return the first character that appears only once    
        }
    }
    return null; // Return null if no unique character is found
}

function firstUniqueChar2($str) {
    $charCount = array_count_values(str_split($str));
    foreach (str_split($str) as $char) {
        if  ($charCount[$char] === 1) {
            return $char;
        }
    }
    return null;
}





