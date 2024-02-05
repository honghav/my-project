<?php
    $student = array(
        //1-4
        array(
            'id' => 'IDTB090029',
            'fname' => 'CHIM ',
            'lname' => 'VINE ',
            'gender' => 'Male',
           
        ),
        array(
            'id' => 'DTB090046',
            'fname' => 'EM',
            'lname' => 'SEREYVATHNA',
            'gender' => 'Male',
           
        ),
        array(
            'id' => 'IDTB090052',
            'fname' => 'HENG',
            'lname' => 'PANHARANITH ',
            'gender' => 'Male',
           
        ), array(
            'id' => 'IDTB090064',
            'fname' => 'HOUR ',
            'lname' => 'LIVHOUNG',
            'gender' => 'Female',
           
        ),

        //5-8
        array(
            'id' => 'IDTB090072',
            'fname' => 'KAO ',
            'lname' => 'VICHET',
            'gender' => 'Male',
           
        ),
        array(
            'id' => 'DTB090098',
            'fname' => 'KONG ',
            'lname' => 'TIVOEN',
            'gender' => 'Male',
           
        ),
        array(
            'id' => 'DTB090099',
            'fname' => 'KORN ',
            'lname' => 'CHHIMHENG',
            'gender' => 'Female',
           
        ), array(
            'id' => 'IDTB090103',
            'fname' => 'LAY ',
            'lname' => 'SATYA',
            'gender' => 'Female',
           
        ),

        //9-12
        array(
            'id' => 'IDTB090104',
            'fname' => 'LAY ',
            'lname' => 'SOPANHA',
            'gender' => 'Male',
           
        ),
        array(
            'id' => 'IDTB090105',
            'fname' => 'LEANG ',
            'lname' => 'HONGHAV',
            'gender' => 'Male',
           
        ),
        array(
            'id' => 'IDTB090106',
            'fname' => 'LEAP ',
            'lname' => 'PUNLEU',
            'gender' => 'Female',
           
        ), array(
            'id' => 'IDTB090108',
            'fname' => 'LIM ',
            'lname' => 'HUOT',
            'gender' => 'Female',
           
        ),

        //13-16
         array(
            'id' => 'IDTB090111',
            'fname' => 'LONG ',
            'lname' => 'CHANPANHAVATH',
            'gender' => 'Male',
           
        ),
        array(
            'id' => 'IDTB090116',
            'fname' => 'LY ',
            'lname' => 'MENGTHONG',
            'gender' => 'Male',
           
        ),
        array(
            'id' => 'IDTB090123',
            'fname' => 'MOEUN ',
            'lname' => 'VITOUKHEMRINDH',
            'gender' => 'Female',
           
        ), array(
            'id' => 'IDTB090124',
            'fname' => 'MOM ',
            'lname' => 'MONYCHOT',
            'gender' => 'Female',
           
        ),
        //17-20
        array(
            'id' => 'IDTB090130',
            'fname' => 'NARIN  ',
            'lname' => 'PICH',
            'gender' => 'Male',
           
        ),
        array(
            'id' => 'IDTB090141',
            'fname' => 'ORNCHANN  ',
            'lname' => 'LYHOV ',
            'gender' => 'Male',
           
        ),
        array(
            'id' => 'IDTB090142',
            'fname' => 'ORT  ',
            'lname' => 'CHHEAVMENG',
            'gender' => 'Female',
           
        ), array(
            'id' => 'IDTB090145',
            'fname' => 'OUK  ',
            'lname' => 'SREYSOR',
            'gender' => 'Female',
           
        ),
        //21-24
        array(
            'id' => 'IDTB090147',
            'fname' => 'PA  ',
            'lname' => 'KOTTHRAYOTHE',
            'gender' => 'Male',
           
        ),
        array(
            'id' => 'IDTB090254',
            'fname' => 'POV  ',
            'lname' => 'RATHNA',
            'gender' => 'Male',
           
        ),
        array(
            'id' => 'IDTB090183',
            'fname' => 'SANG  ',
            'lname' => 'HAKSOU',
            'gender' => 'Female',
           
        ), array(
            'id' => 'IDTB090185',
            'fname' => 'SAPHORN  ',
            'lname' => 'THIDA',
            'gender' => 'Female',
           
        ),
        //25-28
        array(
            'id' => 'IDTB090197',
            'fname' => 'SINARA  ',
            'lname' => 'SETH',
            'gender' => 'Male',
           
        ),
        array(
            'id' => 'IDTB090213',
            'fname' => 'SOVAN  ',
            'lname' => 'CHANDARA',
            'gender' => 'Male',
           
        ),
        array(
            'id' => 'IDTB090216',
            'fname' => 'SRUN  ',
            'lname' => 'SRORN',
            'gender' => 'Female',
           
        ), array(
            'id' => 'IDTB090056',
            'fname' => 'HENG  ',
            'lname' => 'VISAL',
            'gender' => 'Female',
           
        ),
        //29-32
        array(
            'id' => 'IDTB090218',
            'fname' => 'SUNG   ',
            'lname' => 'KIMTEANG',
            'gender' => 'Female',
           
        )

    )
    
   
?>
<style>
    table{
        width:50%;
        margin:auto;
        padding: auto;
    }
</style>
 <table border="1">
        <tr>
            <td> ID</td>
            <td> First Name </td>
            <td> Last Name </td>
            <td> Gender</td>
          
        </tr>
        <?php
        foreach($student as $s){
    ?>
        <tr>
            <td> <?php
            echo $s['id'];
            ?></td>
             <td> <?php
            echo $s['fname'];
            ?></td>
             <td> <?php
            echo $s['lname'];
            ?></td>
             <td> <?php
            echo $s['gender'];
            ?></td>
            
            
            
        </tr>
        <?php         }?>
    </table>
  
  