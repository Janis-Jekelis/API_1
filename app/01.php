<?php
namespace App;
$country="latvia";
$search=json_decode(file_get_contents("http://universities.hipolabs.com/search?country=$country"));
var_dump($search);