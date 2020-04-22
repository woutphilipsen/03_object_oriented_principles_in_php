<!-- run 'php objects.php' in terminal to run file -->
<?php

class Team
{
    protected $name;

    protected $members = [];

    public function __construct($name, $members = [])
    {
        $this->name = $name;
        $this->members = $members;
    } 
    
    // static method you can access from anywhere in the system
    // create a new instance of this class
    public static function start(...$params)
    {
        // 3 dots allows you to accept a variable amont of arguments
        return new static(...$params); 
    } 
    
    public function name()
    {
        return $this->name;
    } 
    
    public function members()
    {
        return $this->members; 
    } 
    
    public function add($name)
    {
        $this->members[] = $name;
    } 
    
    public function cancel()
    {

    } 
    
    public function manager()
    {

    } 
}

class Member
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function lastViewed()
    {
        //
    }    
}

$acme = Team::start('Acme', [
    new Member('Peter Selie'),
    new Member('Deborah Leemans'),
]);

$molSport = new Team('Mol Sport', [
    new Member('Dries Sannen'),
    new Member('Stef Melis'),
]);

// $acme->add('Klaas Vaak');
// $acme->add('Peter Selie');
// $acme->add('Deborah Leemans');
// var_dump($acme->name());

var_dump($acme->members());
var_dump($molSport);