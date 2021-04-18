<?php


// Tabla de sah

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
// Tabla de sah

echo "<table>";

for($i=0; $i<8; $i++){
  
     echo "<tr>";
   for($j=0; $j<8; $j++){
     
    if($i%2===0 && $j%2===0){
        echo "<td style=\"background-color:black;\"></td>";
    }else if( $i%2!==0 && $j%2!==0  ){
        echo "<td style=\"background-color:black;\"></td>";   
    }else{
        echo "<td style=\"background-color:white;\"></td>";
    }
     
      

   }
     
   echo "</tr>";
}

echo "</table>";



















?>