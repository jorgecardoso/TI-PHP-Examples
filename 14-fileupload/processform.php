
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form data</title>
</head>
<body>

<h1>You submitted the following information:</h1>

<?php

$name = $_POST['name'];
$email = $_POST['email'];


$uploaddir =  'files';
$uploadfile = $uploaddir . '/' . basename( $_FILES['ficheiro']['name'] );

if ( move_uploaded_file($_FILES['ficheiro']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}


?>

</body>
</html>
