<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 6 Q3</title>
</head>
<body>
    <?php

        function calculateArea ($width1, $width2){
            $area = $width1 * $width2; 
            return $area;
        }
            $width1 = 4;
            $width2 = 2;

            $area = calculateArea($width1, $width2);

            echo "The area of rectangle with a width of $width1 and $width2 is $area " 
    ?>  

</body>
</html>