<!doctype html>
<html>
<head>
    <title>Hello</title>
</head>
<body>

<?php require('index.php'); ?>

<?php echo ((isset($x)) ? $x : 'invalid {x} variable'); ?>

ok

<?php

$x = 1;
if ($x == 1) {
    echo 'One';
} else {
    echo 'not one';
}

?>

</body>
</html>