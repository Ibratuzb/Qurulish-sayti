<?php
$n = 4;
$m = 5;

// Bo'sh massiv yaratamiz
$matrix = array_fill(0, $n, array_fill(0, $m, 0));

// Matn ko'rinishida spirallashgan elementlarning tartibini aniqlab chiqamiz.
$count = 1;
for ($i = 0; $i < (min($n, $m) + 1) / 2; $i++) {
    for ($j = $i; $j < $m - $i && $count <= $n * $m; $j++) {
        $matrix[$i][$j] = $count;
        $count++;
    }
    for ($j = $i + 1; $j < $n - $i && $count <= $n * $m; $j++) {
        $matrix[$j][$m - $i - 1] = $count;
        $count++;
    }
    for ($j = $m - $i - 2; $j >= $i && $count <= $n * $m; $j--) {
        $matrix[$n - $i - 1][$j] = $count;
        $count++;
    }
    for ($j = $n - $i - 2; $j > $i && $count <= $n * $m; $j--) {
        $matrix[$j][$i] = $count;
        $count++;
    }
}

// Matnni chiqaramiz
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $m; $j++) {
        echo $matrix[$i][$j] . " ";
    }
    echo "\n";
}
?>
