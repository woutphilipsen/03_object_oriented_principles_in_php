<?php

// abstract meaens you must always instanciate the subclass 
abstract class AchievementType
{
    // in laravel use helper function class_basename
    public function name()
    {
        $class = (new ReflectionClass($this))->getShortName();

        // FirstThousandPoints => First Thousand Points
        return trim(preg_replace('/[A-Z]/', ' $0', $class));
    }

    public function icon()
    {
        return strtolower(str_replace(' ', '-', $this->name())) . '.png';
    }

    // this is a method that you not can implement directly
    // it needs specifics from the subclass
    // nevertheless it's still a requirement
    abstract public function qualifier($user);
}

class FirstThousandPoints extends AchievementType
{
    // you need to declare this qualifier -> parent has this as an abstract public function
    // if you forget to implement this function PHP is gonna blow up
    public function qualifier($user)
    {

    }

}

class FirstBestAnswer extends AchievementType
{

    public function qualifier($user)
    {

    }

}

// you can grab the icon without instaciating it in this subclass
// it's inherited from the base class
class ReachTop50 extends AchievementType
{
    public function qualifier($user)
    {
        // here you would determ if the user qualifies
    }
}

$achievement = new FirstBestAnswer();
$achievement2 = new FirstThousandPoints();
$achievement3 = new ReachTop50();


// echo $achievement->name() . '  ' . $achievement->icon();
// echo $achievement2->name() . '  ' . $achievement2->icon();
echo $achievement3->name() . '  ' . $achievement3->icon();
// echo $achievement3->qualifier('user');