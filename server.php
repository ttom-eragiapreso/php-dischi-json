<?php

$string = file_get_contents('dischi.json');

$discs = json_decode($string, true);


header('Content-Type : application/json');

var_dump(($discs));
