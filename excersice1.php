<?php
    $fruit = ['orange' ,'banana', 'dragon fruit', 'apple' , 'longan'];
    echo" <p>The second element of the index arrey is: $fruit[1]</P> ";
    echo" Display all data in this array using loop foreach with unordered list html tag:";
    foreach($fruit as $data){
        echo"
        <ul>
        <li> $data</li>
        </ul>
        ";
    }
    echo"Display all data in this array using loop for";
    for($i=0 ; $i<count($fruit) ; $i++){
        echo" $i $fruit[$i] <br>";
    }
    array_push($fruit, 'grape'); 
    array_pop($fruit);
   echo" Display all data in this array using loop foreach";
    foreach($fruit as $data){
        echo"
        <ul>
        <li> $data</li>
        </ul>
        ";
    }
   
?>
