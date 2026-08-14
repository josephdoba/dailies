<!-- Also, I just thought of this algorithm while at work... its probably not revolutionary, but im a bit chuft I thought of it without cracking open google

ArrayToSort = [4, 2, 7, 5, 3, 8, 9]

ArrayDivide= 2

Make arrays based on number of ArrayFraction, rounded up

Sort each sub array of each element from lowest to highest, by checking the current item to the next element. If that element is higher than the iterated element,  push to end, else push it back one

then amalgamate the correct order to a single array -->

<?php
    $array = [4, 2, 7, 5, 3, 8, 9];
    $arrayDivide = 2;

    foreach ($array as $i){
        if ($i % 2 == 0){
            echo "odd ";
        } else {
            echo "even ";
        }
    }


?>