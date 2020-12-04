
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form data</title>
</head>
<body>

<h1>You submitted the following information:</h1>

<?php

$filename = 'data.txt';

$name = $_POST['name'];
$email = $_POST['email'];

echo $name;
echo '<br>';
echo $email;

$line_to_write = $name . ', ' . $email . "\n";

file_put_contents($filename, $line_to_write, FILE_APPEND);

?>
</body>
</html>
