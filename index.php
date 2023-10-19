<?php
declare(strict_types=1);
require_once "vendor/autoload.php";
use App\CollectionOfUniversities;
$country=readline("Enter country: ");
$search=json_decode(file_get_contents("http://universities.hipolabs.com/search?country=$country"));

 if(!$search){
     exit("invalid country name:".PHP_EOL);
 }
   $results=new CollectionOfUniversities($search);
   foreach ($results->getUniversities() as $university){
      echo "Name: ".$university->getName() . PHP_EOL;
      foreach ($university->getWebPages() as $page){
          echo "Web page: ".$page . PHP_EOL;
      }
      echo PHP_EOL;
   }



