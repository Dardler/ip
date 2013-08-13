<?php

$MyIP = file_get_contents('http://ipv4.internet.yandex.ru/api/v0/ip');
echo $MyIP . "</br>";
?>
