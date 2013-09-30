<!DOCTYPE html>
<html>
<head>
    <meta charset="<?=CHARSET;?>" />
    <title>404 Not Found</title>
    <style type="text/css">
    ::selection{ background-color: white; color: white; }
    ::moz-selection{ background-color: white; color: white; }
    ::webkit-selection{ background-color: white; color: white; }
    body, html { margin: 0; padding: 0; min-height: 100%; }
    body {
        font-size: 14px;
        background-color: #FFF;
        color: #333333;
        font-family: Arial, Helvetica, sans-serif;
    }
    .box {
        text-shadow: 1px 1px 0px #000;
        background-color: #E13300;
        color: white;
        width: 50%;
        margin: 50px auto 20px auto;
        position: relative;
        padding: 10px;
        -moz-box-shadow: 1px 1px 0px #EDEDED;
        -webkit-box-shadow: 1px 1px 0px #EDEDED;
        box-shadow: 1px 1px 0px #EDEDED;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        border-radius: 5px;
    }
    .box h1 {
        margin: 0;
    }
    .box a {
        color: #FFF;
    }
    </style>
</head>
<body>

<div class="box">
<h1>404 Not Found</h1>
<p>The requested URL was not found on this server.</p>
<p>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p>
<p style="text-align: center;"><a href="<?=HTTP::url();?>">Back to home page</a></p>
</div>

</body>
</html>