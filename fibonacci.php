<?php
function fibonacci($n) {
    if ($n == 0) return 0;
    if ($n == 1) return 1;
    return fibonacci($n - 1) + fibonacci($n - 2);
}

$n = 10; // Adjust this value to change the number of Fibonacci sequence elements
echo "Fibonacci sequence up to $n terms: ";
for ($i = 0; $i < $n; $i++) {
    echo fibonacci($i);
    echo " ";
}
?>
