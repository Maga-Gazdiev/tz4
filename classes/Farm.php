<?php

class Farm
{
    protected $animals = [];

    public function addAnimal(Animal $animal)
    {
        $this->animals[] = $animal;
    }

    public function getAllProducts()
    {
        $totalProduce = 0;
        foreach ($this->animals as $animal) {
            $totalProduce += $animal->produce();
        }
        return $totalProduce;
    }

    public function getAnimalCount()
    {
        $animalCount = [];
        foreach ($this->animals as $animal) {
            $type = get_class($animal);
            if (!isset($animalCount[$type])) {
                $animalCount[$type] = 0;
            }
            $animalCount[$type]++;
        }
        return $animalCount;
    }

    public function getAllCattleCount()
    {
        return count($this->animals);
    }
}