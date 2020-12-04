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


$handle = fopen($filename, "r");

htmlOutputStartTable();

while ( ($data = fgetcsv($handle)) !== FALSE) {
    if (count($data) === 4) {
        htmlOutputLine($data[0], $data[1], $data[2], $data[3]);
    }
}
fclose($handle);
htmlOutputEndTable();

function htmlOutputStartTable() {
    echo '<table>';

    echo '<tr>';
    echo '<th>Name</th><th>Email</th><th>Subjects</th><th>Message</th>';
    echo '</tr>';
}

function htmlOutputEndTable() {
    echo '</table>';
}

function htmlOutputLine($name, $email, $subjects, $message)
{
    $subjects_array = explode(', ', $subjects);

    $subjects_html = implode('<br>', $subjects_array);
    echo '<tr>';
    echo "<td>$name</td><td>$email</td><td>$subjects_html</td><td>$message</td>";
    echo '</tr>';


}

?>
</body>
</html>
