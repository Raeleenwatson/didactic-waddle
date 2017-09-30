<?php

function yearList($startyear,$endyear) {
    $zodiac = array("rat","ox","tiger","rabbit","dragon","snake","horse","goat","monkey","rooster","dog","pig");

    for ($i = $startyear; $i <= $endyear; $i++) {
        
         echo "<li> Year $i </li>";
         
         
        /* if($i==1776)
         {
         echo "Year $i USA INDEPENDENCE!";
         }
         if($i%100==0)
         {
         echo"Happy New Century";
         }
         $sum+=$i;
         */
         if(isset($_GET['keyword']))
         {
             echo"<img src='zodiac/".$zodiac[($endyear-$i)%12].".png' />"; 
             $counter++;
         }
         
    }
         
         return$sum;
    }
    


?>

<!DOCTYPE html>
<html>
    <head>
        <title> Practice: Chinese Zodiac Years</title>
    </head>
    <body>
        
        <h1>Chinese Zodiac List </h1>

        <ul>
            
            <?php
            yearList(1900,2000);
            ?>
            
        </ul>
        
        <?php
    
    echo"Year Sum: $sum";
        ?>
    </body>
</html>