﻿
<?php
error_reporting(0);
include('donor_home_process.php');

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>FOOD DIVERT</title>

    <!-- Bootstrap -->
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
        <link rel="icon" href="css/images-1/favicon.ico"/>
        <title>FOOD DIVERT</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"  type="text/css">
        
      <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,700" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <link rel="stylesheet" href="donor_home.css">
  </head>
  s
    <style>
    img.avatar {
    width: 20%;
    border-radius: 20%;
}


    body {
    background-color: #000034;
}

    button {
    background-color: white;
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 20%;
    border-radius: 15px;
  
}

button:hover {
    opacity: 0.8;
}

h3{
  color: white;
}

input{
  width: 18%;
  border-radius: 15px;
  height: 40px;
}
    
    
  </style>
  
  <body>
   
        
       
     <!--  <div class="navbar navbar-default navbar-fixed-top navbar-inverse" >
          
          <div class="container">
              
              <div class="navbar-header">
              
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#btn1">
                    
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
          <span class="icon-bar"></span>
                  
                </button>
                
                <a href="#" class="navbar-brand pull-left"><!--<img src="Untitled.png" width="50px" height="50px"><img src="css/images-1/mod.png" width="90px" height="90px"></a>
                
              </div>
              <div class="collpase navbar-collapse" id="btn1">
              
                <ul class="nav navbar-nav">
                  
                     
                     <li class="">
             <a href="main.htm" ><b>Home</b></a>
                    
                    </li>
                  
                  
                        
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Institute</b><b class="caret"></b></a>
                    
                    <ul class="dropdown-menu">
                    
                      
                       <li><a href="">The Society</a></li>
                       <li><a href="">Collage Emblem & Anthem</a></li>
                       <li><a href="">Message</a></li>
                       <li><a href="">Academic Consultant</a></li>
                       <li><a href="">NewsLetter</a></li>
                       <li><a href="">Prohibition and prevention of ragging</a></li>
                       <li><a href="">Achievement</a></li>
                       <li><a href="">Sister Institution</a></li>
                       <li><a href="">Fee Proposal</a></li>
                        
                    </ul>
                    </li>
                    
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Campus</b><b class="caret"></b></a>
                    
                    <ul class="dropdown-menu">
                    
                       
                       <li><a href="campus-building.html">Building</a></li>
                       
                       <li><a href="computer_center.html">Computer Center</a></li>
                       <li><a href="Councelling_Cell.html">Counselling Cell</a></li>
                       <li><a href="Assembly_Hall.html">Assembly Hall</a></li>
                      <!-- <li><a href="">Canteen</a></li>
                       <li><a href="">Gymkhaqna</a></li>
                        
                    </ul>
                    </li>
                   
                   
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Student Info</b><b class="caret"></b></a>
                    
                    <ul class="dropdown-menu">
                    
                       
                       <li><a href="">Dean Student Affairs</a></li>
                       <li><a href="">Code of Conduct</a></li>
                       <li><a href="">Student Council</a></li>
                       <li><a href="">Academic Result</a></li>
                       <li><a href="">Academic examination</a></li>
                       <li><a href="">Activities</a></li>
                        
                    </ul>
                    </li>
                    
                    
                     <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Administration</b><b class="caret"></b></a>
                    
                    <ul class="dropdown-menu">
                    
                      
                       <li><a href="">Committees</a></li>
                       <li><a href="">Administrative Staf</a></li>
                       <li><a href="">Staff Service Rules</a></li>
                       <li><a href="">Code of ethics for staff</a></li>
                       <li><a href="">New Staff Induction Manual</a></li>
                       <li><a href="">Staff working committees</a></li>
                        
                    </ul>
                    </li>
                    
                   
                   
                   <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Departments</b><b class="caret"></b></a>
                    
                    </li>
                    
                    
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Events</b><b class="caret"></b></a>
                    
                        <ul class="dropdown-menu">
                    
                      
                       <li><a href="main-4.htm">Prayas2017</a></li>
                       <li><a href="http://sfitengg.org/technotron/technotron.html">Technotron</a></li>
                       <li><a href="http://irisfest.com/">IRIS 2017</a></li>
                      
                       <li><a href="cscita.htm">CSCITA</a></li>
                          
                    </ul>
                    
                    
          </li>
                   
                    
                    
                    
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Parents Corner</b><b class="caret"></b></a>
                    
          </li>
                    
                  
                   
                  
                </ul>
                
                <!--<form class="navbar-form navbar-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                                    <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                    </div>
                            </div>
                 </form>
                
                
                
              </div>
            
          </div>
        
       </div>  -->
       
       
       
               
       
       <div class="navbar navbar-default navbar-fixed-top navbar-inverse" >
          
          <div class="container">
              
              <div class="navbar-header">
              
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#btn1">
                    
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
          <span class="icon-bar"></span>
                  
                </button>
                
                <a href="../main.htm" class="navbar-brand pull-left"><!--<img src="Untitled.png" width="50px" height="50px">--><img src="../css/images/Untitled5" width="100px" height="115px" style="background-position: center"></a>
                
              </div>
              <div class="collpase navbar-collapse" id="btn1">
              
                <ul class="nav navbar-nav">
                  
                     
                     <li class="">
             <a href="../main.htm" ><b>HOME</b></a>
                    
                    </li>
                  
                  
                        
                    <li class="dropdown">
                    <a href="../main.htm"><b>DONORS</b><b></b></a>
                    
                   <!-- <ul class="dropdown-menu">
                    
                      
                       <li><a href="">The Society</a></li>
                       <li><a href="">Collage Emblem & Anthem</a></li>
                       <li><a href="">Message</a></li>
                       <li><a href="">Academic Consultant</a></li>
                       <li><a href="">NewsLetter</a></li>
                       <li><a href="">Prohibition and prevention of ragging</a></li>
                       <li><a href="">Achievement</a></li>
                       <li><a href="">Sister Institution</a></li>
                       <li><a href="">Fee Proposal</a></li>
                        
                    </ul>-->
                    </li>
                    
                    <li class="dropdown">
                    <a href="../Receiver.htm"><b>RECEIVERS</b><b></b></a>
                    
                   <!-- <ul class="dropdown-menu">
                    
                       
                       <li><a href="campus-building.html">Building</a></li>
                       
                       <li><a href="computer_center.html">Computer Center</a></li>
                       <li><a href="Councelling_Cell.html">Counselling Cell</a></li>
                       <li><a href="Assembly_Hall.html">Assembly Hall</a></li>
                      <!-- <li><a href="">Canteen</a></li>
                       <li><a href="">Gymkhaqna</a></li>
                        
                    </ul>-->
                    </li>
                   
                   
                    <li class="dropdown">
                    <a href="../donation_status_tab/donation_tab.php"><b>STATUS</b><b></b></a>
                    
                    <!--<ul class="dropdown-menu">
                    
                       
                      
                       <li><a href="studentcouncil.htm">Student Council</a></li>
                       <li><a href="academicresults.htm">Academic Result</a></li>
                       <li><a href="academicexamination.htm">Academic examination</a></li>
                       <li><a href="annualprograms.htm">Annual programs</a></li>
                       <li><a href="academiccalender.htm">Academic Calender</a></li>
                        
                    </ul>-->
                    </li>
                    <li class="dropdown">
                    <a href="logout.php"><b>LOGOUT</b><b></b></a></li>
                    
                  <!--   <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Administration</b><b class="caret"></b></a>
                    
                    <ul class="dropdown-menu">
                    
                      
                       <li><a href="">Committees</a></li>
                       <li><a href="">Administrative Staf</a></li>
                       <li><a href="">Staff Service Rules</a></li>
                       <li><a href="">Code of ethics for staff</a></li>
                       <li><a href="">New Staff Induction Manual</a></li>
                       <li><a href="">Staff working committees</a></li>
                        
                    </ul>
                    </li>
                    -->
                   
                   
                  <!-- <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Departments</b><b class="caret"></b></a>
                       
                       <ul class="dropdown-menu">
                       
                            <li><a href="CMPN_home.html">Computer</a></li>
                           <li><a href="IT_home.html">IT</a></li>
                           <li><a href="EXTC_home.html">Electronics and telecommunication</a></li>
                       </ul>
                    
                    </li>-->
                    
                    
                  <!--  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Events</b><b class="caret"></b></a>
                    
                        <ul class="dropdown-menu">
                    
                      
                       <li><a href="main-4.htm">Prayas2017</a></li>
                       <li><a href="http://sfitengg.org/technotron/technotron.html">Technotron</a></li>
                       <li><a href="http://irisfest.com/">IRIS 2017</a></li>
                      
                       <li><a href="cscita.htm">CSCITA</a></li>
                          
                    </ul>
                    
                    
          </li>-->
                   
              <!--    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Placements</b><b class="caret"></b></a>
                    
                        <ul class="dropdown-menu">
                    
                      
                       <li><a href="Placement.html">Placement Division</a></li>
                       <li><a href="committee.html">Placement Committee</a></li>
                       <li><a href="feedback.html">Feedback</a></li>
                       <li><a href="placement-record.html">Placement Records</a></li>
                      
                       
                          
                    </ul>
                    
                    
          </li>-->
  
                    
                 <!--   
                    <li >
                    <a href="#"><b>Parents Corner</b></a>
                    
          </li>
                    
                  -->
                   
                  
                </ul>
                
                <!--<form class="navbar-form navbar-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                                    <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                    </div>
                            </div>
                 </form>
                -->
                
                
              </div>
            
          </div>
        
       </div>
       
      
       
       
      
       <br>
       <br>
       <br>
      <div>
      <center><h1><font color="white">DONATION INFORMATION</font></h1></center>
      </div>
      
      <div>
      <form action="donor_home.php" method="POST">
        <center><img src="http://logottica.com/wp-content/uploads/2011/05/fd-francisdrake-design-1v1.jpg" width="250" height="150" alt="Avatar" class="avatar"></center>
      </div>
      <br> 
       <div>
       <center><label><h3><b>Name:</b></h3></label>
    <input type="text" id="name" placeholder="Enter Name" name="Name" required><br></center><br>

    <center><label><h3><b>&nbsp;&nbsp;&nbsp;Contact:</b></h3></label>
    <input type="Contact" id="Contact" placeholder="Enter Contact" name="Contact" required><br></center><br>

     <center><label><h3><b>Email:</b></h3></label>
    <input type="Email" id="Email" placeholder="Enter Email" name="Email" required><br></center><br>

    <center><label><h3><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address:</b></h3></label>
    <input type="Address" id="Address" placeholder="Enter Address" name="Address" required><br></center><br>


    <center><label><h3><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Food Name:</b></h3></label>
    <input type="text" id="food" placeholder="Enter Food Name" name="FoodName" required><br></center><br>

    <center><label><h3><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity:</b></h3></label>
    <input type="Quantity" id="Quantity" placeholder="Enter Quantity" name="Quantity" required><br></center><br>

    <center><label><h3><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Best Before:</b></h3></label>
    <input type="date" id="date" placeholder="Expiry date" name="BestBefore" required><br></center><br>

   <!-- <center><label><h3><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nearest Station:</b></h3></label>
    <input type="Station" id="user" placeholder="Enter Nearest Station" name="user" required><br></center><br>-->

    <center><h3><b>Type:</b></h3><input type="Radio" name="Type"><h3>Veg</h3>
        <input type="Radio" name="Type"><h3>Non-Veg</h3></center><br>








        <!--<a href="login/login.php"><center><p><button type="submit">Add Image</button></p></center></a><br>-->
        <center><p><button name="submit_btn" type="submit" id="btn">DONE</button></p></center>
       </div>

      </form>
         
            
                  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   <!-- <script src="js/bootstrap.min.js"></script>
    -->
    
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
      </body>
</html>