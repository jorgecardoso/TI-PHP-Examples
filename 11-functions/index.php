<?php include 'lorem.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    echo box( generateLoremH1(5) );

    function box($content) {
        return '<div>' . $content . '</div>';
    }
?>
</body>
</html>