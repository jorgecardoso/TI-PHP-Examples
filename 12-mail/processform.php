
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




htmlOutputForm($name, $email);


fileOutputForm($name, $email, $filename);



mailOutputForm($name, $email);


/**
 * @param $name
 * @param $email
 */
function htmlOutputForm($name, $email)
{
    echo $name;
    echo '<br>';
    echo $email;
}

/**
 * @param $name
 * @param $email
 * @param $filename
 */
function fileOutputForm($name, $email, $filename)
{
    $line_to_write = $name . ', ' . $email . "\n";

    file_put_contents($filename, $line_to_write, FILE_APPEND);
}


function mailOutputForm($name, $email)
{

    $message = "Hi,
Someone just registered. 
   
Registration data:
Name: $name
Email: $email
 
Cheers,
The admin
    ";

    mail($email,
        'Form submitted',
       $message,
        'From: jorgecardoso@dei.uc.pt');
}
?>
</body>
</html>
