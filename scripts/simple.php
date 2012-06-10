<?php
function check($ip, $port){
    $fp = @fsockopen($ip, $port, $errno, $errstr, 0.3);
    if(!$fp) return false;
    return true;
}
?>

<?php
if(check("8.8.8.8", "53")) echo ("<div align='center'>Google Public DNS Server / Port 53<br><img src='img/online.png' alt='online'><br></div>");
else echo ("<div align='center'>Google Public DNS Server / Port 53<br><img src='img/offline.png' alt='offline'><br></div>");
?>

<?php
if(check("8.8.8.8", "2222")) echo ("<div align='center'>Google Public DNS Server / Port 2222 - Sollte nicht erreichbar sein<br><img src='img/online.png' alt='online'><br></div>");
else echo ("<div align='center'>Google Public DNS Server / Port 2222 - Sollte nicht erreichbar sein<br><img src='img/offline.png' alt='offline'><br></div>");
?>