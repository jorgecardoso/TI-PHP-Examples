<html>
<head>
    <title>Conditions</title>
</head>
<body>

<?php
if ( isset($_GET['page']) && $_GET['page'] === 'one') {
    echo '<h1>One</h1>';
    echo '<p>Lorem ipsum...</p>';
} else {
    echo '<h1>Not One</h1>';
    echo '<p>Lorem ipsum...</p>';
}
?>



<?php if (isset($_GET['page']) && $_GET['page'] === 'one') {    ?>

    <h1>One</h1>
    <p>Lorem ipsum...</p>

<?php } else {  ?>

    <h1>Not One</h1>
    <p>Lorem ipsum...</p>

<?php } ?>

</body>
</html>
