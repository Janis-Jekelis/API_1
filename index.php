<?php
declare(strict_types=1);
namespace APP;

$country="latvia";
$search=json_decode(file_get_contents("http://universities.hipolabs.com/search?country=$country"));
var_dump($search);