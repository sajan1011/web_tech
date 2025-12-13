<h2>Sorting array in Ascending and Descending order</h2>
<?php
$arr = array(40, 12, 598, 127, 202);
$n = count($arr);

for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($arr[$j] > $arr[$j + 1]) {
            $temp = $arr[$j];
            $arr[$j] = $arr[$j + 1];
            $arr[$j + 1] = $temp;
        }
    }
}

echo "Ascending: ";
for ($i = 0; $i < $n; $i++) {
    echo $arr[$i] . " ";
}

for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($arr[$j] < $arr[$j + 1]) {
            $temp = $arr[$j];
            $arr[$j] = $arr[$j + 1];
            $arr[$j + 1] = $temp;
        }
    }
}

echo "<br>Descending: ";
for ($i = 0; $i < $n; $i++) {
    echo $arr[$i] . " ";
}
?>