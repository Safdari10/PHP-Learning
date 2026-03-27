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

    const questionMarks = (str) => {
        let lastNum = null;
        let questionCount = 0;
        let foundPair = false;

        for (let char of str) {
            if (char === ?) {
                questionCount++;
            } else if (!isNaN(char)) {
                let num = Number(char)

                if (lastNum !== null) {
                    if(lastNum + num === 10) {
                        foundPair = true;
                        if (questionCount !== 3) {
                            return false;
                        }
                    }
                }
                lastNum = num;
                questionCount = 0;
            }
        }
        return foundPair ? "true" : "false"
    }
</script>

<?php
function questionMarks($str): string
{
    $prevNum = null;
    $count = 0;
    $pair = false;
    $chars = preg_split('/\s+/', $str);

    foreach ($chars as $char) {
        if ($char === "?" ) {
            $count++;
        } else if (is_numeric($char)) {
            $num = (int)$char;
            if ($prevNum !== null) {
                if ($prevNum + $num === 10) {
                    $pair = true;
                    if ($count !== 3) {
                        return "false";
                    }
                }
            }
            $prevNum = $num;
            $count = 0;
        }
    }
    return $pair ? "true" : "false";
}
