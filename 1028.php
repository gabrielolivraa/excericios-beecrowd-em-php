<?php

$n = intval(fgets(STDIN));
for ($i = 0; $i < $n; $i++) { 
    list($f1, $f2) = sscanf(fgets(STDIN), "%d %d");
    $max_stack_size = min($f1, $f2, intval(($f1 + $f2) / 2));
    echo $max_stack_size . "\n";
}

?>
