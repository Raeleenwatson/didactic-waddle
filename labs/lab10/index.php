
<!DOCTYPE html>
<html>
    <head>
        <link  href="css/styles.css" rel="stylesheet" type="text/css" />
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <title> Lab 10: Photo Gallery </title>
   
   
   <script>
    $(document).ready(function()
    {
        $("img").on("click", function()
        {
            if($("#focus").length != 0 ){
                
                $("#focus").attr('id', '');
            }   
            
            $(this).attr('id','focus');
        });
        
    });
    
</script>


<style>
    #focus {
        width: 400px;
        height: 400px;
    }
</style>

   
    </head>
    
    <body>
        <div id="other">
        <script> document.body.style.backgroundColor = "lightgray"; </script>
    
    <div style="background:transparent !important" class="jumbotron">
    
    <h2 style="font-size:2em; color:white; text-decoration: underline"> Photo Gallery </h2>
    <form method="POST" enctype="multipart/form-data"> 


        <input id="image-file" type="file" name="myFile" /> 
        
        <button type="submit" class="btn btn-info">Upload File!</button>

    </form>

</div>

    </body>
    
      <script>
      $('#image-file').on('change', function() {
       var size=(files[0].size/1024/1024) .toFixed(2);
       if(size<1)
       {
           alert("OKAY");
       }
       else
       {
           alert("NO");
       }
      });
    </script>
    </div>
    <div id="page">
    
</html>

<?php
   // echo "<div class='jumbotron'>";
  //print_r($_FILES);
  //echo "File size " . $_FILES['myFile']['size'];
  
if($_FILES['myFile']['size'] > 100000)
{
      echo " <br> <h2> Image Too Big. Must be smaller than 1 MB </h2>";
  // header('Location:index.php');
  
}
else 
    {
      move_uploaded_file($_FILES["myFile"]["tmp_name"], "gallery/" . $_FILES["myFile"]["name"] );
      
      $files = scandir("gallery/", 1);
     
      for ($i = 0; $i < count($files) -2; $i++)
        {
         echo "<img src='gallery/" .   $files[$i] . "' data-lightbox='image- . $i .' data-title='My caption' width='50' >";
        }
    }

  
  echo "</div>"
  

?>



