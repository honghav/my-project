<?php
   $shop = array(
    array(
        "name" => "Volvo",
        "Stock" => 22,
        "sold" => 18
    ),
    array(
        "name" => "BMW",
        "Stock" => 15,
        "sold" => 13
    ),
    array(
        "name" => "Saab",
        "Stock" => 5,
        "sold" => 2
    ),
    array(
        "name" => "Land Rover",
        "Stock" => 17,
        "sold" => 15
    )
    );
    ?>
   
    <table border="1">
        <tr>
            <td> Name</td>
            <td> Stock </td>
            <td> Sold </td>
        </tr>
        <?php
        foreach($shop as $s){
    ?>
        <tr>
            <td> <?php
            echo $s['name'];
            ?></td>
             <td> <?php
            echo $s['Stock'];
            ?></td>
             <td> <?php
            echo $s['sold'];
            ?></td>
            
        </tr>
        <?php         }?>
    </table>
  
  