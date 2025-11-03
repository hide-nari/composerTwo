<?php
namespace Hidenari\ComposerTwo;

class Person
{
    private $name = 'saburo';
    private $age = 15;

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }
}