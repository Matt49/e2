<?php
class Person
{
    #Properties
    public $firstName;
    public $lastName;
    public $age;

    #Method
    public function summary()
    {
        echo $this->firstName;
        echo $this->lastName;
        echo $this->age;
    }
}
