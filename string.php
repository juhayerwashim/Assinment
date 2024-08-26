<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    // Count the number of vowels
    $vowelCount = 0;
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    
    foreach (str_split($string) as $char) {
        if (in_array($char, $vowels)) {
            $vowelCount++;
        }
    }

    // Reverse the string
    $reversedString = '';
    for ($i = strlen($string) - 1; $i >= 0; $i--) {
        $reversedString .= $string[$i];
    }

    // Print the results
    echo "Original String: $string\n";
    echo "Reversed String: $reversedString\n";
    echo "Vowel Count: $vowelCount\n\n";
}

?>
