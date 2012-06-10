<html>
<!-- Reload this side every 58secs. -->
<meta http-equiv="refresh" content="58; URL=server-status-eu.php" />

<!-- Countdown Script -->
<script language="JavaScript" type="text/javascript">
function decreaseTimer() {
var element = document.getElementById('shouttimer');
element.value = element.value - 1;
setTimeout("decreaseTimer()", 1000); 
}
<!-- /Countdown Script -->
</script>

<head>
<title>Server-Status - TERA-Online - EU Server</title>
</head>

<STYLE type="text/css">
.inputfield {border:none; text-align:center; width:20px;}
.coded {font-family: Geneva, Arial, Helvetica, sans-serif; color: rgb(197, 197, 197); font-variant:small-caps;}
.coded a {font-family: Geneva, Arial, Helvetica, sans-serif; color: rgb(197, 197, 197); font-variant:small-caps;text-decoration:none}
.coded a:hover {font-family: Geneva, Arial, Helvetica, sans-serif; color: rgb(197, 197, 197); font-variant:small-caps;text-decoration:underline}
</STYLE>

<body>

<!-- Socket Script -->
<?php
function check($ip, $port){
    $fp = @fsockopen($ip, $port, $errno, $errstr, 0.3);
    if(!$fp) return false;
    return true;
}
?>
<!-- /Socket Script -->
		<div>
			<p style="text-align: center;">

<!-- Account / Login Server -->
<?php
if(check("IP", "PORT")) echo ("<div align='center'>Account / Login Server<br><img src='img/online.png' alt='online'><br></div>");
else echo ("<div align='center'>Login Server<br><img src='img/offline.png' alt='offline'><br></div>");
?>
<!-- /Account / Login Server -->


</p>
		</div>
		<p>
			
		<div>
		<table align="center" border="0" cellpadding="1" cellspacing="1" style="width: 65%">
			<tbody>
				<tr>
					<td >
						&nbsp;</td>
					<td style="text-align: center;">
						<p>
							<img alt="Deutsche" src="img/flagge_de.jpg" style="width: 100px; height: 59px;" />
					</td>
					<td style="text-align: center;">
						<p>
							<img alt="Englisch" src="img/flagge_en.jpg" style="width: 100px; height: 59px;" />
					</td>
					<td style="text-align: center;">
						<p>
							<img alt="" src="img/flagge_fr.jpg" style="width: 100px; height: 59px;" />
					</td>
				</tr></tr></tbody>
		</table><hr />
				<table align="center" border="0" cellpadding="1" cellspacing="1" style="width: 70%">
			<tbody>
				<tr>
					<td style="text-align: center;">
						PvP</td>
<!-- Arachnea / DE / PvP -->
					<td style="text-align: center;">Arachnea<br>
<?php
if(check("IP", "PORT")) echo ("<img src='img/online.png' alt='online'>");
else echo ("<img src='img/offline.png' alt='offline'>");
?>
</td>
<!-- Essenia / EN / PvP -->
					<td style="text-align: center;">Essenia<br>
<?php
if(check("IP", "PORT")) echo ("<img src='img/online.png' alt='online'>");
else echo ("<img src='img/offline.png' alt='offline'>");
?>
</td>
<!-- Callida / FR / PvP -->
					<td style="text-align: center;">Callida<br>
<?php
if(check("IP", "PORT")) echo ("<img src='img/online.png' alt='online'>");
else echo ("<img src='img/offline.png' alt='offline'>");
?>
						</td>
				</tr>
				<tr>
					<td style="text-align: center;">
						</td>
<!-- Lok / DE / PvP -->
					<td style="text-align: center;">Lok<br>
<?php 
if(check("IP", "PORT")) echo ("<img src='img/online.png' alt='online'>");
else echo ("<img src='img/offline.png' alt='offline'>");
?>
						</td>
<!-- Samael / EN / PvP -->
					<td style="text-align: center;">Samael<br>
<?php 
if(check("IP", "PORT")) echo ("<img src='img/online.png' alt='online'>");
else echo ("<img src='img/offline.png' alt='offline'>");
?>
						</td>
					<td style="text-align: center;">
						&nbsp;</td>
				</tr></tbody>
		</table><hr />
				<table align="center" border="0" cellpadding="1" cellspacing="1" style="width: 70%">
			<tbody><tr>
					<td style="text-align: center;">
						PvE</td>
<!-- Elion / DE / PvE -->
					<td style="text-align: center;">Elion<br>
<?php
if(check("IP", "PORT")) echo ("<img src='img/online.png' alt='online'>");
else echo ("<img src='img/offline.png' alt='offline'>");
?>
						</td>
<!-- Allemanthea / EN / PvE -->
					<td style="text-align: center;">Allemantheia<br>
<?php 
if(check("IP", "PORT")) echo ("<img src='img/online.png' alt='online'>");
else echo ("<img src='img/offline.png' alt='offline'>");
?>
						</td>
<!-- Ellinu / FR / PvP -->
					<td style="text-align: center;">Ellinu<br>
<?php
if(check("IP", "PORT")) echo ("<img src='img/online.png' alt='online'>");
else echo ("<img src='img/offline.png' alt='offline'>");
?>
						</td>
				</tr>
				<tr>
					<td style="text-align: center;">
						</td>
<!-- Kaia / DE / PvE -->
					<td style="text-align: center;">Kaia<br>
<?php
if(check("IP", "PORT")) echo ("<img src='img/online.png' alt='online'>");
else echo ("<img src='img/offline.png' alt='offline'>");
?>
						</td>
<!-- Velik / EN / PvE -->
					<td style="text-align: center;">Velik<br>
<?php
if(check("IP", "PORT")) echo ("<img src='img/online.png' alt='online'>");
else echo ("<img src='img/offline.png' alt='offline'>");
?>
						</td>
					<td>
						&nbsp;</td>
				</tr>
			</tbody>
		</table><br>

<!-- Countdown and copyleft -->

<div align="center">Diese Seite aktualisiert sich in <body onLoad="decreaseTimer();">
<input  type="text" id="shouttimer" value="61" size="1" maxlength="1" class="inputfield" />Sekunden.
</div><br>
<div align="center"><p class="coded">copyleft<br>coded 2012 by<a href="https://d3.indoubt.at/" title="D3 .inDoubt.Depl.Dep." target="_blank"><br><b>D&sup3;</b><br>.in<b>D</b>oubt.<b>D</b>epl.<b>D</b>ep.</a></p></div></div></body>
</html>
