<?php

require_once 'classes/Abstract/Animal.php';
require_once 'classes/Cow.php';
require_once 'classes/Chicken.php';
require_once 'classes/Farm.php';

$farm = new Farm();

for ($i = 1; $i <= 10; $i++) {
    $cow = new Cow($i);
    $farm->addAnimal($cow);
}

for ($i = 1; $i <= 20; $i++) {
    $chicken = new Chicken($i);
    $farm->addAnimal($chicken);
}

echo "До покупки:\n";
print_r($farm->getAnimalCount());

$totalProducts = $farm->getAllProducts();
echo "Общее количество продуктов: $totalProducts\n";

for ($day = 1; $day <= 7; $day++) {
    $totalProducts = $farm->getAllProducts();
    echo "Неделя $day: Собрано продукции за день: $totalProducts\n";
}

echo "\n";

for ($i = 1; $i <= 5; $i++) {
    $chicken = new Chicken($i);
    $farm->addAnimal($chicken);
}

$cow = new Cow(11);
$farm->addAnimal($cow);

echo "После покупки:\n";
print_r($farm->getAnimalCount());

$totalProducts = $farm->getAllProducts();
echo "Общее количество продуктов: $totalProducts\n";

for ($day = 1; $day <= 7; $day++) {
    $totalProducts = $farm->getAllProducts();
    echo "Неделя $day: Собрано продукции за день: $totalProducts\n";
}
