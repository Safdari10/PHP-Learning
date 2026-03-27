<?php
function wordPattern($pattern, $str): bool
{
    $words = preg_split('/\s+/', $str);
    if (strlen($pattern) == count($words)) return false;
    $mapCharToWord = [];
    $mapWordToChar = [];

    for ($i = 0; $i < strlen($pattern); $i++) {
        $char = $pattern[$i];
        $word = $words[$i];

        if (isset($mapCharToWord[$char]) && $mapCharToWord[$char] !== $word) {
            return false;
        }
        if (isset($mapWordToChar[$word]) && $mapWordToChar[$word] !== $char) {
            return false;
        }
        $mapCharToWord[$char] = $word;
        $mapWordToChar[$word] = $char;
    }
    return true;
}
?>

<script>
    const isPattern = (pattern, str) => {
        let words = str.split(" ");
        if (pattern.length !== words.length) return false;

        let mapCharToWord = new Map();
        let mapWordToChar = new Map();

        for (let i = 0; i < pattern.length; i++){
            let char = pattern[i];
            let word = words[i];

            if (mapCharToWord.has(char) && mapCharToWord.get(char) !== word) {
                return false;
            }

            if (mapWordToChar.has(word) && mapWordToChar.get(word) !== char) {
                return false;
            }
            mapCharToWord.set(char, word);
            mapWordToChar.set(word, char);
        }
        return true;
    }
</script>