<?php
    $myObject = array(
        "fruit" => "apple",
        "meat" => "chicken",
        "vegetable" => "brocolli",
        "carbs" => "rice"
    );

   //var_dump($myObject)  Ahh so this just, prints whichever var you assign into the console. Neat!
    var_dump($myObject);
    var_dump($myObject["fruit"]); // also very interesting you can only have one var dump.. perhaps its returning it? 
    var_dump($myObject["meat"]); // hm, but then this statement isn't throwing an error... Ah! user error. classic rookie mistake not closing statements. 
?>