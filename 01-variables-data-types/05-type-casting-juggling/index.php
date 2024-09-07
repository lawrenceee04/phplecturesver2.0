<?php

    $number1 = 5;
    $number2 = 10;
    $number3 =  '20';
    $fruit = "apple";
    $bool1 = true;
    $bool2 = false;

    $result = $number3 + $number3;
    var_dump($result);

    echo '<br>';

    $result = $number1 . $number2;
    var_dump($result);

    echo '<br>';

    $result = $number1 . $number3;
    var_dump($result);

    echo '<br>';

    // $result = $fruit + $number1; // error
    $result = $fruit . $number1;
    var_dump($result);

    echo '<br>';
?>