<?php
// File to store the view count
$file = 'views.txt';

// Read the current count
$current = file_exists($file) ? (int)file_get_contents($file) : 0;

// Increment the count
$current++;

// Save the new count
file_put_contents($file, $current);
?>
