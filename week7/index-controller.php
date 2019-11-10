<?php

require 'Person.php';

$person = new Person('Piper', 'Griffing', 4);

echo $person->firstName;
echo $person->lastName;
echo $person->getFullName();
echo $person->getClassification();
