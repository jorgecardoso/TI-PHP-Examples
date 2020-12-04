<?php

/* simple array */
$users = array('jorge', 'joao', "ana");

print_r($users);
echo '<br>';

for ($i = 0; $i < count($users); $i++) {
    echo $users[$i];
    echo '<br>';
}



/*
 * arrays in PHP are associative arrays (i.e., 'indices' may be strings)
 * key => value
 * */
$user_ages = array('jorge' => 37, 'joao' => 40, 'ana' => 20);
print_r($user_ages);
echo '<br>';

echo 'Jorge is ' . $user_ages['jorge'] . ' years old.';
echo '<br>';


/* indices may also be numbers */
$qual_grade = array(
    0 => 'Insuficiente',
    1 => 'Insuficiente',
    2 => 'Insuficiente',
    3 => 'Insuficiente',
    4 => 'Insuficiente',
    5 => 'Insuficiente',
    6 => 'Insuficiente',
    7 => 'Insuficiente',
    8 => 'Insuficiente',
    9 => 'Insuficiente',
    10 => 'Suficiente',
    11 => 'Suficiente',
    12 => 'Suficiente',
    13 => 'Suficiente',
    14 => 'Bom',
    15 => 'Bom',
    16 => 'Muito Bom',
    17 => 'Muito Bom',
    18 => 'Excelente',
    19 => 'Excelente',
    20 => 'Excelente'
    );

$nota_jorge = 15;

echo 'Jorge\'s note is "' . $qual_grade[$nota_jorge] . '"';
echo '<br>';

/* because arrays are associative, simple for loop cannot be used */
$arr = array(
    1 => 'ok',
    'ok' => 20);

echo 'First attempt at iterating over array:';
echo '<br>';
for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i];
    echo '<br>';
}

// http://php.net/manual/en/control-structures.foreach.php
echo 'Iterating over array with foreach';
echo '<br>';
foreach($arr as $val) {
    echo '<br>';
    echo $val;
}

// if we also want to know the key:
foreach($arr as $key => $val) {
    echo '<br>';
    echo $key . ': ' . $val;
}