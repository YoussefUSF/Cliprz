<!doctype html>
<html>
<head>
    <title>Hello</title>
</head>
<body>

{require:index.php}

{x}

{trim}   ok   {/trim}

{php}
$x = 1;
if ($x == 1) {
    echo 'One';
} else {
    echo 'not one';
}
{/php}

</body>
</html>