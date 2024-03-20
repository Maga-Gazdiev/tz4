<?php

require_once 'Abstract/Animal.php';

class Cow extends Animal
{
    public function produce()
    {
        return rand(8, 12);
    }
}
