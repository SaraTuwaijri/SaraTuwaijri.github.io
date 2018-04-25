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
  <body style="padding-top: 10%">
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

  <?php
session_start();

echo "<h1>Welcome User!</h1>";

session_destroy();
?>


		<form action="" method="Get">
<select onchange="getHorsef(this.value)">
  <option value="">Select a person:</option>
  <option value="111">modhi</option>
  <option value="222">hamra</option>
  <option value="333">chico</option>
  <option value="444">champ</option>
  <option value="555">septa</option>
  <option value="777">sultan</option>
 
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
<p>Table: <span id="txtHint"></span></p>

	  
	  
<footer style="text-align: center;">
<hr>
<a href="https://www.instagram.com/lazzaz_stud/" target="_blank"><img src="insta.png" class="img-responsive rounded-circle" alt="train" width="50" height="50"></a>
Lazzaz_stud
  </footer>

	    
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	  </div>
</body>
</html>

