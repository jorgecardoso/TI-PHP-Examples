<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form data</title>
</head>
<body>

<h1>You submitted the following information:</h1>

<?php
//print_r($_GET);
echo "Name is: " . $_GET['name'] . '<br>';
echo "Your email is: " . $_GET['email'] . '<br>';

?>

</body>
</html>
