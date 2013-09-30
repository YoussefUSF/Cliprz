<!DOCTYPE html>
<html>
<head>
<meta charset="<?=CHARSET;?>" />
<title>Cliprz framework</title>
<style type="text/css">
html, body { margin: 0; padding: 0; }
body {
    background-color: #FBFBFB;
    color: #333333;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 14px;
}
a { color: #006699; text-decoration: none; }
header { width: 60%; margin: 0 auto; position: relative; padding: 10px; }
footer { width: 60%; margin: 0 auto; position: relative; padding: 10px; }
#page {
    width: 60%;
    margin: 0 auto;
    position: relative;
    background-color: #FFF;
    padding: 10px;
    border-radius: 5px;
    box-shadow: 1px 1px 1px #dddddd;
}

.null { margin: 0; padding: 0; }
.path { color: #FBFBFB; background-color: #333333; padding: 0px 3px; font-size: 11px; }
</style>
</head>
<body>

<header>
    <img src="assets/img/CLIPRZ.PNG" alt="Cliprz" />
</header>

<div id="page">
    <h2 class="null">Welcome</h2>
    <p>Welcome to the most easily framework written under PHP,
    Color your project with the easy framework in world,
    Simple and secure framework,
    Programming your project is really powerful with Cliprz framework,</p>
    <h2 class="null">Requirements</h2>
    <ul>
        <li>PHP 5.4.x or newer.</li>
        <li>Enable mod_rewrite module.</li>
    </ul>
	<h2 class="null">Modify this page</h2>
	<p>If you want to modify this page you can go to
	<code class="path"><?=APPPATH;?>Views<?=DIRECTORY_SEPARATOR;?>welcome.php</code> path,
	Our you can modify the controller by visting
	<code class="path"><?=APPPATH;?>Controllers<?=DIRECTORY_SEPARATOR;?>Welcome.php</code> path.</p>
	<h2 class="null">Easy to learn</h2>
	<p>You can learn Cliprz framework by visting our <a target="_blank" href="">Manual</a>.</p>
</div>

<footer>
    &copy; <?=date('Y');?> <a href="http://www.cliprz.org">Cliprz</a>.
</footer>

</body>
</html>