<?php

$message="";

$imgArray=array("50giftcard","100giftcard","blush","brushset","contourkit","eyeshadow","foundation","highlighter","lipgloss","makeupremover","nakedshadow");


$arrLength= count($imgArray);



sort($imgArray); //fct
shuffle($imgArray);
array_rand($imgArray);


function displayImage($randomPic)
{
    switch($randomPic)
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
    $message=$symbol;
    
    echo "<img id='pics' src ='img/$symbol.jpg' alt='$symbol' title='" .ucfirst($symbol)."' width=35% />";
    
    echo "<img src ='img/$symbol.jpg'  />";
}
function showText()
{
    for($i=0;$i<11;$i++)
    {
        if($message==$imgArray[$i])
        {
            echo "BEST GIFT!!";
            break;
        }
    }
}


function play()
        {
            for($i=1;$i<2;$i++)
            {
               
               $randomPic=rand(0,10);
                displayImage($randomPic);
            }
           
            
        }


/*

function play()
        {
            for($i=1;$i<2;$i++)
            {
                
                ${"randomPic". $i } =rand(0,10);
                displayImage(${"randomPic" . $i});
                
            }
            
        }
*/




?>