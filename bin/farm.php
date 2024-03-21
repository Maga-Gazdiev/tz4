#!/usr/bin/env php
<?php

require_once __DIR__ . '/../vendor/autoload.php';

use src\Animal\Cow;
use src\Animal\Chicken;
use src\Farm\Farm;

$farm = new Farm();
for ($i = 1; $i <= 10; $i++) {
    $cow = new Cow($i);
    $farm->addAnimal($cow);
}

for ($i = 1; $i <= 20; $i++) {
    $chicken = new Chicken($i);
    $farm->addAnimal($chicken);
}

for ($i = 1; $i <= 7; $i++) {
    $farm->products();
}

$animalTypesCount = $farm->countAnimalTypes();
echo "На ферме " . $animalTypesCount['Cow'] . " коров и " . $animalTypesCount['Chicken'] . " куриц\n";

$animalProductsCountWeek = $farm->countAnimalProductsAllTime();
foreach ($animalProductsCountWeek as $product => $count) {
    echo "$product: $count\n";
}


echo "\n";


for ($i = 1; $i <= 5; $i++) {
    $chicken = new Chicken($i);
    $farm->addAnimal($chicken);
}
$cow = new Cow($i);
$farm->addAnimal($cow);

for ($i = 1; $i <= 7; $i++) {
    $farm->products();
}

$animalTypesCount = $farm->countAnimalTypes();
echo "На ферме " . $animalTypesCount['Cow'] . " коров и " . $animalTypesCount['Chicken'] . " куриц\n";

$animalProductsCountWeek = $farm->countAnimalProductsAllTime();
foreach ($animalProductsCountWeek as $product => $count) {
    echo "$product: $count\n";
}
