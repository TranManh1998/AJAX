<?php
$json1='["h\u00e0 n\u1ed9i","nam \u0111\u1ecbnh","h\u1ed3 ch\u00ed minh"]';
$json2='{"name":"\u0110\u00e0o V\u0103n H\u1ea3i","age":"21","location":" Thanh H\u00f3a"}';
$conver1=json_decode($json1);
$conver2=json_decode($json2);
echo "<pre>";
print_r($conver1);
echo "</pre>";
echo "<pre>";
print_r($conver2);
echo "</pre>";