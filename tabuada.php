<?php
$n = $_POST['numero'];
$i = 1;
while ($i <= 30) {
    $r = $n * $i;
    echo "$n x $i = $r <br>";
    $i++;
}

