<?php

// integer
$age = 34;
echo $age;
echo "<br>";

//float
$weight = 67.5;
echo $weight;
echo '<br>';

// boolean
$done = TRUE;
echo $done;
echo '<br>';

// string
$first_name = "jorge";
$last_name = 'cardoso';
echo $first_name, " ", $last_name;
echo '<br>';


// text can be concatenated with the '.' operator
$full_name = $first_name . ' ' . $last_name;
echo $full_name;
echo '<br>';

// variables are expanded in double quoted strings:
$also_full_name = "$first_name $last_name";
echo $also_full_name;
echo '<br>';

$my_array = array(2, 3, 4, "333");
print_r($my_array);
echo '<br>';

var_dump($my_array);


echo '<br>';

if ( isset($newVar) ) {
    echo '$newVar is set';
    echo '<br>';
} else {
    echo '$newVar not set';
    echo '<br>';
}

// Pre-defined variables

print_r($_GET);
echo '<br>';

print_r($_POST);
echo '<br>';

//print_r($_SERVER);
//echo '<br>';
?>