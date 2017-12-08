<?php
    global $goodName;
    $imgName=$_GET['searchId'];
    //echo $imgName;
    
   
                    
    $imgArr=array('Eyebrowmakeup' =>array($img=>"<img src ='img/eyebrowMakeup.jpg' align='middle'width=400 height=450/>"),
                'Hairproduct' => array($img=>"<img src ='img/hairProduct.jpg' width=400 height=450/>"),
                'Hudapallete' =>array($img=>"<img src ='img/hudaPallete.jpg' width=400 height=450 />"),
                'Kyliemakeup' =>array($img=>"<img src ='img/kylieMakeup.jpg' width=400 height=450 />"),
                'Lipglosses' =>array($img=>"<img src ='img/lipGlosses.jpg' width=600 height=450/>"),
                'Macbrushes' =>array($img=>"<img src ='img/macBrushes.jpg' width=400 height=450 />"),
                'Planner' =>array($img=>"<img src ='img/planner.jpg' width=650 height=450/>"),
                'Womensbedding' =>array($img=>"<img src ='img/womensBedding.jpg' width=600 height=450/>"),
                'Womensblouse' =>array($img=>"<img src ='img/womensBlouse.jpg' width=400 height=600/>"),
                'Womensdress' =>array($img=>"<img src ='img/womensDress.jpg' width=400 height=450/>"),
                'Womensearrings' =>array($img=>"<img src ='img/womensEarrings.jpg' width=400 height=450 />"),
                'Womensheels' =>array($img=>"<img src ='img/womensHeels.jpg' width=400 height=450/>"),
                'Womensjeans' =>array($img=>"<img src ='img/womensJeans.jpg' width=400 height=550/>"),
                'Womensnecklace' =>array($img=>"<img src ='img/womensNecklace.jpg' width=400 height=450/>"),
                'Womensnike' =>array($img=>"<img src ='img/womensNike.jpg' width=450 height=450/>"),
                'Womensshoes' =>array($img=>"<img src ='img/womensShoes.jpg' width=500 height=450/>"),
                'Womenssweater' =>array($img=>"<img src ='img/womensSweater.jpg' width=450 height=450/>"),
                'Womenssweats' =>array($img=>"<img src ='img/womensSweats.jpg' width=400 height=450/>"),
                'Womenssweatshirt' =>array($img=>"<img src ='img/womensSweatshirt.jpg' width=400 height=450/>"),
                'Makeupbag' =>array($img=>"<img src ='img/makeupBag.jpg' width=400 height=450/>")
                );
   if($imgName == trim($imgName) && strpos($imgName, ' ') !== false)
        {
            $t2=strtolower($imgName);
            $goodName=str_replace(' ', '', $t2);
            $tempName=ucfirst($goodName);
            //echo $tempName;
            echo json_encode($imgArr[$tempName][$img]);
            
        }
        else{
            
            $t2=strtolower($imgName);
            $tempName=ucfirst($t2);
            //echo $tempName;
           echo json_encode($imgArr[$tempName][$img]);
            }   
?>