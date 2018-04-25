
<?php 
	
	$connection= mysqli_connect('localhost', 'root','','LoginReg');
	
	if (!$connection){ die("Unable to connect");}
	
	if (isset($_POST['Submit'])){
	
		
	
	$_usernameQuery = $_POST['username'];
	$_passQuery = $_POST['password'];
	
	
	$query1 = "select * from user where username= '$_usernameQuery' and password = '$_passQuery' ";
	$result = mysqli_query($connection,$query1);

	
	 if(mysqli_num_rows($result) == 1 ) {
		 session_start();
	     $row = mysqli_fetch_assoc($result);
   	 
   	 	$_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
         
         header("location:welcome.php");

	 	if(isset($_POST['checkbox'])){
	 	echo "checkbox is checked<br>";
	$cookiename1 = "mayada";
	setcookie($cookiename1 , $_POST['username'], time()+(86400*3));
		if(isset($_COOKIE[$cookiename1])){echo "usrename cookie is set<br>";}
	$cookiename2 = "Aya";
  	setcookie($cookiename2, $_POST['password'], time()+(86400*3));
  	if(isset($_COOKIE[$cookiename2])){echo "password cookie ais set<br>";}
  	
  		if(isset($_SESSION['id'])){echo "id session is set<br>";}
  		if(isset($_SESSION['username'])){echo "username session is set<br>";}
 		   }
 	
 		  }
		 else {
 		   echo "<br><h1>Invalid username or password!!!</h1><br>";
		} 
		
 }

   

	mysqli_close($connection);