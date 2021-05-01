<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-for_loop_patterns</title>
<?php
// Chess board style
echo<<<MARCAJ
  <style>
    table,th,td {
    border:1px solid black;
    }
    table {
    width:500px;
    height:500px;
    border-collapse:collapse;
    }   
    #infinity-column-container {
    position:absolute;
    left:750px;
    top:35px;    
        
    }
    #infinity_column {
     position:absolute;
     top:30px;
     left:950px;
    }


    </style>
MARCAJ;

?>

</head>



<body>
<?php

echo '<pre>';
// Chess board
echo '<p>This is a chess board pattern</p>';
echo '<table>';

for($i=0; $i<8; $i++){
  
     echo '<tr>';
   for($j=0; $j<8; $j++){
     
    if($i%2===0 && $j%2===0){
        echo '<td style="background-color:black;"></td>';
    }else if( $i%2!==0 && $j%2!==0  ){
        echo '<td style="background-color:black;"></td>';   
    }else{
        echo '<td style="background-color:white;"></td>';
    }
     
      

   }
     
   echo '</tr>';
}

echo  '</table>';

echo '<br><br>';

//Simple sum calculation

$total=0;

for( $i=0; $i < 30; $i++ ){
  
    $total+=$i+1;

}
echo '<p>This is a sum calculation pattern,calculating <span style="font-size:40px;">&Sigma;</span> <span style="position:relative; top:12px; left:-28px;"><sub>i=1</sub></span> <span style="position:relative; top:-25px; left:-55px;"><sup>i=30</sup></span> <span style="position:relative; left:-60px; font-size:16px;">i</span> </p>';
echo '<p>The sum of the first 30 positive integers is: </p>'.$total;

echo '<br><br>';
//Constantin Brancusi's infinity column
echo '<p style="position:absolute;top:-2px;left:620px">This is Constantin Brancusi\'s infinity column pattern</p>';
echo '<div id="infinity-column-container">';

for( $k=0; $k<3; $k++ ){

//Upper half segment of a portion
for( $i=6 ; $i > 0 ; $i-- ) {
   
    for( $j = 0 ; $j < $i ; $j++ ) {
         if( $i===5 && $j===0 ) {
             echo "  ";  
         }else if( $i===4 && $j===0 ) {
            echo "   ";
         }else if( $i===3 && $j===0 ) {
            echo "    ";
         }else if( $i===2 && $j===0 ) {
             echo "     ";
         }else if( $i===1 ) {
                  break;
         }
         else{
            echo '<span style="font-size: 28px;">@</span>';
         }
        

    }
     echo '<br>';

}

echo '     <span style="font-size: 32px;position:relative;top:-10px;">o</span><br>';
//Lower half segment of a portion
for( $i = 0; $i < 6 ; $i++ ) {
    
    for( $j = 0; $j< $i + 2 ; $j++  ) {
          
        if( $i===0 && $j===0  ) {
              echo '     '; 
           }else if( $i===1 && $j===0 ) {
              echo '    ';
          }else if( $i===2 && $j===0 ) {
            echo '   ';
          }else if( $i===3 && $j===0 ) {
            echo '  ';
          }else if( $i===4 && $j===0 ) {
            echo '';
          }else if( $i===4 && $j===1 ) {
           echo '<span style="font-size: 28px;">@@</span>';  
          }else if( $i===5 && $j===0 ) {
              break;
          }
          else {
            echo '<span style="font-size: 28px;">@</span>';
          }
         
    
    }  
    echo '<br>';
}





}
echo '</div>';

echo '<img id="infinity_column" src="infinity_column.jpg" width="30%" height="80%" alt="Infinity column photo">';


?>    

</body>
</html>