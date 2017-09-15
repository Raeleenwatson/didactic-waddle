

<!DOCTYPE html>
<html>


<!-- This is the head -->
<!-- All styles and javascript go inside the head -->
    <head>
        <meta charset="utf-8" />
        <title> Girls Site </title>
        <style>
       @import url("css/styles.css");
       </style>
      <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    </head>
    
    
<!-- closing head -->

    <!-- This is the body -->
    <!-- This is where we place the content of our website -->
    <body>
     
        <header>
            <h1> Welcome to the Beauty Bar!</h1>
        </header>
    
        
        <div id="giveaway">
       <p>CONGRATS YOU WON A FREE GIVEAWAY</p>
        </div>
    
        <div class ="content">
            
        <figure id= "lipPic">
            <img src="lips2.png" alt="Picture of lips"/>
        </figure>
        
        <form>
            <input type=submit value="Click for prize!" />
        </form>
        
        </div>
        
        <?php
     
      include 'inc/functions.php';
      play();
      
      ?>
        
        <main>
            
        <!--
            <div class="cspicture">
            <figure id="pic"> 
                <img src="img/computerscience.jpg" alt="Picture of Code" width=450 height=250 />
            </figure>
            </div>
            
            <div class="content">
            <div id="info">
                <p>With technology advancing there are many different things to do with programming languages.</p>
                <p>Anyone with the knowledge of how to program can create almost anything they want. </p>
                <p>Programming isn't just used on personal computers to create programs. Programming can also be used to program robots, arduinos, create android apps, etc. </p>
                <p>Depending what someone is trying to accomplish, they would use whatever language fit the program best.</p>
                <p>For example, if someone wanted to create an android app they would use Java simply because it has a lot of framwork features. It's best to be familiar with multiple languages so that the project can be executed best. </p>
            
            </div>
            </div>
            
            
        -->
            
        </main>
        
        
        <!-- This is the footer -->
        <!-- The footer goes inside the body but not always -->
        
       
        <footer>
        
            <hr>
            
           
        </footer>
        <!-- closing footer -->
        
    </body>
    <!-- closing body -->

</html>

