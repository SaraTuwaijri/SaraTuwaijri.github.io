
<!DOCTYPE html>
<html lang="en">
  <head>
	 
	  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap - Prebuilt Layout</title>
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
  <body style="padding-top: 10%">
	  <div class="container-fluid">
<nav class="navbar fixed-top navbar-expand-lg bg-light navbar-light" id="navid">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent1">
		<img src="lazzazlogo.jpg" alt="Placeholder image" width="99" height="1" class="img-fluid navbar-brand rounded-circle">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active"> <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a></li>
        
		  <!--This is a dropdown-->
		  <li class="nav-item"> <a class="nav-link" href="aboutus.html">About us</a> </li>
	
		 <li class="nav-item"> <a class="nav-link" href="#card2">Memberships</a> </li>
		  <li class="nav-item"> <a class="nav-link" href="#card2">Our horses</a> </li>
	 
<li class="nav-item "> <a class="nav-link" href="contactus.html"> Contact us </a>
        
        </li>
      </ul>
      
<button class="btn btn-outline-success my_popup_open" type="submit">Log in</button>
		     <div id="my_popup">
 
   <div class="container" style="padding-top:7%;">
   <div class="row" >
                <form class="container" action="search.php" method="post" style="color:white;">
               
                  <h2>Login</h2><hr>
               
                 <div class="row">
                  <div class="col-lg-5">
                        <div class="form-group">
                                <label for="username" >First Name:</label>
                                <input type="text" class="form-control" id='username' name='username' maxlength="50" placeholder="Username">
                        </div>
                        <div>
                        	<input type="checkbox" name="checkbox" class="form-control"/>
								<label >Remember me</label>
                        </div>
                  </div>
                  <br>
                  <div class="col-lg-5">
                        <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                        
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
		  <button type="button" class="btn btn-sm" style="background-color:gray" onClick="nightVision();">Night vision</button>
      </form>
		
  </div>
</nav>

  <?php
session_start();

echo "<h1>Welcome ".$_SESSION['username']."</h1>";

session_destroy();
?>


		<form action="">
<select onchange="getHorsef(this.value)">
  <option value="">Select a person:</option>
  <option value="1">sara</option>
 
  </select>
</form>

<script>
function getHorsef(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
           
            xmlhttp = new XMLHttpRequest();
        } 
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","gethorse.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
<p>Suggestions: <span id="txtHint"></span></p>

	  
<footer style="text-align: center;">
			
<hr>This is a footer, add instagram account.
  </footer>

	    
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	  </div>
</body>
</html>
