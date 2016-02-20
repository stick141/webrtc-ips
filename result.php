<html>
<head>
</style>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style type="text/css">

body

{background-image:url("22672.gif");

background-repeat:repeat-y;

background-position:top center;

background-attachment:fixed}

</style>
</head>
<body>
<font color="red">
<h1>Skids Who got logged</h1>
<p>Have Fun Guys!</p>
<p>REKT.</p>

<?php 
$str= file_get_contents("log.txt");
$str = nl2br($str, true); // for XHMTL (in other words <br />). Use false for <br>. i.e $str = nl2br($str, false);
echo $str;
?>
</font>
</body>
</html>
</body>
</html>