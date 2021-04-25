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

?>    

</body>
</html>