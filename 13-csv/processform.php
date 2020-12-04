
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
$subjects = $_POST['subjects'];
$message = $_POST['message'];

htmlOutputForm($name, $email, $subjects, $message);

fileOutputForm($name, $email, $subjects, $message, $filename);

function htmlOutputForm($name, $email, $subjects, $message)
{
    $subjects_html = implode(', ', $subjects);
    echo '<table>';

    echo '<tr>';
    echo '<th>Name</th><th>Email</th><th>Subjects</th><th>Message</th>';
    echo '</tr>';

    echo '<tr>';
    echo "<td>$name</td><td>$email</td><td>$subjects_html</td><td>$message</td>";
    echo '</tr>';

    echo '</table>';
}


function fileOutputForm($name, $email, $subjects, $message, $filename)
{
    $line_to_write = $name . ', ';
    $line_to_write = $line_to_write . $email . ',';

    $line_to_write = $line_to_write . '"' .implode(', ', $subjects) . '"' . ',';
    $line_to_write = $line_to_write . $message;
    $line_to_write = $line_to_write . "\n";

    file_put_contents($filename, $line_to_write, FILE_APPEND);
}


?>
</body>
</html>
