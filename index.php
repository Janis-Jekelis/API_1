<?php
declare(strict_types=1);
require_once "vendor/autoload.php";
use App\CollectionOfUniversities;
use League\CLImate\CLImate;
$country=readline("Enter country: ");
$search=json_decode(file_get_contents("http://universities.hipolabs.com/search?country=$country"));
$formatText=new CLImate();
 if(!$search){
     exit("invalid country name:".PHP_EOL);
 }
   $results=new CollectionOfUniversities($search);
   foreach ($results->getUniversities() as $university){
       $formatText->green()->inline("Name: "); $formatText->yellow($university->getName());
      foreach ($university->getWebPages() as $page){
       $formatText->green()->inline("Web page: "); echo $page . PHP_EOL;
      }
      echo PHP_EOL;
   }



