<?php
declare(strict_types=1);

namespace App;
class University
{
    private string $name;
    private array $webPages;

    public function __construct(string $name, array $webPages)
    {
        $this->name = $name;
        $this->webPages = $webPages;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getWebPages(): array
    {
        return $this->webPages;
    }

}
