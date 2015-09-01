<?php
require_once('../assets/api/phpflickr/phpFlickr.php');

$f = new phpFlickr("######", "######", false);
$recent = $f->photos_getSizes("20321869573");

var_dump($recent);