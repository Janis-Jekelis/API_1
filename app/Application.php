<?php
declare(strict_types=1);
namespace App;
use League\CLImate\CLImate;
class Application
{
    private array $database;
        public function __construct()
    {
        $searchWord=readline("Enter country: ");
        $this->database=json_decode(file_get_contents(
            "http://universities.hipolabs.com/search?country=$searchWord"));
    }
    public  function run():void
    {
        $formatText=new CLImate();
                if(!$this->database){
            exit("invalid country name:".PHP_EOL);
        }
        $results=new CollectionOfUniversities($this->database);
        foreach ($results->getUniversities() as $university){
            $formatText->green()->inline("Name: "); $formatText->yellow($university->getName());
            foreach ($university->getWebPages() as $page){
                $formatText->green()->inline("Web page: "); echo $page . PHP_EOL;
            }
            echo PHP_EOL;
        }

    }

}