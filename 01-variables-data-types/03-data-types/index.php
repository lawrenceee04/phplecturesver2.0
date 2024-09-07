<?php

/*
  PHP DATA TYPES:

- String
- Integer
- Float
- Boolean
- Array
- Object
- NULL
- Resource
*/

// String
$name0 = 'John Doe';
$name1 = "Jane Doe";
var_dump($name0);
echo '<br>';
echo $name0, "<br>", $name1;
echo '<br>';

// Integer
$age = 45;
echo $age;
echo '<br>';
var_dump($age);
echo '<br>';
echo gettype($age);
echo '<br>';

// Float
$rating = 4.5;
var_dump($rating);
echo '<br>';

// Boolean
$is_loaded = true;
var_dump($is_loaded);
echo '<br>';

// Array
$programmingLanguages = ['PHP', 'JavaScript', 'Python'];
echo '<br>';
var_dump($programmingLanguages);
echo '<br>';
echo gettype($programmingLanguages);
echo '<br>';

// NULL
$car = NULL;
var_dump($car);

// Resource
$file = fopen('sample.txt', 'r');
echo gettype($file);
?>