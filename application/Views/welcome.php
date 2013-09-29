<!DOCTYPE html>
<html>
<head>
<title>Cliprz framework</title>
<style type="text/css">
html, body { margin: 0; padding: 0; }
body {
    background-color: #F9F9F9;
    color: #333333;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 14px;
}
a { color: #006699; text-decoration: none; }
header { width: 70%; margin: 0 auto; position: relative; padding: 10px; }
footer { width: 70%; margin: 0 auto; position: relative; padding: 10px; }
#page { width: 70%; margin: 0 auto; position: relative; background-color: #FFF; padding: 10px;
border-radius: 5px;
box-shadow: 2px 2px 1px #dddddd;
}

.null { margin: 0; padding: 0; }
</style>
</head>
<body>

<header>
    <img src="assets/img/CLIPRZ.PNG" alt="Cliprz" />
</header>

<div id="page">
    <p>Hello world, testing view</p>
</div>

<footer>
    &copy; <?=date('Y');?> <a href="http://www.cliprz.org">Cliprz</a>.
</footer>

</body>
</html>