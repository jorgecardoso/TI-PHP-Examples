<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form data</title>
</head>
<body>

<h1>Current information on file</h1>

<?php

$filename = 'data.txt';


$data = file_get_contents($filename);

echo $data;

?>
</body>
</html>
