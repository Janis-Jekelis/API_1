<?php
declare(strict_types=1);
namespace App;
class CollectionOfUniversities
{
    private array $universities;
    public function __construct(array $universities)
    {
        $this->universities=[];
        foreach ($universities as $university)
        $this->universities[]=new University($university->name,$university->web_pages );

    }
        public function getUniversities(): array
    {
        return $this->universities;
    }

}
