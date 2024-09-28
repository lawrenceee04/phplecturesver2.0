<?php
$lesson = 'PHP Tags, Printing, and Comments';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?= 'Learn PHP From Scratch' ?></title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold"><?= 'Learn PHP From Scratch' ?></h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold"><?= $lesson ?></h2>
        </div>
    </div>

    <div class=" container mx-auto bg-white rounded-md shadow-md p-5 m-4">

        <?php
        echo '1st Line, ';
        echo 'Supposed to be 2nd Line (but it is not). <br>';

        // echo in php will never print a new line
        // therefore it is important to add <br> at the end of the echo statement to create a new line
        echo '2nd Line <br>';
        echo '3rd Line <br>';

        // echo can also be used to print html tags
        // as you can see here the p tag is printed using echo and it is rendered as a paragraph
        echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, ipsam!</p>';

        echo '<i>Heading 2</i> <br>';
        echo '<strong>Heading 1</strong> <br>';
        ?>

    </div>

</body>

</html>