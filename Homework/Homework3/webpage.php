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
            <input type="submit" id="submitButton" value="Click for prize!" ;" />
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
        
        <form id="informationBox">
        
            Name: <input type="name" id="fullName"size="25"height=40 />   <br />
            Gender: <input type="checkbox" id="guy"  name="gender" value="Gender">
            <label for="guy">Male</label>
             <input type="checkbox" id="girl" name="girlGender" value="Girl">
            <label for="girl">Female</label>
            <br/><br/>

            Address: <textarea id="address"cols="30" rows="2"></textarea> <br/>
            Choose State: <select id="state">
                <option value="AZ">Arizona</option>
                <option value="CA">California</option>
                <option value="NV">Nevada</option>
                <option value="OR">Oregon</option> 
                </select> <br/>
            Type of housing: <br/>
            <input type="radio"  id="item1"  name="houseOptions" value="House"> <label for="item1">House</label> <br><br>
          <input type="radio"  id="item2"  name="aptOption" value="Apartment"><label for="item2">Apartment</label> <br><br>
            <input type="infoButton" id="infoSubmit" value="Submit Information"/>

            
            
        </form>
        
        
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

