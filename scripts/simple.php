<?php
function check($ip, $port){
    $fp = @fsockopen($ip, $port, $errno, $errstr, 0.3);
    if(!$fp) return false;
    return true;
}
?>

<!-- Google's Public DNS Host auf Port 53 - Sollte perma. online sein -->
<?php
if(check("8.8.8.8", "53")) echo ("<div align='center'>Google Public DNS Server / Port 53<br><img src='img/online.png' alt='online'><br></div>");
else echo ("<div align='center'>Google Public DNS Server / Port 53<br><img src='img/offline.png' alt='offline'><br></div>");
?>

<!-- Google's Public DNS Host auf Port 2222 - Dieser Port sollte geschlossen sein und somit als offline angezeigt werden -->
<?php
if(check("8.8.8.8", "2222")) echo ("<div align='center'>Google Public DNS Server / Port 2222 - Sollte nicht erreichbar sein<br><img src='img/online.png' alt='online'><br></div>");
else echo ("<div align='center'>Google Public DNS Server / Port 2222 - Sollte nicht erreichbar sein<br><img src='img/offline.png' alt='offline'><br></div>");
?>