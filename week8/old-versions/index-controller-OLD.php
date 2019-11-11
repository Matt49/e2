<?php

require 'Number.php';
require 'EvenNumber.php';
require 'Debug.php';


$example1 = new Number('21');
var_dump($example1->isValid());

$example2 = new EvenNumber('21');
var_dump($example2->isValid());

Debug::dump(['a', 'b', ['x', 'y', 'z']]);
