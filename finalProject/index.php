<!DOCTYPE html>
<html>
    <head>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">    
     <style>
      #h{
        font-family: 'Dancing Script', cursive;
        font-size: 55px;
      }
    </style>
    
        <title>Raeleen's Boutique </title>
    
          
          <div id="header1">   
        <div class="jumbotron" style="color:#FF66B2;background-color=transparent; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
       
        <h1 id="h"><strong>Raeleen's Boutique</strong>  <img src="boutique.jpg" width=100 height=100></h1>
      
        <a class="btn btn-secondary btn-md" id="bt" href="adminFormLog.php">Admin Only</a>
        </div> 
        </div>
        <div id="page">
    </head>
    <body>
        
            <br>
            <strong style="font-family: 'Dancing Script', cursive;color:#FF66B2; font-size:3em;">Search for an item:</strong> <input type="text" id="searchId" name='searchId' > <br>
            <br>
            <form action="prices.php" >
           <input type="submit" class="btn btn-secondary btn-md" name="priceSorter" value="Search items by Price!"><br><br>
            </form>
            
            <button type="submit" class="btn btn-secondary btn-lg"  name="subBtn" id="subId"> Search!</button>
            <br>
           
    <br>
        <div id="info2"></div>
        <div id="info" style="text-align:center;"></div>
        <br>
        <br>
        <br>
    <script>
        function getAllProducts()
          {
              //var name= "<?php echo $tempName ?>";
              //alert("HI");
              $.ajax({
                type: "GET",
                url: "getProducts.php",
                //dataType: "json",
                data: { "searchId": $("#searchId").val()}, //what program is expecting would be search id
                success: function(data) {
               // alert("HI");
                //alert(data);
                if(data)
                    {  
                      //alert("BETTER");
                     $("#info").html(data);
                    }
                else
                    {
                         //alert("FAILED");
                    }
                
                },
                complete: function(data,status) { //optional, used for debugging purposes
               //alert(status);
                }
                
                });//ajax
              
         }
         
         function getImages()
         {
             //alert('HI');
              $.ajax({
                type: "GET",
                url: "getImages.php",
                dataType: "json",
                data: { "searchId": $("#searchId").val()},
                success: function(data,status) {
                //alert(data);
                if(data)
                {
                   $("#info2").html(data);
                
                }
                else
                {
                    //alert("FAIL");
                }
                },
                complete: function(data,status) { //optional, used for debugging purposes
                //alert(status);
                }
                
            });//ajax
            
         }
      
        $(document).ready( function(){
          
         $("#subId").click( function(){ getAllProducts(); } );
         $("#subId").click(function() { getImages(); })
         });//docReady
            
            
     </script>

    </body>
    
    
</html>



<?php

if(isset($_GET['priceSorter']))
{
    echo "HI";
}

/*
function getProducts()
{
    global $goodName;
    $imgName=$_GET['searchId'];
    $imgArr=array('Eyebrowmakeup' =>array($img=>"<img src ='img/eyebrowMakeup.jpg' />"),
                'Hairproduct' => array($img=>"<img src ='img/hairProduct.jpg' />"),
                'Hudapallete' =>array($img=>"<img src ='img/hudaPallete.jpg' />"),
                'Kyliemakeup' =>array($img=>"<img src ='img/kylieMakeup.jpg' />"),
                'Lipglosses' =>array($img=>"<img src ='img/lipGlosses.jpg' />"),
                'Macbrushes' =>array($img=>"<img src ='img/macBrushes.jpg' />"),
                'Planner' =>array($img=>"<img src ='img/planner.jpg' />"),
                'Womensbedding' =>array($img=>"<img src ='img/womensBedding.jpg' />"),
                'Womensblouse' =>array($img=>"<img src ='img/womensBlouse.jpg' />"),
                'Womensdress' =>array($img=>"<img src ='img/womensDress.jpg' />"),
                'Womensearrings' =>array($img=>"<img src ='img/womensEarrings.jpg' />"),
                'Womensheels' =>array($img=>"<img src ='img/womensHeels.jpg' />"),
                'Womensjeans' =>array($img=>"<img src ='img/womensJeans.jpg' />"),
                'Womensnecklace' =>array($img=>"<img src ='img/womensNecklace.jpg' />"),
                'Womensnike' =>array($img=>"<img src ='img/womensNike.jpg' />"),
                'Womensshoes' =>array($img=>"<img src ='img/womensShoes.jpg />"),
                'Womenssweater' =>array($img=>"<img src ='img/womensSweater.jpg' />"),
                'Womenssweats' =>array($img=>"<img src ='img/womensSweats.jpg' />"),
                'Womenssweatshirt' =>array($img=>"<img src ='img/womensSweatshirt.jpg' />"),
                'Makeupbag' =>array($img=>"<img src ='img/makeupBag.jpg' />")
                );
            
        if(isset($_GET['subBtn']))
        {
            echo "HI";
            if($imgName == trim($imgName) && strpos($imgName, ' ') !== false)
                {
                    $t2=strtolower($imgName);
                    $goodName=str_replace(' ', '', $t2);
                    $tempName=ucfirst($goodName);
                    echo $imgArr[$tempName][$img];
                    
                }
                else{
                    
                    $t2=strtolower($imgName);
                    $tempName=ucfirst($t2);
                    echo $imgArr[$tempName][$img];
                    }
                 
        }
        
        
        
    echo "</div>";    
    return $tempName;
}    
    */

?>