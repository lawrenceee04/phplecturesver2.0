<?php
    echo 'Hello World <br>';
    echo 'Hello World';

    echo 'Line 1', '<br>', 'Line 2', 'Line 3';

    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?php echo 'Learn PHP From Scratch2' ?></title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold"><?= 'Learn PHP From Scratch3' ?></h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold mb-4"><?= 'Welcome To The Bootcamp FEATI OOP'?></h2>
            <p>In this bootcamp, you will learn the fundamentals of the PHP language</p>
        </div>
    </div>
</body>

</html>