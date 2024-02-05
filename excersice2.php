<?php
    $randomnumber= [];
    for($n = 0; $n<50; $n++){
        $randomnumber[] = rand(1,100);
    }
    echo" Display all numbers in this array to the web page using p tag. All data should be displayed
    separated by comma (do not enter):<br>";
    for($r = 0 ; $r <count($randomnumber); $r++){
        echo" $randomnumber[$r] ,";

    } echo"<br>";
    echo'Display all data separated by comma:<br>';
    sort($randomnumber);
    for($s=0 ; $s< count($randomnumber); $s++){
        echo" $randomnumber[$s] ,";
    }
    echo"<br>";
    echo'Display all data separated by comma:<br>';
    array_push($randomnumber,2024);
    sort($randomnumber);
    for($p=0 ; $p< count($randomnumber); $p++){
        echo" $randomnumber[$p] ,";
    }
?>