<?php

function displaySymbol($symbol)
{
    echo"<img src='../labs/lab2/img/$symbol.png' width='70' />";
    
    
}


$symbols=array("lemon","orange","cherry");
//print_r($symbols); //displays array contents
//echo $symbols[0]; //displays first element 
//displaySymbol($symbols[2]);

$symbols[]="grapes"; //adds element at end off array

//$symbols[2]="seven";//replacing value at that position

array_push($symbols,"seven"); //adds element at end of array
//displaySymbol($symbols[4]);

for($i=0;$i<count($symbols);$i++)
{
    displaySymbol($symbols[$i]);
}

sort($symbols); //orders elements in ascending order
print_r($symbols);

//shuffle($symbols); //shuffles elements in array
echo"<hr>";
print_r($symbols);
echo "<hr>";

$last_symbol=array_pop($symbols); //retrieves and REMOVES last element in array
displaySymbol($last_symbol);
echo"<hr>";
print_r($symbols);

foreach ($symbols as $s)
{
    displaySymbol($s);
    
}


unset($symbols[2]); //removes element at location
echo "<hr>";
print_r($symbols);
$symbols=array_values($symbols);
echo"<hr";
print_r($symbols);


//display random symbol 
displaySymbol($symbols[rand(0,count($symbols)-1)]);

//  displaySymbol($symbols[array_rand($symbols)]));
?>


<!DOCTYPE html>
<html>
    <head>
        <title>PHP Arrays</title>
        
        
        
    </head>
    <body>
        
        
    </body>
    
    
    
</html>







<?php

/*
$imgArray=array("50giftcard","100giftcard","blush","brushset","contourkit","eyeshadow","foundation","highlighter","lipgloss","makeupremover","nakedshadow");

$arrLength= count($imgArray);



for($i=0;$i<$arrLength;$i++)
{
   displayImage($imgArray[$i]);
}


function displayImage($imgArray)
{
    switch($imgArray)
    {
            case 0: $symbol= "50giftcard";
                break;
            case 1: $symbol= "100giftcard";
                break;
            case 2: $symbol= "blush";
               break;
            case 3: $symbol="brushset";
                break;
            case 4: $symbol= "contourkit";
                break;
            case 5: $symbol= "eyeshadow";
                break;
            case 6: $symbol= "foundation";
               break;
            case 7: $symbol="highlighter";
                break;
            case 8: $symbol= "lipgloss";
                break;
            case 9: $symbol= "makeupremover";
                break;
            case 10: $symbol= "nakedshadow";
               break;
    }
    
    
    
    
    echo "<img id='pics' class= 'pics' src ='img/$symbol.jpg' alt='$symbol' title='" .ucfirst($symbol)."' width=35% />";
    
    
}






sort($imgArray); //fct
print_r($imgArray[0]);

function play()
        {
            for($i=1;$i<2;$i++)
            {
                ${"randomPic". $i } =rand(0,10);
                displayImage($imgArray[$i]);
               
            }
            
        }

 
//displayImage($imgArray[rand(0,10)]);

/*

function play()
        {
            for($i=1;$i<2;$i++)
            {
                
                ${"randomPic". $i } =rand(0,10);
                displayImage(${"randomPic" . $i}, $i );
                
            }
            
        }




?>*/