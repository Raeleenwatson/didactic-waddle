<!DOCTYPE html>
<html>


<!-- This is the head -->
<!-- All styles and javascript go inside the head -->
    <head>
        <div id="wholepage">
        <meta charset="utf-8" />
        <title> Girls Site </title>
        <style>
       @import url("css/styles.css");
      </style>
      <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
      
  <?php
  
  
   include 'inc/functions.php';
   ?>
    
    </head>
    
    
<!-- closing head -->

    <!-- This is the body -->
    <!-- This is where we place the content of our website -->
    <body background="glitter.jpg">
    <div id="mainpage">
    <div id="wholepage">
     
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
            <input type="submit" value="Click for prize!" ;" />
        </form>
        
        
        
        </div>
        
        <div id="text">
        <?php
            showText();
        ?>
        </div>
        
        
        
        
      
      
        <?php
    
     
       play();
      
      
      ?>
        
        <main>
            
        <div id="infoText">
            <p>Thank you for being a loyal member! We are giving you a free makeup goodie along with the random prize! </p>
            <p>We hope you enjoy your gifts. Everyone from Beauty Bar appreciates your commitment to our company!</p>
        </div>
            
        </main>
        
        
        <!-- This is the footer -->
        <!-- The footer goes inside the body but not always -->
        
       <footer>
        
        <div id="endInfo">
            <hr>
            
            
             CST 336. 2017&copy; Watson <br />
            <strong>Disclaimer:</strong> The information in this webpage is fictitous. <br />
            It is used for academic purposes only.
           </div>
        </footer>
        
    </div>
        <!-- closing footer -->
        
    </body>
    <!-- closing body -->
</div>
</html>

