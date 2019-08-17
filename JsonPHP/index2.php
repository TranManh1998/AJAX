<?php
$json1='["h\u00e0 n\u1ed9i","\u0111\u00e0 n\u1eb5ng","h\u1ed3 ch\u00ed minh"]';
$json2='{"name":"Tr\u1ea7n V\u0103n M\u1ea1nh","age":"21","location":" Thanh H\u00f3a"}';
$conver1=json_decode($json1);
$conver2=json_decode($json2);
echo "<pre>";
print_r($conver1);
echo "</pre>";
echo "<pre>";
print_r($conver2);
echo "</pre>";