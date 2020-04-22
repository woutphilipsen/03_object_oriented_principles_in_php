<?php

class CoffeeMaker
{
    public function brew()
    {
        var_dump('Brewing the coffee..');
    }
    
}

// "is a"
class SpecialtyCoffeeMaker extends CoffeeMaker
{
    public function brewLatte()
    {
        var_dump('Brewing a Latte..');
    }
}

(new CoffeeMaker())->brew();
(new SpecialtyCoffeeMaker())->brew();
(new SpecialtyCoffeeMaker())->brewLatte();