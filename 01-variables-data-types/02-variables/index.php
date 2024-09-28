<?php
/*
VARIABLE RULES:
- All variables are prefixed with a dollar sign ($).
- They must start with a letter or an underscore.
- They cannot start with a number.
- They can only contain letters, numbers, and underscores.
- They are case sensitive. So, `$name` and `$Name` are two different variables.
*/

/*
CONVENTIONS:
- Underscores: $server_name
- Camel Case: $serverName
- Pascal Case: $ServerName
- lowercase: $servername
*/

$title = 'Learn PHP From Scratch';
$heading = 'Variables';

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
        <?php
        // List of allowed variable names
        $first_name = 'John';
        $firstName = 'Jane';
        $FirstName = 'Doe';
        $firstname = 'Smith';

        echo $first_name . '<br>';
        echo $firstName . '<br>';
        echo $FirstName . '<br>';
        echo $firstname . '<br>';

        // List of unallowedd variable names
        // Try to uncomment the code below to see that it will throw an error
        // $1stName = 'John';
        // $@firstName = 'Jane';

        // echo $1stName . '<br>';
        // echo $@firstName . '<br>';
        ?>
    </div>

</body>

</html>