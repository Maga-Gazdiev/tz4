<?php

namespace src\Farm;

use src\Animal\Animal;

class Farm
{
    protected $animals = [];

    public function addAnimal(Animal $animal)
    {
        $this->animals[] = $animal;
    }

    public function products()
    {
        for ($i = 0; $i <= $this->countAnimal() - 1; $i++) {
            $this->animals[$i]->products();
        }
    }

    public function countAnimalTypes()
    {
        $result = [];

        foreach ($this->animals as $animal) {
            $type = $animal->getType();

            if (!isset($result[$type])) {
                $result[$type] = 0;
            }

            $result[$type]++;
        }

        return $result;
    }


    public function countAnimalProductsAllTime()
    {
        $result = [];

        foreach ($this->animals as $animal) {
            $product = $animal->getProduct();
            $productCounts = $animal->getProductCount();

            if (!isset($result[$product])) {
                $result[$product] = 0;
            }

            $result[$product] += array_sum($productCounts);
        }

        return $result;
    }



    public function countAnimal()
    {
        return count($this->animals);
    }
}
