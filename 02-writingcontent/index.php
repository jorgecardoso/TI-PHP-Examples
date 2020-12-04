<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Title</title>
</head>
<body>

<header class="<?php echo 'xpto';?>">
    <?php
        echo "This is the ", "header";
    ?>
</header>

<?php
    echo "<main> this is the main content</main>";

?>



<footer>Today is
    <?php
        // prints the name of the current day
        print date("l") ;
    ?>
</footer>
</body>
</html>