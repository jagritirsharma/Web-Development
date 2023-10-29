<?php
function factorial($n) {
    if ($n == 0) return 1;
    return $n * factorial($n - 1);
}

$n = 5; // Adjust this value to change the number for which you want to find the factorial
echo "Factorial of $n is: " . factorial($n);
?>
