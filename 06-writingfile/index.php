<?php

$filename = 'data.txt';

file_put_contents($filename, "nova palavra\n", FILE_APPEND);


$data = file_get_contents($filename);

echo 'You wrote "' . $data . '" to file.';