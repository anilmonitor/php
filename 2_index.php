<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic 2</title>

    <style>
        .container {
            background-color: black;
            color: white;
        }

        h1 {
            background-color: red;
        }
    </style>
</head>

<body>


    <div class="container">
        <h1>This is basic 2</h1>
        <h2>list of data type in PHP </h2>
        <ul>
            <li>String </li>
            <li>Integer</li>
            <li>float</li>
            <li>boolean</li>
            <li>Array</li>
            <li>Object</li>
        </ul>

        <?php

        $var = 10;
        $var2 = 20;
        $str = "I am String dataType";
        $bool = true;
        $float = 23.54;


        echo "<br>";

        echo var_dump($str); //string
        echo "<br>";

        echo var_dump($var); //int 10
        echo "<br>";

        echo var_dump($bool); //boolean
        echo "<br>";


        echo var_dump($float); //float
        echo "<br>";



        // #1 Indexed Array 
        $array_fruit = array("apple", "banana", "cherry");
        echo var_dump($array_fruit[1]); //array - banana
        echo "<br>";


        // #2 Associative Array (key => value)
        $student = array(
            "name" => "Aman",
            "age" => 20,
            "branch" => "CSE"
        );

        echo var_dump($student["name"]);
        echo "<br>";


        ?>


    </div>

</body>

</html>