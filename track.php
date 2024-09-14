<?php
$file = 'views.txt';
$current = file_exists($file) ? (int)file_get_contents($file) : 0;
$current++;
file_put_contents($file, $current);
?>
