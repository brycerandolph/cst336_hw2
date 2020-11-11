<!DOCTYPE html>
<html lang="en">
     <head>
        <meta charset="utf-8">
         <title> Slot Machine </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">        
        <link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="js/app.js"></script>
     </head>
     
     <h1>Fruity Slot Machines</h1>
   <hr class= "hr1">
    <body>
     
      This is a highly unrealisic simulation in which you cannot lose money! 
      <br>It's great for people who want the rush of gambling without the crippling debt that usually follows.
      <hr class= "hr1">
      <h5> Your goal is to match three of any of the same fruits. Their values are listed below.</h5>
      <hr class= "hr1">
      <div class="rules">
            <li>Three Cherries - $10</li>
            <li>Three Oranges - $50</li>
            <li>Three Grapes - $100</li>
        </div>
       <div class = "machine">
        <img src = "img/img0.png" class= "imgManip" alt= "slot0" id = "slot0">
        <img src = "img/img0.png" class= "imgManip" alt= "slot1" id = "slot1">
        <img src = "img/img0.png" class= "imgManip" alt= "slot2" id = "slot2">
      </div> 
      <div>
    	 <button class="btn btn-outline-success" id=spinButton> Spin </button> <br>
    	</div>
    	<br>
    	<div id="roundWinnings"></div>  
        
     <div id="totalWinnings"></div> 
     
     <div id="totalPulls"></div>
     
     <div id="justWins"></div>   
	     <hr class= "hr1">
	     <footer>
         CST336: Internet Programming Homework 2. 2020&copy; Randolph <br>
         Images sourced from Pixabay.com
         <a href="https://pixabay.com/vectors/peach-mango-fruit-orange-food-37629/"> Orange</a>
         <a href="https://pixabay.com/illustrations/cherries-fruits-nature-icon-5689419/"> Cherry</a>
         <a href = "https://pixabay.com/illustrations/grapes-fruit-food-healthy-vitamins-5716132/"> Grapes </a>
      </footer>
     </body>
 </html>