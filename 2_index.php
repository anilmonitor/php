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


        //if else
        
        $Age = 1;
        if ($Age >= 18) {
            echo "Can vote";
        } else if ($Age == 1) {

            echo "You are minner";
        } else {

            echo "Can't Vote";
        }

        echo "<br>";
        //Array in php
        $students = array("Anil", "Rahul", "Manish", "Manjeet");
        echo $students[0];

        echo "<br>";


        // loop in PHP 
// There are 4 loop 
// i. for loop 
// ii. while loop 
// iii. do while loop
// iv. foreach loop 
        

        // 1.) for loop
        for ($i = 1; $i <= 5; $i++) {
            echo $i;
            echo "<br>";

        }
        ;


        echo "while loop";
        echo "<br>";
        // 2.) while loop 
        $i = 1;
        while ($i < 5) {
            echo $i;
            echo "<br>";
            $i++;
        }

        // 3.) do while loop 
        echo "do while loop";
        echo "<br>";
        $i = 1;
        do {
            echo $i;
            echo " ";
            echo "Hello guyss";
            echo "<br>";
            $i++;
        } while ($i <= 5);

        // 4.) foreach loop --> This loop is best for looping array
        $collegeStudent = $students = ["Aman", "Rohit", "Anil", "Neha"];

        foreach ($collegeStudent as $student) {
            echo "<br>";
            echo $student;

        }


        ?>
    </div>

</body>

</html>