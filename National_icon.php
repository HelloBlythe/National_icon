<?php
$ip_from_here = json_decode(file_get_contents('https://ipinfo.io/'.$_SERVER['REMOTE_ADDR']));
$ip = $ip_from_here->ip;
$country_code = $ip_from_here->country;
header("Location:http://www.geognos.com/api/en/countries/flag/$country_code.png");
?>