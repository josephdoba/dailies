<!-- Also, I just thought of this algorithm while at work... its probably not revolutionary, but im a bit chuft I thought of it without cracking open google

ArrayToSort = [4, 2, 7, 5, 3, 8, 9]

ArrayDivide= 2

Make arrays based on number of ArrayFraction, rounded up

Sort each sub array of each element from lowest to highest, by checking the current item to the next element. If that element is higher than the iterated element,  push to end, else push it back one

then amalgamate the correct order to a single array -->

<?php

    $arrayToSort = [4, 2, 7, 5, 3, 8, 9, 11];

    echo $arraytoSort;
    function sorting($arraySort){
        
        foreach ($arraySort as $i){
            if ($i < 5){
                echo "{$i} is less than 5... skipping\n";
            } else {
                list($arraySort[$i+1], $$arraySort[$i]) = array($$arraySort[$i], $$arraySort[$i+1]);
            }
        }


    }

    
    sorting($arrayToSort)



?>