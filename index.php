<!DOCTYPE html>
<html lang="en">
  <head>
	 
	  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOME</title>
	  <style>
		  
	  </style>
	  <script>
	  	function nightVision(){
		  document.body.style.backgroundColor = "grey";
		  document.body.style.color = "white";
		  
			document.getElementById("navid").className = "navbar fixed-top navbar-expand-lg bg-dark navbar-dark";
		  
		}
	  </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-1.8.2.min.js"></script>
  <script src="https://cdn.rawgit.com/vast-engineering/jquery-popup-overlay/1.7.13/jquery.popupoverlay.js"></script>

	  
  </head>
  <body style="padding-top: 7%">
	  <div class="container-fluid">
<nav class="navbar fixed-top navbar-expand-lg bg-light navbar-light" id="navid">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent1">
		<img src="lazzazlogo.jpg" alt="Placeholder image" width="99" height="1" class="img-fluid navbar-brand rounded-circle">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active"> <a class="nav-link" href="index.php">Home<span class="sr-only"></span></a></li>
        
		
		  <li class="nav-item"> <a class="nav-link" href="aboutus11.html">About us</a> </li>
	
		 <li class="nav-item"> <a class="nav-link" href="memberships.html">Memberships</a> </li>
		  <li class="nav-item"> <a class="nav-link" href="ourhourses.html">Our horses</a> </li>
	 
<li class="nav-item "> <a class="nav-link" href="contactus11.html"> Contact us </a>
        
        </li>
      </ul>
      
<button class="btn btn-outline-success my_popup_open" type="submit">Log in</button> &nbsp 
		     <div id="my_popup">
 
   <div class="container" style="padding-top:7%;">
   <div class="row" >
                <form class="container" action="testlogin.php" method="post" style="color:white;">
               
                  <h2>Login </h2><hr> 
               
                 <div class="row">
                  <div class="col-lg-5">
                        <div class="form-group">
                                <label for="username" >First Name:</label>
                                <input type="text" class="form-control" id='username' name='username' maxlength="50" placeholder="Username">
                        </div>
                        
                  </div>
                  <br>
                  <div class="col-lg-5">
                        <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                  </div>
                  <div>
                  
                  <div class="radio">
                                <div class="form-group">
                                                        <label><input type="radio" name="type" value="admin">Admin &nbsp </label>
                                                        <label><input type="radio" name="type"  value="user">User &nbsp </label>
                                                </div>
                                        </div>
                 
                
                  
                  
                        	<input type="checkbox" name="checkbox" class="form-control"/>
								<label >Remember me</label>
                        </div>
                 </div>
                  </br><input type="submit" name="Submit" value="Log in" class="btn btn-info"/><hr>
       
 
  </div>
</div>
 
 
  </div>
 
 
  <script>
    $(document).ready(function() {
      $('#my_popup').popup();
 
    });
  </script>
		   <script>
	  	function nightVision(){
		  document.body.style.backgroundColor = "grey";
		  document.body.style.color = "darkgrey";
		  
			document.getElementById("navid").className = "navbar fixed-top navbar-expand-lg bg-dark navbar-dark";
		  
		}
		function morningVision(){
		  document.body.style.backgroundColor = "white";
		  document.body.style.color = "black";
		  
			document.getElementById("navid").className = "navbar fixed-top navbar-expand-lg bg-light navbar-light";
		  
		}
	  </script>
	  <img onClick="nightVision();" src="night.png" class="img-responsive rounded-circle" alt="train" width="30" height="30">
	<img onClick="morningVision();" src="sun.png" class="img-responsive rounded-circle" alt="train" width="40" height="40">
      </form>
		
  </div>
</nav>
  <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
    
    </ol>
    <div class="carousel-inner" role="listbox">
      
      <div class="carousel-item active"> <img class="d-block mx-auto" src="m3Oadrd.jpg" alt="Second slide" style="width:100%">
      
        <div class="carousel-caption">
          <h1>Our horses,</h1>
          <h3>The beauty of each horse is unique</h3>
        </div>
      </div>
      <div class="carousel-item"> <img class="d-block mx-auto" src="AsYGXyx.jpg" alt="Third slide" style="width:100%">
        <div class="carousel-caption">
          <h1>An <strong>Arabian</strong> horse,</h1>
          <h3>It's just beautiful!!</h3>
        </div>
      </div>
    </div>
    
    <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
<!--end of the carousel-->
	  
<footer style="text-align: center;">
<hr>
<a href="https://www.instagram.com/lazzaz_stud/" target="_blank"><img src="insta.png" class="img-responsive rounded-circle" alt="train" width="50" height="50"></a>
Lazzaz_stud
  </footer>

	    
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	  </div>
</body>
</html>
