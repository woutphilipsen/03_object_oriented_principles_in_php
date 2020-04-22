<?php

class AchievementType
{

    public function name()
    {
        return 'Welcome Bonus!';
    }
    
    public function difficulty()
    {
        return 'intermediate';
    }

    public function icon()
    {

    }

}

class FirstThousandPoints extends AchievementType
{

    public function qualifier($user)
    {

    }

    // overwrite the name function of the parent class
    public function name()
    {
        return 'Welcome Aboard!';
    }

}

