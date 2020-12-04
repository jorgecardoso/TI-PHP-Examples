<?php

$age = 34;

if ($age > 30) {
    echo 'Over 30';
    echo '<br>';
}

if ($age < 30) {
    echo 'Under 30';
    echo '<br>';
}

// Automatic type conversion for comparison (type juggling)
if ($age < '40') {
    echo 'Under 40';
    echo '<br>';
}

if ($age == '34') {
    echo 'Age is equal to "34"';
    echo '<br>';
}

// identical operator (no type juggling)
if ($age === '34') {
    echo 'Age is identical to "34"';
    echo '<br>';
} else {
    echo 'Age is NOT identical to "34"';
    echo '<br>';
}

if ($age === 34) {
    echo 'Age is identical to 34';
    echo '<br>';
}