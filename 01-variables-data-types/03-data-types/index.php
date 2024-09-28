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
$title = 'Learn PHP From Scratch';
$heading = 'Data Types';
$name0 = 'John Doe';
$name1 = "Jane Doe";

// Integer
$age = 45;

// Float
$rating = 4.5;

// Boolean
$is_loaded = true;

// Array
$programmingLanguages = ['PHP', 'JavaScript', 'Python'];

// NULL
$car = NULL;

// Resource
// $file = fopen('sample.txt', 'r');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title><?= $title ?></title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold"><?= $title ?></h1>
    </div>
  </header>
  <div class="container mx-auto p-4 m-4">
    <div class="bg-white rounded-lg shadow-md p-6">
      <h2 class="text-2xl font-semibold"><?= $heading ?></h2>
    </div>
  </div>

  <div class="container mx-auto bg-white rounded-md shadow-md p-5 m-4">
    <h3 class="text-xl font-semibold">String</h3>
    <p><?= $name0 ?></p>
    <p><?= $name1 ?></p>

    <h3 class="text-xl font-semibold">Integer</h3>
    <p><?= $age ?></p>

    <h3 class="text-xl font-semibold">Float</h3>
    <p><?= $rating ?></p>

    <h3 class="text-xl font-semibold">Boolean</h3>
    <p><?= $is_loaded ?></p>

    <h3 class="text-xl font-semibold">Array</h3>

    <ol style="list-style-type: upper-alpha" class="px-5">
      <?php
      foreach ($programmingLanguages as $language) {
        echo "<li>$language</li>";
      }
      ?>
    </ol>

    <h3 class=" text-xl font-semibold">NULL</h3>
    <p><?= $car ?></p>

    <h3 class="text-xl font-semibold">Resource</h3>
    <p>
      <?php
      // echo $file;
      ?>
    </p>
  </div>
</body>

</html>