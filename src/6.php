<?php
$randomNumber = rand(1, 10);
$randomString = "The quick brown fox jumps over the lazy dog";
$randomBoolean = boolval(rand(0, 2));
return $randomNumber . ',' . $randomString . ',' . $randomBoolean;
