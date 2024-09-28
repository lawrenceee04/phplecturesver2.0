<?php
$title = 'Learn PHP from Scratch';
$heading = 'Strings and Concatenation';

$first_name = 'Maria';
$last_name = 'Clara';
$full_name = $first_name . ' ' . $last_name;
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
    <h3 class="text-xl font-semibold">First Name</h3>
    <p><?= $first_name ?></p>
    <h3 class="text-xl font-semibold">Last Name</h3>
    <p><?= $last_name ?></p>
    <h3 class="text-xl font-semibold">Full Name</h3>
    <p><?= $full_name ?></p>
  </div>
</body>

</html>