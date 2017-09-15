<?php

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
    echo "<img id='pics'src ='img/$symbol.jpg' alt='$symbol' title='" .ucfirst($symbol)."' width=35%/>";
    
    
}

function play()
        {
            for($i=1;$i<2;$i++)
            {
                ${"randomPic". $i } =rand(0,10);
                displayImage(${"randomPic" . $i}, $i );
            }
            
        }






?>